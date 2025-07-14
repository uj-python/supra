<?php
$currentPage = 'about';
$pageTitle = 'About Us';
$pageDescription = 'Learn about Suprainspire Education, our mission, and how we guide students towards global education success with personalized support.';
include('includes/header.php');
?>

<section class="hero d-flex align-items-center justify-content-center text-white text-center" style="background: url('about_hero.jpg') center/cover no-repeat; height: 60vh;">
    <div class="container" data-aos="fade-up">
        <h1 class="display-4 fw-bold">About Suprainspire Education</h1>
        <p class="lead">Empowering Your Global Education Dreams</p>
    </div>
</section>

<section class="py-5 container">
    <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right">
            <img src="/supra/assets/images/about/about.jpg" alt="About Suprainspire" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6" data-aos="fade-left">
            <h2 class="fw-bold mb-3">Who We Are</h2>
            <p>Suprainspire Education is dedicated to guiding aspiring students toward their dream universities worldwide. We believe in transparent, ethical, and personalized counseling that aligns with your goals, ensuring you confidently embark on your education journey abroad.</p>
            <p>Our experienced counselors and test preparation experts assist you from choosing the right course and country to preparing for tests and securing your student visa with high success rates.</p>
            <a href="contact.php" class="btn btn-primary mt-3">Get in Touch</a>
        </div>
    </div>
</section>

<section class="py-5 bg-light text-center container">
    <div class="row">
        <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <i class="fas fa-bullseye fa-2x text-primary mb-2"></i>
            <h3 class="fw-bold">Our Mission</h3>
            <p>To empower students with transparent, ethical, and personalized guidance, helping them confidently achieve their international education goals.</p>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <i class="fas fa-eye fa-2x text-primary mb-2"></i>
            <h3 class="fw-bold">Our Vision</h3>
            <p>To become the most trusted global education consultancy known for delivering results, building trust, and transforming lives through international education opportunities.</p>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
