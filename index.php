<?php $page='home'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Eigen Prostate & Urology Care Centre | MRI Fusion Biopsy & Robotic Surgery Delhi</title>
  <meta name="description" content="Delhi's leading center for MRI Fusion Prostate Biopsy & Robotic Urological Surgeries. Complete prostate cancer treatment including laparoscopic and endoscopic procedures. Dr Kshitij MS DNB Urologist.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>
    :root {
      --primary: #0d6efd;
      --secondary: #6c757d;
      --info: #0dcaf0;
      --light: #f8f9fa;
      --dark: #212529;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }
    
    .navbar-brand {
      font-size: 1.8rem;
      color: var(--primary) !important;
    }
    
    .hero {
      min-height: 90vh;
      background: linear-gradient(135deg, rgba(13,110,253,0.1) 0%, rgba(255,255,255,1) 100%);
      padding: 80px 0;
      overflow: hidden;
    }
    
    .floating-img {
      position: absolute;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      opacity: 0.8;
      z-index: 0;
    }
    
    .floating-img.img1 {
      width: 300px;
      top: 10%;
      left: 5%;
      animation: float 8s ease-in-out infinite;
    }
    
    .floating-img.img2 {
      width: 250px;
      bottom: 10%;
      right: 5%;
      animation: float 6s ease-in-out 1s infinite;
    }
    
    .hero .content {
      position: relative;
      z-index: 1;
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
    
    .card-hover {
      transition: all 0.3s ease;
      border: none;
    }
    
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .btn-appointment {
      background: var(--primary);
      color: white;
      font-weight: 600;
      padding: 10px 20px;
      border-radius: 50px;
      transition: all 0.3s;
    }
    
    .btn-appointment:hover {
      background: #0b5ed7;
      transform: translateY(-2px);
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
    
    .testimonial-card {
      border-left: 4px solid var(--primary);
    }
    
    .stats-item {
      text-align: center;
      padding: 30px 15px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .stats-number {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--primary);
    }
    
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
      100% { transform: translateY(0px); }
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
    
    .procedure-step {
      position: relative;
      padding-left: 80px;
      margin-bottom: 40px;
    }
    
    .step-number {
      position: absolute;
      left: 0;
      top: 0;
      width: 60px;
      height: 60px;
      background: var(--primary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      font-weight: 700;
    }
    
    .cta-section {
      background: linear-gradient(135deg, var(--primary) 0%, #0b5ed7 100%);
      color: white;
      padding: 80px 0;
      position: relative;
      overflow: hidden;
    }
    
    .cta-section:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=1350&q=80') center/cover;
      opacity: 0.1;
    }
    
    .cta-btn {
      background: white;
      color: var(--primary);
      font-weight: 600;
      padding: 12px 30px;
      border-radius: 50px;
      transition: all 0.3s;
      border: 2px solid white;
    }
    
    .cta-btn:hover {
      background: transparent;
      color: white;
    }
    
    .machine-img {
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
    
    .treatment-card {
      border-radius: 10px;
      overflow: hidden;
      transition: all 0.3s;
    }
    
    .treatment-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .treatment-card img {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white py-3 shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">
      <span class="text-primary">EIGEN</span> Prostate Care
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link<?=($page=='home' ? ' active' : '')?>" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link<?=($page=='about' ? ' active' : '')?>" href="about.php">About</a></li>
        <!-- <li class="nav-item"><a class="nav-link<?=($page=='services' ? ' active' : '')?>" href="services.php">Services</a></li> -->
        <li class="nav-item"><a class="nav-link<?=($page=='faq' ? ' active' : '')?>" href="faq.php">FAQ</a></li>
        <li class="nav-item"><a class="nav-link<?=($page=='contact' ? ' active' : '')?>" href="contact.php">Contact</a></li>
      </ul>
      <a href="#appointment" class="btn btn-primary ms-3 d-none d-md-inline-block">Book Appointment</a>
    </div>
  </div>
</nav>

<section class="hero position-relative d-flex align-items-center justify-content-center">
 
  <div class="container content">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <h1 class="display-4 fw-bold mb-3">Complete Prostate & Urology Care in Delhi</h1>
        <h2 class="fw-semibold text-primary mb-3">Advanced Robotic & Laparoscopic Treatments</h2>
        <p class="lead mb-4">From precise MRI fusion biopsies to minimally invasive robotic surgeries - comprehensive urological care at affordable costs</p>
        
        <div class="d-flex flex-wrap gap-3 mb-4">
          <div class="d-flex align-items-center">
            <i class="bi bi-check-circle-fill text-success me-2"></i>
            <span>MRI Fusion Biopsy</span>
          </div>
          <div class="d-flex align-items-center">
            <i class="bi bi-check-circle-fill text-success me-2"></i>
            <span>Da Vinci Robotic Surgery</span>
          </div>
          <div class="d-flex align-items-center">
            <i class="bi bi-check-circle-fill text-success me-2"></i>
            <span>Laparoscopic Procedures</span>
          </div>
        </div>
        
        <div class="d-flex gap-3">
          <a href="#appointment" class="btn btn-primary btn-lg px-4">Book Now</a>
          <a href="#treatments" class="btn btn-outline-primary btn-lg px-4">Our Treatments</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="p-4 bg-white rounded-3 shadow-lg">
          <h4 class="mb-3 text-center text-primary">Book Your Consultation</h4>
          <form method="POST" action="process_appointment.php" class="needs-validation" novalidate>
            <div class="mb-3">
              <input name="name" type="text" class="form-control py-2" placeholder="Full Name*" required>
            </div>
            <div class="mb-3">
              <input name="phone" type="tel" class="form-control py-2" placeholder="Phone Number*" required pattern="[0-9+\-\s]{8,15}">
            </div>
            <div class="mb-3">
              <input name="email" type="email" class="form-control py-2" placeholder="Email (optional)">
            </div>
            <div class="row mb-3">
              <div class="col-md-6 mb-2 mb-md-0">
                <input name="date" type="date" class="form-control py-2" required>
              </div>
              <div class="col-md-6">
                <input name="time" type="time" class="form-control py-2" required>
              </div>
            </div>
            <input type="hidden" name="source" value="home-hero">
            <button class="btn btn-primary w-100 py-2" type="submit">Confirm Appointment</button>
          </form>
          <p class="small text-muted mt-3 mb-0 text-center">
            <i class="bi bi-shield-lock-fill me-1"></i> Your information is 100% secure
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light" id="features">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Why Choose Our Urology Centre?</h2>
      <p class="lead text-muted">Advanced technology combined with expert care for complete urological health</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 js-fadein">
        <div class="card p-4 h-100 shadow-sm card-hover text-center">
          <div class="feature-icon mx-auto">
            <i class="bi bi-activity"></i>
          </div>
          <h5>High Accuracy</h5>
          <p class="mb-0">MRI fusion technology provides 3-4x better cancer detection than traditional methods.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 js-fadein">
        <div class="card p-4 h-100 shadow-sm card-hover text-center">
          <div class="feature-icon mx-auto" style="background: #20c997;">
            <i class="bi bi-robot"></i>
          </div>
          <h5>Robotic Precision</h5>
          <p class="mb-0">Da Vinci robotic system for minimally invasive surgeries with faster recovery.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 js-fadein">
        <div class="card p-4 h-100 shadow-sm card-hover text-center">
          <div class="feature-icon mx-auto" style="background: #fd7e14;">
            <i class="bi bi-cash-coin"></i>
          </div>
          <h5>Affordable Costs</h5>
          <p class="mb-0">Same advanced technology as corporate hospitals at significantly lower costs.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 js-fadein">
        <div class="card p-4 h-100 shadow-sm card-hover text-center">
          <div class="feature-icon mx-auto" style="background: #6f42c1;">
            <i class="bi bi-people-fill"></i>
          </div>
          <h5>Complete Care</h5>
          <p class="mb-0">From diagnosis to treatment and follow-up - all under one roof.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5" id="treatments">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Our Comprehensive Treatments</h2>
      <p class="lead text-muted">Advanced urological procedures for complete prostate and urinary health</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 js-fadein">
        <div class="card treatment-card h-100">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqSE2wjkFsSQ-QwrRZXNvYnwPsDOHwhHeI_-PAi4EmMpFDOiIZWJ9IkdjBQz8pZXu5XsY&usqp=CAU" class="card-img-top" alt="Robotic Surgery">
          <div class="card-body">
            <h5 class="card-title">Robotic Prostate Surgery</h5>
            <p class="card-text">Da Vinci robotic system for precise, minimally invasive prostate cancer surgery with minimal blood loss and faster recovery.</p>
            <ul class="mb-3">
              <li>Radical prostatectomy</li>
              <li>Partial gland removal</li>
              <li>Lymph node dissection</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4 js-fadein">
        <div class="card treatment-card h-100">
          <img src="https://media.istockphoto.com/id/1303165283/photo/three-surgeons-doing-laparoscopic-surgery.jpg?s=612x612&w=0&k=20&c=nt3J6Rc5aPHj5V6_juStEhYXxom61ijt8UMl6EdF84Q=" class="card-img-top" alt="Laparoscopic Surgery">
          <div class="card-body">
            <h5 class="card-title">Laparoscopic Procedures</h5>
            <p class="card-text">Minimally invasive surgeries for various urological conditions using small incisions and specialized instruments.</p>
            <ul class="mb-3">
              <li>Laparoscopic prostatectomy</li>
              <li>Kidney stone removal</li>
              <li>Pyeloplasty</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4 js-fadein">
        <div class="card treatment-card h-100">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_dp1J8vgYQB8mFJodb3qkPISAVcfOAYdDtw&s" class="card-img-top" alt="MRI Fusion Biopsy">
          <div class="card-body">
            <h5 class="card-title">MRI Fusion Biopsy</h5>
            <p class="card-text">Precision biopsy combining MRI and ultrasound imaging to accurately target suspicious prostate areas.</p>
            <ul class="mb-3">
              <li>Perineal approach (no rectal entry)</li>
              <li>Higher cancer detection rate</li>
              <li>Lower infection risk</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- <div class="text-center mt-5">
      <a href="services.php" class="btn btn-outline-primary btn-lg">View All Services</a>
    </div> -->
  </div>
</section>

<section class="py-5 bg-light" id="procedure">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0 js-fadein">
        <img src="https://www.mdpi.com/cancers/cancers-16-01424/article_deploy/html/images/cancers-16-01424-g002.png" alt="MRI Fusion Biopsy Procedure" class="img-fluid rounded-3 shadow">
        <div class="text-center mt-4">
          <img src="https://www.healthcarebusinesstoday.com/wp-content/uploads/2022/03/MRI-guided-prostate-biopsy.jpg" alt="Biopsy Machine" class="machine-img img-fluid" style="max-width: 300px;">
          <p class="small text-muted">Our advanced MRI fusion biopsy machine</p>
        </div>
      </div>
      <div class="col-lg-6 js-fadein">
        <h2 class="section-title mb-4">The MRI Fusion Biopsy Procedure</h2>
        <p class="lead mb-4">A precise, minimally invasive approach to prostate cancer diagnosis</p>
        
        <div class="procedure-step">
          <div class="step-number">1</div>
          <h5>MRI Scan</h5>
          <p>High-resolution MRI identifies suspicious areas in the prostate that need targeting.</p>
        </div>
        
        <div class="procedure-step">
          <div class="step-number">2</div>
          <h5>Image Fusion</h5>
          <p>MRI images are fused with real-time ultrasound using advanced software for precision mapping.</p>
        </div>
        
        <div class="procedure-step">
          <div class="step-number">3</div>
          <h5>Targeted Biopsy</h5>
          <p>Needles collect tissue samples from precise locations through the perineal skin (not rectum).</p>
        </div>
        
        <div class="alert alert-info mt-4">
          <strong>Affordable Pricing:</strong> We provide the same advanced MRI fusion biopsy technology as corporate hospitals at significantly lower costs.
        </div>
        
        <a href="#appointment" class="btn btn-primary mt-3">Book Your Procedure</a>
      </div>
    </div>
  </div>
</section>

<section class="py-5" id="robotic">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0 js-fadein">
        <h2 class="section-title mb-4">Robotic Urological Surgeries</h2>
        <h5 class="text-primary mb-3">Da Vinci Surgical System</h5>
        <p class="mb-4">We offer advanced robotic-assisted surgeries for various urological conditions with unparalleled precision and faster recovery times.</p>
        
        <div class="mb-4">
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>3D high-definition visualization</span>
          </div>
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>Wristed instruments with greater range of motion</span>
          </div>
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>Minimal blood loss and smaller incisions</span>
          </div>
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>Reduced hospital stay and faster return to normal activities</span>
          </div>
        </div>
        
        <a href="#appointment" class="btn btn-outline-primary">Consult About Robotic Surgery</a>
      </div>
      <div class="col-lg-6 js-fadein">
        <img src="https://sweetwaternow.nyc3.cdn.digitaloceanspaces.com/wp-content/uploads/2023/03/daVinciRobot-1024x538.jpg" alt="Robotic Surgery" class="img-fluid rounded-3 shadow">
        <div class="text-center mt-4">
          <img src="https://d3.harvard.edu/platform-digit/wp-content/uploads/sites/2/2017/04/da-Vinci-surgical-robot.jpg" alt="Da Vinci Robot" class="machine-img img-fluid" style="max-width: 300px;">
          <p class="small text-muted">Da Vinci Xi Robotic Surgical System</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light" id="stats">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Our Results Speak for Themselves</h2>
      <p class="lead text-muted">Trusted by hundreds of patients for complete urological care</p>
    </div>
    
    <div class="row g-4">
      <div class="col-6 col-md-3 js-fadein">
        <div class="stats-item">
          <div class="stats-number">500+</div>
          <p class="mb-0 fw-bold">Robotic Surgeries</p>
        </div>
      </div>
      <div class="col-6 col-md-3 js-fadein">
        <div class="stats-item">
          <div class="stats-number">1200+</div>
          <p class="mb-0 fw-bold">MRI Fusion Biopsies</p>
        </div>
      </div>
      <div class="col-6 col-md-3 js-fadein">
        <div class="stats-item">
          <div class="stats-number">98%</div>
          <p class="mb-0 fw-bold">Success Rate</p>
        </div>
      </div>
      <div class="col-6 col-md-3 js-fadein">
        <div class="stats-item">
          <div class="stats-number">< 1%</div>
          <p class="mb-0 fw-bold">Complication Rate</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5" id="doctor">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0 js-fadein">
        <h2 class="section-title mb-4">Meet Dr. Kshitij</h2>
        <h5 class="text-primary mb-3">MS DNB Urology (Sir Ganga Ram Hospital)</h5>
        <p class="mb-4">With over 8 years of specialized experience in urological care, Dr. Kshitij brings expertise from one of India's premier medical institutions to provide the highest standard of prostate and urological care.</p>
        
        <div class="mb-4">
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>Specialized training in robotic and laparoscopic urological surgeries</span>
          </div>
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>Fellow of the European Association of Urology</span>
          </div>
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>Published researcher in prostate cancer diagnostics and treatment</span>
          </div>
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>Extensive experience with Da Vinci robotic system</span>
          </div>
        </div>
        
        <a href="about.php" class="btn btn-outline-primary">Learn More About Dr. Kshitij</a>
      </div>
      <div class="col-lg-6 js-fadein">
        <div class="p-4 bg-white rounded-3">
          <img src="https://th.bing.com/th/id/OIP.RbqVbl_y_doOkMZo-PO6-gHaGU?rs=1&pid=ImgDetMain" alt="Dr. Kshitij" class="img-fluid rounded-2 mb-3">
          <h5 class="text-center mb-0">Dr. Kshitij, MS DNB Urology</h5>
          <p class="text-center text-muted">Robotic & Laparoscopic Urology Specialist</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Rest of the sections (Testimonials, Appointment, CTA) remain the same as before -->
<!-- ... -->

<?php include "footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
<script>
  // Simple fade-in animation on scroll
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