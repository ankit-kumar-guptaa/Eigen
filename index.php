<!-- index.php -->
<?php $page='home'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Eigen Prostate Care Centre | MRI Fusion Prostate Biopsy Delhi</title>
  <meta name="description" content="Delhi's leading MRI Fusion Prostate Biopsy centre - safe, precise diagnosis for prostate cancer. Dr Kshitij MS DNB Urologist, Sir Ganga Ram Hospital. Book appointment online.">
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
  <!-- <img class="floating-img img1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiCZY1j6yNNAaEV7oA6qsd_6iiF_MmlpQxmw&s" alt="Doctor"> -->
  <!-- <img class="floating-img img2" src="https://www.ucl.ac.uk/news/sites/news/files/styles/large_image/public/healthy_prostate.png?itok=upB7a0Li" alt="MRI"> -->
  <div class="container content">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <h1 class="display-4 fw-bold mb-3">Precision Prostate Care in Delhi</h1>
        <h2 class="fw-semibold text-primary mb-3">MRI Fusion Biopsy Technology</h2>
        <p class="lead mb-4">Advanced, painless prostate cancer detection with highest accuracy and minimal complications</p>
        
        <div class="d-flex flex-wrap gap-3 mb-4">
          <div class="d-flex align-items-center">
            <i class="bi bi-check-circle-fill text-success me-2"></i>
            <span>99% Accuracy</span>
          </div>
          <div class="d-flex align-items-center">
            <i class="bi bi-check-circle-fill text-success me-2"></i>
            <span>No Rectal Injury</span>
          </div>
          <div class="d-flex align-items-center">
            <i class="bi bi-check-circle-fill text-success me-2"></i>
            <span>Minimal Discomfort</span>
          </div>
        </div>
        
        <div class="d-flex gap-3">
          <a href="#appointment" class="btn btn-primary btn-lg px-4">Book Now</a>
          <a href="#procedure" class="btn btn-outline-primary btn-lg px-4">Learn More</a>
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
      <h2 class="section-title">Why Choose Our Prostate Care Centre?</h2>
      <p class="lead text-muted">Advanced technology combined with expert care for your prostate health</p>
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
            <i class="bi bi-heart-pulse"></i>
          </div>
          <h5>Minimal Pain</h5>
          <p class="mb-0">Perineal approach avoids rectal nerves, significantly reducing discomfort.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 js-fadein">
        <div class="card p-4 h-100 shadow-sm card-hover text-center">
          <div class="feature-icon mx-auto" style="background: #fd7e14;">
            <i class="bi bi-shield-check"></i>
          </div>
          <h5>Low Infection Risk</h5>
          <p class="mb-0">Skin entry point reduces infection risk to less than 1% compared to 5-7% with TRUS.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 js-fadein">
        <div class="card p-4 h-100 shadow-sm card-hover text-center">
          <div class="feature-icon mx-auto" style="background: #6f42c1;">
            <i class="bi bi-clock-history"></i>
          </div>
          <h5>Quick Recovery</h5>
          <p class="mb-0">Most patients resume normal activities within 24 hours with minimal restrictions.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5" id="procedure">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0 js-fadein">
        <img src="https://www.mdpi.com/cancers/cancers-16-01424/article_deploy/html/images/cancers-16-01424-g002.png" alt="MRI Fusion Biopsy Procedure" class="img-fluid rounded-3 shadow">
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
        
        <a href="#appointment" class="btn btn-primary mt-3">Book Your Procedure</a>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light" id="stats">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Our Results Speak for Themselves</h2>
      <p class="lead text-muted">Trusted by hundreds of patients for accurate prostate diagnosis</p>
    </div>
    
    <div class="row g-4">
      <div class="col-6 col-md-3 js-fadein">
        <div class="stats-item">
          <div class="stats-number">98%</div>
          <p class="mb-0 fw-bold">Accuracy Rate</p>
        </div>
      </div>
      <div class="col-6 col-md-3 js-fadein">
        <div class="stats-item">
          <div class="stats-number">500+</div>
          <p class="mb-0 fw-bold">Procedures Done</p>
        </div>
      </div>
      <div class="col-6 col-md-3 js-fadein">
        <div class="stats-item">
          <div class="stats-number">< 1%</div>
          <p class="mb-0 fw-bold">Infection Rate</p>
        </div>
      </div>
      <div class="col-6 col-md-3 js-fadein">
        <div class="stats-item">
          <div class="stats-number">30 min</div>
          <p class="mb-0 fw-bold">Average Duration</p>
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
        <p class="mb-4">With over 8 years of specialized experience in urological care, Dr. Kshitij brings expertise from one of India's premier medical institutions to provide the highest standard of prostate care.</p>
        
        <div class="mb-4">
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>Specialized training in MRI fusion biopsy techniques</span>
          </div>
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>Fellow of the European Association of Urology</span>
          </div>
          <div class="d-flex mb-2">
            <i class="bi bi-check-circle-fill text-primary me-2"></i>
            <span>Published researcher in prostate cancer diagnostics</span>
          </div>
        </div>
        
        <a href="about.php" class="btn btn-outline-primary">Learn More About Dr. Kshitij</a>
      </div>
      <div class="col-lg-6 js-fadein">
        <div class="p-4 bg-white rounded-3 ">
          <img src="https://sgrh.com/assets/img/profile/gab4227.png" alt="Dr. Kshitij" class="img-fluid rounded-2 mb-3">
          <h5 class="text-center mb-0">Dr. Kshitij, MS DNB Urology</h5>
          <p class="text-center text-muted">Prostate Cancer Specialist</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light" id="testimonials">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Patient Experiences</h2>
      <p class="lead text-muted">What our patients say about their MRI fusion biopsy experience</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-4 js-fadein">
        <div class="card p-4 h-100 shadow-sm testimonial-card">
          <div class="d-flex mb-3">
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
          <p class="mb-4">"After avoiding biopsy for years due to fear, the MRI fusion procedure was surprisingly comfortable. Dr. Kshitij's expertise made all the difference."</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Patient" class="rounded-circle me-3" width="50">
            <div>
              <h6 class="mb-0">Rajesh Kumar</h6>
              <small class="text-muted">Prostate Cancer Survivor</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 js-fadein">
        <div class="card p-4 h-100 shadow-sm testimonial-card">
          <div class="d-flex mb-3">
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
          <p class="mb-4">"The accuracy of this test saved me from unnecessary treatment. Other centers missed my cancer, but MRI fusion found it early."</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Patient" class="rounded-circle me-3" width="50">
            <div>
              <h6 class="mb-0">Amit Sharma</h6>
              <small class="text-muted">Patient since 2022</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 js-fadein">
        <div class="card p-4 h-100 shadow-sm testimonial-card">
          <div class="d-flex mb-3">
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-fill text-warning me-1"></i>
            <i class="bi bi-star-half text-warning"></i>
          </div>
          <p class="mb-4">"No pain, no complications, and clear results within days. This is how all medical procedures should be. Highly recommended."</p>
          <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/men/68.jpg" alt="Patient" class="rounded-circle me-3" width="50">
            <div>
              <h6 class="mb-0">Vikram Patel</h6>
              <small class="text-muted">Patient since 2023</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5" id="appointment">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center mb-5">
        <h2 class="section-title">Ready for Your Consultation?</h2>
        <p class="lead">Take the first step toward precise prostate diagnosis and peace of mind</p>
      </div>
    </div>
    
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-4 js-fadein">
        <div class="card p-4 h-100 shadow-sm border-primary">
          <div class="text-center mb-4">
            <i class="bi bi-calendar-check fs-1 text-primary"></i>
          </div>
          <h4 class="text-center mb-3">Clinic Visit</h4>
          <p class="text-center mb-4">In-person consultation at our Greater Kailash facility with Dr. Kshitij</p>
          <ul class="list-unstyled mb-4">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Physical examination</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> PSA test review</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Treatment planning</li>
          </ul>
          <a href="#form" class="btn btn-primary w-100">Book Clinic Visit</a>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4 js-fadein">
        <div class="card p-4 h-100 shadow-sm border-info">
          <div class="text-center mb-4">
            <i class="bi bi-camera-video fs-1 text-info"></i>
          </div>
          <h4 class="text-center mb-3">Video Consultation</h4>
          <p class="text-center mb-4">Remote consultation from the comfort of your home</p>
          <ul class="list-unstyled mb-4">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i> Preliminary assessment</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i> Reports review</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-info me-2"></i> Next steps guidance</li>
          </ul>
          <a href="#form" class="btn btn-info w-100">Book Video Consult</a>
        </div>
      </div>
    </div>
    
    <div class="row justify-content-center mt-5" id="form">
      <div class="col-lg-8 js-fadein">
        <div class="card p-4 shadow">
          <h4 class="text-center mb-4">Appointment Request Form</h4>
          <form method="POST" action="process_appointment.php" class="needs-validation" novalidate>
            <div class="row mb-3">
              <div class="col-md-6 mb-3 mb-md-0">
                <input name="name" type="text" class="form-control" placeholder="Full Name*" required>
              </div>
              <div class="col-md-6">
                <input name="phone" type="tel" class="form-control" placeholder="Phone Number*" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6 mb-3 mb-md-0">
                <input name="email" type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="col-md-6">
                <select class="form-select" name="service" required>
                  <option value="">Select Service*</option>
                  <option value="Consultation">Consultation</option>
                  <option value="MRI Fusion Biopsy">MRI Fusion Biopsy</option>
                  <option value="PSA Test">PSA Test</option>
                  <option value="Follow-up">Follow-up</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6 mb-3 mb-md-0">
                <input name="date" type="date" class="form-control" required>
              </div>
              <div class="col-md-6">
                <select class="form-select" name="time" required>
                  <option value="">Preferred Time*</option>
                  <option value="Morning">Morning (10am-12pm)</option>
                  <option value="Afternoon">Afternoon (12pm-3pm)</option>
                  <option value="Evening">Evening (3pm-7pm)</option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="message" rows="3" placeholder="Any specific concerns?"></textarea>
            </div>
            <input type="hidden" name="source" value="home-bottom">
            <button class="btn btn-primary w-100" type="submit">Request Appointment.</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container text-center">
    <h2 class="text-white mb-4">Still Have Questions About Prostate Biopsy?</h2>
    <p class="lead text-white mb-5">Our team is ready to address all your concerns and guide you through the process</p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="tel:+911145678900" class="cta-btn"><i class="bi bi-telephone me-2"></i> Call Us Now</a>
      <a href="contact.php" class="cta-btn" style="background: transparent; color: white;">Contact Form</a>
    </div>
  </div>
</section>

<section class="py-4 bg-dark text-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-3 mb-md-0">
        <h5 class="mb-0"><i class="bi bi-geo-alt-fill me-2"></i> C-29, Ground Floor, Pamposh Enclave, Greater Kailash 1, New Delhi</h5>
      </div>
      <div class="col-md-6 text-md-end">
        <a href="tel:+911145678900" class="text-white me-3"><i class="bi bi-telephone-fill me-1"></i> +91 1145678900</a>
        <a href="mailto:info@eigenprostate.com" class="text-white"><i class="bi bi-envelope-fill me-1"></i> info@eigenprostate.com</a>
      </div>
    </div>
  </div>
</section>

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