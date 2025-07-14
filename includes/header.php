<?php
// header.php with SEO support
if (!isset($currentPage)) {
    $currentPage = '';
}
if (!isset($pageTitle)) {
    $pageTitle = 'Suprainspire Education';
}
if (!isset($pageDescription)) {
    $pageDescription = 'Suprainspire Education offers transparent, ethical, personalized counseling for students aiming to study abroad with confidence.';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($pageTitle) . ' - Suprainspire Education'; ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="/supra/assets/css/style.css" />
    <link rel="stylesheet" href="/supra/assets/css/testimonial_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="/supra/assets/images/logo.png" alt="Suprainspire Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link <?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link <?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About</a></li>
                    <li class="nav-item"><a href="services.php" class="nav-link <?php echo ($currentPage == 'services') ? 'active' : ''; ?>">Services</a></li>
                    <li class="nav-item"><a href="test-preparation.php" class="nav-link <?php echo ($currentPage == 'testprep') ? 'active' : ''; ?>">Test Preparation</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                    <li class="nav-item"><a href="admin.php" class="nav-link <?php echo ($currentPage == 'admin') ? 'active' : ''; ?>">Admin</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>