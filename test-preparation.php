<?php
$currentPage = 'testprep';
$pageTitle = 'Test Preparation';
$pageDescription = 'Prepare for IELTS, TOEFL, GRE, GMAT, SAT, and ACT with Suprainspire Education’s expert-led, personalized test preparation programs to achieve your academic goals.';
include('includes/header.php');
?>

<section class="hero d-flex align-items-center justify-content-center text-white text-center" style="background: url('test_hero2.jpg') center/cover no-repeat; height: 60vh;">
    <div class="container" data-aos="fade-up">
        <h1 class="display-4 fw-bold">Test Preparation</h1>
        <p class="lead">Achieve your target scores with our expert-led test preparation programs</p>
    </div>
</section>

<section class="py-5 container">
    <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold">Prepare with Confidence</h2>
        <p>At Suprainspire Education, we offer personalized test preparation for key academic exams</p>
    </div>
    <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100 shadow-sm text-center p-3">
                <i class="fas fa-language fa-2x text-primary mb-3"></i>
                <h5>IELTS & TOEFL</h5>
                <p>Master English proficiency tests with targeted practice, mock exams, and strategies guided by experienced trainers.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100 shadow-sm text-center p-3">
                <i class="fas fa-chart-line fa-2x text-primary mb-3"></i>
                <h5>GRE & GMAT</h5>
                <p>Score high in graduate admissions with comprehensive preparation, practice tests, and reasoning skill enhancement.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100 shadow-sm text-center p-3">
                <i class="fas fa-graduation-cap fa-2x text-primary mb-3"></i>
                <h5>SAT & ACT</h5>
                <p>Tailored coaching for high school students to excel in college entrance exams through structured learning and mentorship.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light text-center" data-aos="fade-up">
    <div class="container">
        <h2>Ready to Start Your Test Prep Journey?</h2>
        <p>Connect with us for a personalized consultation to begin preparing for your success.</p>
        <a href="contact.php" class="btn btn-primary mt-2">Book a Consultation</a>
    </div>
</section>

<?php include('includes/footer.php'); ?>
