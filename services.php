<?php
$currentPage = 'services';
$pageTitle = 'Our Services';
$pageDescription = 'Explore the personalized counseling, test preparation, visa guidance, and workshops offered by Suprainspire Education to support your study abroad goals.';
include('includes/header.php');
?>

<section class="hero d-flex align-items-center justify-content-center text-white text-center" style="background: url('service_hero.jpg') center center / cover no-repeat; height: 60vh;">
    <div class="container" data-aos="fade-up">
        <h1 class="display-4 fw-bold">Our Services</h1>
        <p class="lead">Empowering students with practical skills for a competitive future</p>
    </div>
</section>

<section class="py-5 container">
    <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold">What We Offer</h2>
        <p>Hands-on, industry-focused training to build your career in technology</p>
    </div>

    <div class="row g-5">
        <div class="col-md-6 d-flex flex-column justify-content-center"  data-aos="fade-right">
            <img src="/supra/assets/images/services/laptop-coding.svg" alt="Software Training & Projects" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center" data-aos="fade-left">
            <h3>Software Training & Projects</h3>
            <p>We offer comprehensive software training led by specialists who combine strong technical expertise with effective communication skills to make learning engaging and clear. Students gain practical project experience, ensuring they are industry-ready.</p>
            <a href="contact.php" class="btn btn-primary mt-2">Enquire Now</a>
        </div>
    </div>

    <div class="row g-5 flex-md-row-reverse mt-5">
        <div class="col-md-6 justify-content-center d-flex flex-column"  data-aos="fade-left">
            <img src="/supra/assets/images/services/network-connection.svg" alt="Networking & Hardware" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center" data-aos="fade-right">
            <h3>Networking & Hardware</h3>
            <p>Our training in hardware and networking equips students to understand and manage critical IT infrastructure, covering switches, interface cards, networking cables, and the integration of systems to enable seamless data distribution across networks.</p>
            <a href="contact.php" class="btn btn-primary mt-2">Enquire Now</a>
        </div>
    </div>

    <div class="row g-5 mt-5">
        <div class="col-md-6" data-aos="fade-right">
            <img src="/supra/assets/images/services/factory-building.svg" alt="Industrial Visits & Career Growth Programme" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center" data-aos="fade-left">
            <h3>Industrial Visits & Career Growth Programme</h3>
            <p>We organize industrial visits as part of our structured career growth programs, providing students with practical insights into the internal workings of industries, aligning academic knowledge with real-world exposure for enhanced career readiness.</p>
            <a href="contact.php" class="btn btn-primary mt-2">Enquire Now</a>
        </div>
    </div>

    <div class="row g-5 flex-md-row-reverse mt-5">
        <div class="col-md-6" data-aos="fade-left">
            <img src="/supra/assets/images/services/autocad.svg" alt="CADD Training & Projects" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center" data-aos="fade-right">
            <h3>SCADD Training & Projects</h3>
            <p>Our AutoCAD and CADD training programs guide students progressively from basic to advanced levels, integrating project-based learning to develop strong design and drafting skills applicable in engineering and design industries.</p>
            <a href="contact.php" class="btn btn-primary mt-2">Enquire Now</a>
        </div>
    </div>

    <div class="row g-5 mt-5">
        <div class="col-md-6" data-aos="fade-right">
            <img src="/supra/assets/images/services/internship.svg" alt="Internships & Placements" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center" data-aos="fade-left">
            <h3>Internships & Placements</h3>
            <p>We connect students with internship opportunities that offer valuable hands-on industry experience, leading to potential placements and extended work opportunities aligned with their skillset and academic background.</p>
            <a href="contact.php" class="btn btn-primary mt-2">Enquire Now</a>
        </div>
    </div>

    <div class="row g-5 flex-md-row-reverse mt-5">
        <div class="col-md-6" data-aos="fade-left">
            <img src="/supra/assets/images/services/teacher.svg" alt="High Proficiency Tutors" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center" data-aos="fade-right">
            <h3>High Proficiency Tutors</h3>
            <p>Our tutors possess deep subject expertise paired with effective communication and motivational skills to deliver clear, impactful learning sessions that empower students with confidence in their technical and soft skills.</p>
            <a href="contact.php" class="btn btn-primary mt-2">Enquire Now</a>
        </div>
    </div>

    <div class="row g-5 mt-5">
        <div class="col-md-6" data-aos="fade-right">
            <img src="/supra/assets/images/services/elearning.svg" alt="e-Learning" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center" data-aos="fade-left">
            <h3>e-Learning</h3>
            <p>We offer flexible e-learning solutions, teaching design applications, CAD, and technology-focused problem-solving through projects to prepare students for real-world constraints while fitting into their busy schedules.</p>
            <a href="contact.php" class="btn btn-primary mt-2">Enquire Now</a>
        </div>
    </div>
</section>

<section class="py-5 bg-light text-center" data-aos="fade-up">
    <div class="container">
        <h2>Not Sure Which Service is Right for You?</h2>
        <p>Our expert counselors will help you choose the best training path to match your goals.</p>
        <a href="contact.php" class="btn btn-primary mt-2">Get Personalized Advice</a>
    </div>
</section>



<section class="py-5 bg-light text-center" data-aos="fade-up">
    <div class="container">
        <h2>Not Sure Which Service is Right for You?</h2>
        <p>Our education consultants can help you choose the best program based on your goals and needs.</p>
        <a href="contact.php" class="btn btn-primary mt-2">Get Personalized Advice</a>
    </div>
</section>

<?php include('includes/footer.php'); ?>
