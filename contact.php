<?php
$currentPage = 'contact';
$pageTitle = 'Contact Us';
$pageDescription = 'Contact Suprainspire Education — send your message, securely stored in our database for prompt follow-up.';
// include('includes/db.php');
$success = $error = '';

// Anti-spam: honeypot + Google reCAPTCHA
$honeypot = isset($_POST['website']) ? trim($_POST['website']) : '';
$recaptchaSecret = 'YOUR_SECRET_KEY_HERE';
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($honeypot)) {
    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
    $captchaSuccess = json_decode($verify);

    if ($captchaSuccess->success) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);

        if ($name && $email && filter_var($email, FILTER_VALIDATE_EMAIL) && $subject && $message) {
            $stmt = $pdo->prepare("INSERT INTO messages (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, NOW())");
            if ($stmt->execute([$name, $email, $subject, $message])) {
                $success = 'Thank you! Your message has been sent successfully.';
            } else {
                $error = 'There was an error sending your message. Please try again.';
            }
        } else {
            $error = 'Please fill in all required fields with valid information.';
        }
    } else {
        $error = 'reCAPTCHA verification failed. Please try again.';
    }
}
include('includes/header.php');
?>

<section class="hero d-flex align-items-center justify-content-center text-white text-center" style="background: url('contact_hero1.jpg') center/cover no-repeat; height: 60vh;">
    <div class="container" data-aos="fade-up">
        <h1 class="display-4 fw-bold">Contact Us</h1>
        <p class="lead">We'd love to hear from you</p>
    </div>
</section>

<section class="py-5 container">
    <div class="row g-5">
        <div class="col-md-5" data-aos="fade-right">
            <h2>Get in Touch</h2>
            <p>We are here to answer your questions and guide you.</p>
            <p><i class="fas fa-map-marker-alt text-primary me-2"></i> 123 Education Street, Learning City</p>
            <p><i class="fas fa-phone text-primary me-2"></i> +1 234 567 890</p>
            <p><i class="fas fa-envelope text-primary me-2"></i> info@suprainspire.com</p>
            <p><i class="fas fa-clock text-primary me-2"></i> Mon - Fri: 9am - 6pm</p>
        </div>

        <div class="col-md-7" data-aos="fade-left">
            <h2>Send Us a Message</h2>
            <?php if ($success): ?>
                <div class="alert alert-success"> <?php echo $success; ?> </div>
            <?php elseif ($error): ?>
                <div class="alert alert-danger"> <?php echo $error; ?> </div>
            <?php endif; ?>
            <form action="contact.php" method="post">
                <!-- Honeypot field -->
                <input type="text" name="website" style="display:none">
                <div class="mb-3">
                    <label for="name" class="form-label">Name*</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email*</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject*</label>
                    <input type="text" name="subject" id="subject" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message*</label>
                    <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY_HERE"></div>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container text-center">
        <h2>Find Us Here</h2>
        <div class="ratio ratio-16x9 mt-3">
            <iframe src="https://www.google.com/maps/embed?..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>

<!-- Load reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
