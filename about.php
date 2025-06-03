<?php $page='about'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>About | Eigen Prostate & Urology Care Centre Delhi</title>
  <meta name="description" content="Learn more about Eigen Prostate & Urology Care Centre, our team, and our commitment to world-class prostate cancer diagnostics and treatment using MR Fusion biopsy and robotic surgery.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
  <link href="css/style.css" rel="stylesheet">
  <style>
    /* Consistent with index.php styles */
    :root {
      --primary: #0d6efd;
      --secondary: #6c757d;
      --info: #0dcaf0;
      --light: #f8f9fa;
      --dark: #212529;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
    }
    
    .navbar-brand {
      font-size: 1.8rem;
      color: var(--primary) !important;
    }
    
    .section-title {
      font-weight: 700;
      position: relative;
      display: inline-block;
    }
    
    .section-title:after {
      content: '';
      position: absolute;
      width: 50%;
      height: 4px;
      background: var(--primary);
      bottom: -10px;
      left: 0;
      border-radius: 2px;
    }
    
    .feature-icon {
      width: 60px;
      height: 60px;
      background: var(--primary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      margin-bottom: 20px;
    }
    
    .timeline {
      position: relative;
      padding-left: 30px;
    }
    
    .timeline:before {
      content: '';
      position: absolute;
      left: 5px;
      top: 0;
      bottom: 0;
      width: 2px;
      background: var(--primary);
    }
    
    .timeline-item {
      position: relative;
      padding-bottom: 30px;
    }
    
    .timeline-item:before {
      content: '';
      position: absolute;
      left: -30px;
      top: 5px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: var(--primary);
      border: 2px solid white;
    }
    
    .team-card {
      transition: all 0.3s ease;
      border: none;
      overflow: hidden;
    }
    
    .team-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .team-img {
      height: 250px;
      object-fit: cover;
      transition: transform 0.5s;
    }
    
    .team-card:hover .team-img {
      transform: scale(1.05);
    }
    
    .bg-light-gradient {
      background: linear-gradient(135deg, rgba(13,110,253,0.05) 0%, rgba(255,255,255,1) 100%);
    }
    
    .js-fadein {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease;
    }
    
    .js-fadein.visible {
      opacity: 1;
      transform: translateY(0);
    }
    
    .machine-img {
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-md navbar-light bg-white py-3 shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">
      <span class="text-primary">EIGEN</span> Prostate Care
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li> -->
        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
      <a href="contact.php#appointment" class="btn btn-primary ms-3 d-none d-md-inline-block">Book Appointment</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="py-5 bg-light-gradient">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0 js-fadein">
        <h1 class="display-5 fw-bold mb-3">About Eigen Prostate & Urology Care</h1>
        <p class="lead mb-4">Delhi's premier center for advanced prostate diagnosis and comprehensive urological treatment using cutting-edge robotic surgery and MRI fusion biopsy technology.</p>
        <div class="d-flex flex-wrap gap-3">
          <a href="#mission" class="btn btn-primary px-4">Our Mission</a>
          <a href="#technology" class="btn btn-outline-primary px-4">Our Technology</a>
        </div>
      </div>
      <div class="col-lg-6 js-fadein">
        <img src="https://bloximages.chicago2.vip.townnews.com/wvnews.com/content/tncms/assets/v3/editorial/d/7c/d7c5c606-f9ca-11ed-8325-bf60bf80d41a/646d5c5a85a6a.image.jpg?resize=666%2C500" alt="Robotic Surgery at Eigen" class="img-fluid rounded-3 shadow">
      </div>
    </div>
  </div>
</section>

<!-- Mission Section -->
<section class="py-5" id="mission">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center js-fadein">
        <h2 class="section-title mb-3">Our Mission & Vision</h2>
        <p class="lead text-muted">Transforming urological care through precision medicine and compassionate treatment</p>
      </div>
    </div>
    
    <div class="row g-4">
      <div class="col-md-6 js-fadein">
        <div class="card p-4 h-100 shadow-sm">
          <div class="feature-icon mx-auto">
            <i class="bi bi-bullseye"></i>
          </div>
          <h4 class="text-center mb-3">Our Mission</h4>
          <p class="text-center">To provide the most advanced, safe, and effective urological treatments using robotic surgery and MRI fusion technology, while maintaining the highest standards of patient care and medical ethics.</p>
        </div>
      </div>
      <div class="col-md-6 js-fadein">
        <div class="card p-4 h-100 shadow-sm">
          <div class="feature-icon mx-auto" style="background: #20c997;">
            <i class="bi bi-eye"></i>
          </div>
          <h4 class="text-center mb-3">Our Vision</h4>
          <p class="text-center">To become North India's leading urology center by setting benchmarks in surgical precision, diagnostic accuracy, and innovative treatment approaches for prostate and urinary health.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Clinic Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 js-fadein">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqjSm2VMDI0v-YE3rIQdyNsHf_rZCtt-Av_HJiHqhxZdc2oMl_0w4h196k4L8YC8FDZv8&usqp=CAU" alt="Our Robotic Surgery System" class="img-fluid rounded-3 shadow">
        <div class="text-center mt-4">
          <img src="https://auanews.net/images/AUANews/AUA%20News/2025/March%202025/AU-AUAN250008F002.png" alt="Biopsy Machine" class="machine-img img-fluid" style="max-width: 300px;">
          <p class="small text-muted">Our advanced MRI fusion biopsy machine</p>
        </div>
      </div>
      <div class="col-lg-6 js-fadein">
        <h2 class="section-title mb-4">Advanced Urological Care Center</h2>
        <p class="mb-4">Founded with a vision to revolutionize urological treatment in India, <strong>Eigen Prostate & Urology Care Centre</strong> brings together cutting-edge technology and expert surgical care under one roof.</p>
        
        <div class="mb-4">
          <h5 class="fw-bold mb-3">Our Comprehensive Facility</h5>
          <p>Our center in Greater Kailash is equipped with:</p>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> <strong>Da Vinci Xi Robotic Surgical System</strong> for minimally invasive procedures</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> <strong>Artemis MRI Fusion Biopsy</strong> system for precise diagnosis</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Advanced laparoscopic and endoscopic equipment</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Digital operation theaters with 4K visualization</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Comfortable private recovery suites</li>
          </ul>
        </div>
        
        <div class="alert alert-info">
          <i class="bi bi-info-circle-fill me-2"></i> We provide corporate hospital quality treatments at significantly more affordable costs.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Doctor Profile Section -->
<section class="py-5" id="team">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center js-fadein">
        <h2 class="section-title mb-3">Meet Our Expert Urologist</h2>
        <p class="lead text-muted">Led by one of Delhi's most experienced robotic urological surgeons</p>
      </div>
    </div>
    
    <div class="row g-4 align-items-center">
      <div class="col-lg-5 js-fadein">
        <div class="card border-0 shadow-sm overflow-hidden">
          <img src="https://th.bing.com/th/id/OIP.RbqVbl_y_doOkMZo-PO6-gHaGU?rs=1&pid=ImgDetMain" alt="Dr. Kshitij" class="img-fluid">
          <div class="card-footer bg-white text-center py-3">
            <h5 class="mb-0">Dr. Kshitij, MS DNB Urology</h5>
            <small class="text-muted">Robotic & Laparoscopic Urology Specialist</small>
          </div>
        </div>
      </div>
      <div class="col-lg-7 js-fadein">
        <h3 class="h4 fw-bold mb-3">About Dr. Kshitij</h3>
        <p>With over 12 years of specialized experience in urological oncology, Dr. Kshitij brings expertise from India's premier medical institutions to provide the highest standard of robotic and laparoscopic urological care.</p>
        
        <div class="mb-4">
          <h5 class="fw-bold mb-3">Education & Training</h5>
          <div class="timeline">
            <div class="timeline-item mb-3">
              <h6 class="fw-bold">MS (General Surgery)</h6>
              <p class="small text-muted mb-0">All India Institute of Medical Sciences, New Delhi (2008-2011)</p>
            </div>
            <div class="timeline-item mb-3">
              <h6 class="fw-bold">DNB (Urology)</h6>
              <p class="small text-muted mb-0">Sir Ganga Ram Hospital, New Delhi (2012-2015)</p>
            </div>
            <div class="timeline-item mb-3">
              <h6 class="fw-bold">Robotic Surgery Fellowship</h6>
              <p class="small text-muted mb-0">Vattikuti Institute, USA (2016)</p>
            </div>
            <div class="timeline-item">
              <h6 class="fw-bold">Fellowship in Uro-Oncology</h6>
              <p class="small text-muted mb-0">European Association of Urology (2017)</p>
            </div>
          </div>
        </div>
        
        <div class="mb-4">
          <h5 class="fw-bold mb-3">Professional Highlights</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Performed 500+ robotic urological surgeries</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> 1200+ MRI fusion prostate biopsies performed</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Published 20+ research papers on urological cancers</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Faculty at international robotic surgery conferences</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Member, International Robotic Urology Society</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Technology Section -->
<section class="py-5 bg-light" id="technology">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center js-fadein">
        <h2 class="section-title mb-3">Our Advanced Technology</h2>
        <p class="lead text-muted">Cutting-edge equipment for precise diagnosis and treatment</p>
      </div>
    </div>
    
    <div class="row g-4 align-items-center">
      <div class="col-lg-7 js-fadein">
        <h3 class="h4 fw-bold mb-3">Da Vinci Robotic Surgical System</h3>
        <p class="mb-4">Our center is equipped with the latest Da Vinci Xi robotic system that provides unparalleled precision for complex urological procedures with minimal invasiveness.</p>
        
        <div class="row g-3">
          <div class="col-md-6">
            <div class="p-3 bg-white rounded shadow-sm h-100">
              <h5 class="fw-bold mb-3"><i class="bi bi-check-circle text-primary me-2"></i> Key Benefits</h5>
              <ul class="mb-0">
                <li class="mb-2">3D high-definition visualization</li>
                <li class="mb-2">Wristed instruments with 540° rotation</li>
                <li class="mb-2">Minimal blood loss and scarring</li>
                <li class="mb-2">Faster recovery times</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-3 bg-white rounded shadow-sm h-100">
              <h5 class="fw-bold mb-3"><i class="bi bi-graph-up text-primary me-2"></i> Procedures Offered</h5>
              <ul class="mb-0">
                <li class="mb-2">Robotic prostatectomy</li>
                <li class="mb-2">Partial nephrectomy</li>
                <li class="mb-2">Pyeloplasty</li>
                <li class="mb-2">Radical cystectomy</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 js-fadein">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUvUjPAwoSQ975KvdrJtoRgpg81mQykysMEv8KwiUT2QYfNusM6VrWf7MhM2VgiaMMTp0&usqp=CAU" alt="Da Vinci Robotic System" class="img-fluid rounded-3 shadow">
      </div>
    </div>
    
    <div class="row g-4 align-items-center mt-5">
      <div class="col-lg-5 js-fadein">
        <img src="https://www.wregional.com/Uploads/Public/Images/OzarkUrology/Artemis_5.jpg" alt="Artemis MRI Fusion System" class="img-fluid rounded-3 shadow">
      </div>
      <div class="col-lg-7 js-fadein">
        <h3 class="h4 fw-bold mb-3">Artemis MRI Fusion Biopsy System</h3>
        <p class="mb-4">Our center features the latest generation Artemis system that combines high-resolution MRI scans with real-time ultrasound guidance, revolutionizing prostate cancer detection.</p>
        
        <div class="row g-3">
          <div class="col-md-6">
            <div class="p-3 bg-white rounded shadow-sm h-100">
              <h5 class="fw-bold mb-3"><i class="bi bi-check-circle text-primary me-2"></i> Key Benefits</h5>
              <ul class="mb-0">
                <li class="mb-2">3-4x better cancer detection</li>
                <li class="mb-2">Minimal discomfort</li>
                <li class="mb-2">Reduced infection risk</li>
                <li class="mb-2">Accurate tumor mapping</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-3 bg-white rounded shadow-sm h-100">
              <h5 class="fw-bold mb-3"><i class="bi bi-graph-up text-primary me-2"></i> Technical Specs</h5>
              <ul class="mb-0">
                <li class="mb-2">3D prostate modeling</li>
                <li class="mb-2">Sub-millimeter accuracy</li>
                <li class="mb-2">Real-time image fusion</li>
                <li class="mb-2">Automated targeting</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
  <div class="container text-center py-4">
    <h2 class="mb-4">Ready to Take the Next Step for Your Urological Health?</h2>
    <p class="lead mb-5">Schedule a consultation with Dr. Kshitij to discuss your treatment options</p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="contact.php#appointment" class="btn btn-light btn-lg px-4"><i class="bi bi-calendar-check me-2"></i> Book Appointment</a>
      <a href="tel:+911145678900" class="btn btn-outline-light btn-lg px-4"><i class="bi bi-telephone me-2"></i> Call Now</a>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <h5 class="text-primary mb-3">EIGEN Prostate & Urology Care</h5>
        <p>Delhi's premier center for advanced prostate diagnosis and comprehensive urological treatment using robotic surgery and MRI fusion biopsy technology.</p>
      </div>
      <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
        <h6 class="text-primary mb-3">Quick Links</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
          <li class="mb-2"><a href="about.php" class="text-white text-decoration-none">About Us</a></li>
          <!-- <li class="mb-2"><a href="services.php" class="text-white text-decoration-none">Services</a></li> -->
          <li class="mb-2"><a href="faq.php" class="text-white text-decoration-none">FAQ</a></li>
          <li class="mb-2"><a href="contact.php" class="text-white text-decoration-none">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4">
        <h6 class="text-primary mb-3">Clinic Hours</h6>
        <ul class="list-unstyled">
          <li class="mb-2">Monday - Friday: 3pm - 7pm</li>
          <li class="mb-2">Saturday: 10am - 2pm</li>
          <li class="mb-2">Sunday: Closed</li>
          <li class="mb-2">Emergency: 24/7 On Call</li>
        </ul>
      </div>
    </div>
    <hr class="my-4 bg-secondary">
    <div class="text-center small">
      &copy; <?=date('Y')?> Eigen Prostate & Urology Care Centre, New Delhi. All Rights Reserved. | <a href="#" class="text-white text-decoration-none">Privacy Policy</a> | <a href="#" class="text-white text-decoration-none">Terms of Service</a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Consistent with index.php scripts
  document.addEventListener('DOMContentLoaded', function() {
    const fadeElements = document.querySelectorAll('.js-fadein');
    
    const fadeInOnScroll = function() {
      fadeElements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (elementTop < windowHeight - 100) {
          element.classList.add('visible');
        }
      });
    };
    
    window.addEventListener('scroll', fadeInOnScroll);
    window.addEventListener('load', fadeInOnScroll);
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if(targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if(targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: 'smooth'
          });
        }
      });
    });
  });
</script>
</body>
</html>