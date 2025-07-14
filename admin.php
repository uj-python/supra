<?php
// admin.php - Carries-styled, clean Bootstrap admin panel for managing contact form messages
session_start();
require_once('includes/db.php');
$admin_user = 'admin';
$admin_pass = 'password';



if (!isset($_SESSION['admin_logged_in'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim(string: $_POST['username']);
        $password = trim($_POST['password']);

        $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ? and password_hash = ? LIMIT 1");
        $stmt->execute([$username, $password]); // Pass both parameters here
        $admin = $stmt->fetch();

        // if ($admin && password_verify($password, $admin['password_hash'])) {
        if ($admin) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
            header(header: 'Location: admin.php');
            exit;
        } else {
            $error = 'Invalid credentials';
        }
    }



    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="d-flex align-items-center justify-content-center vh-100 bg-light">
        <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
            <h4 class="text-center mb-3">Admin Login</h4>
            <?php if (isset($error)): ?><div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
            <form method="post">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
             <a href="index.php" class="btn btn-link mt-3 text-center">← Back to Home</a>
        </div>
    </body>
    </html>
    <?php
    exit;
}

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $pdo->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->execute([$id]);
    header('Location: admin.php');
    exit;
}

if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename=messages_export.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output, ['ID', 'Name', 'Email', 'Subject', 'Message', 'Date']);
    $stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        fputcsv($output, [$row['id'], $row['name'], $row['email'], $row['subject'], $row['message'], $row['created_at']]);
    }
    fclose($output);
    exit;
}

$search = $_GET['search'] ?? '';
if ($search) {
    $stmt = $pdo->prepare("SELECT * FROM messages WHERE name LIKE ? OR email LIKE ? OR subject LIKE ? OR message LIKE ? ORDER BY created_at DESC");
    $stmt->execute(["%$search%","%$search%","%$search%","%$search%"]);
} else {
    $stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
}
$messages = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class="container py-5">
    <h2 class="mb-4">Contact Form Messages</h2>
    <form method="get" class="row g-2 mb-4">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Search messages..." value="<?php echo htmlspecialchars($search); ?>">
        </div>
        <div class="col-md-8 d-flex gap-2">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="admin.php" class="btn btn-secondary">Reset</a>
            <a href="admin.php?export=csv" class="btn btn-success">Export CSV</a>
            <a href="index.php" class="btn btn-outline-primary ms-auto">← Back to Home</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $msg): ?>
                <tr>
                    <td><?php echo htmlspecialchars($msg['id']); ?></td>
                    <td><?php echo htmlspecialchars($msg['name']); ?></td>
                    <td><?php echo htmlspecialchars($msg['email']); ?></td>
                    <td><?php echo htmlspecialchars($msg['subject']); ?></td>
                    <td><?php echo nl2br(htmlspecialchars($msg['message'])); ?></td>
                    <td><?php echo htmlspecialchars($msg['created_at']); ?></td>
                    <td>
                        <a href="admin.php?delete=<?php echo $msg['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this message?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
     <nav>
        <ul class="pagination justify-content-center">
            
            <?php 
            if ($messages){
                for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?><?php if ($search) echo '&search=' . urlencode($search); ?>"><?php echo $i; ?></a>
                </li>
            
            <?php endfor; } ?>
        </ul>
    </nav>
</div>
</body>
</html>
