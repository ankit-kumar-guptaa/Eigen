<!-- contact.php -->
<?php $page='contact'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact | Eigen Prostate Care Centre | MRI Fusion Biopsy Delhi</title>
  <meta name="description" content="Contact Eigen Prostate Care Centre in Delhi for MRI Fusion Prostate Biopsy appointments. Find our location, phone numbers, and contact form.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
  <link href="css/style.css" rel="stylesheet">
  <style>
    /* Consistent with existing styles */
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
    
    .contact-card {
      transition: all 0.3s ease;
      border: none;
      height: 100%;
    }
    
    .contact-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .contact-icon {
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
    
    .bg-light-gradient {
      background: linear-gradient(135deg, rgba(13,110,253,0.05) 0%, rgba(255,255,255,1) 100%);
    }
    
    .form-control:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    
    .map-container {
      overflow: hidden;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .map-container iframe {
      width: 100%;
      height: 100%;
      min-height: 300px;
      border: 0;
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
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li> -->
        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
      </ul>
      <a href="#appointment" class="btn btn-primary ms-3 d-none d-md-inline-block">Book Appointment</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="py-5 bg-light-gradient">
  <div class="container py-5">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 js-fadein">
        <h1 class="display-5 fw-bold mb-3">Contact Eigen Prostate Care</h1>
        <p class="lead mb-4">Reach out for appointments, queries, or second opinions. Our team is here to help.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="#appointment" class="btn btn-primary px-4"><i class="bi bi-calendar-check me-2"></i> Book Appointment</a>
          <a href="#location" class="btn btn-outline-primary px-4"><i class="bi bi-geo-alt me-2"></i> View Location</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Methods -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center js-fadein">
        <h2 class="section-title mb-3">How Can We Help You?</h2>
        <p class="lead text-muted">Multiple ways to get in touch with our prostate care specialists</p>
      </div>
    </div>
    
    <div class="row g-4">
      <div class="col-md-4 js-fadein">
        <div class="card p-4 h-100 shadow-sm contact-card text-center">
          <div class="contact-icon mx-auto">
            <i class="bi bi-telephone"></i>
          </div>
          <h4 class="mb-3">Call Us</h4>
          <p class="mb-4">Speak directly with our care coordinators for appointments or queries</p>
          <div class="d-flex flex-column">
            <a href="tel:+911145678900" class="btn btn-outline-primary mb-2">
              <i class="bi bi-telephone me-2"></i> +91 1145678900
            </a>
            <a href="tel:+919876543210" class="btn btn-outline-primary">
              <i class="bi bi-phone me-2"></i> +91 9876543210
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4 js-fadein">
        <div class="card p-4 h-100 shadow-sm contact-card text-center">
          <div class="contact-icon mx-auto" style="background: #20c997;">
            <i class="bi bi-envelope"></i>
          </div>
          <h4 class="mb-3">Email Us</h4>
          <p class="mb-4">Send us your medical reports or questions for detailed responses</p>
          <div class="d-flex flex-column">
            <a href="mailto:info@eigenprostate.com" class="btn btn-outline-success mb-2">
              <i class="bi bi-envelope me-2"></i> info@eigenprostate.com
            </a>
            <a href="mailto:drkhritij@eigenprostate.com" class="btn btn-outline-success">
              <i class="bi bi-person-circle me-2"></i> drkhritij@eigenprostate.com
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4 js-fadein">
        <div class="card p-4 h-100 shadow-sm contact-card text-center">
          <div class="contact-icon mx-auto" style="background: #fd7e14;">
            <i class="bi bi-geo-alt"></i>
          </div>
          <h4 class="mb-3">Visit Us</h4>
          <p class="mb-4">Schedule an in-person consultation at our Greater Kailash center</p>
          <address class="mb-4">
            C-29, Ground Floor<br>
            Pamposh Enclave, Greater Kailash 1<br>
            New Delhi - 110048
          </address>
          <a href="#location" class="btn btn-outline-warning">
            <i class="bi bi-map me-2"></i> View on Map
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Appointment Form -->
<section class="py-5 bg-light" id="appointment">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow-sm js-fadein">
          <div class="card-body p-4 p-md-5">
            <h2 class="section-title mb-4">Book an Appointment</h2>
            <p class="mb-4">Fill out the form below and our team will contact you to confirm your appointment</p>
            
            <form method="POST" action="process_appointment.php" class="needs-validation" novalidate>
              <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="name" class="form-label">Full Name *</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-6">
                  <label for="phone" class="form-label">Phone Number *</label>
                  <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              
              <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="date" class="form-label">Preferred Date *</label>
                  <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="col-md-6">
                  <label for="time" class="form-label">Preferred Time *</label>
                  <select class="form-select" id="time" name="time" required>
                    <option value="">Select Time Slot</option>
                    <option value="Morning (10am-12pm)">Morning (10am-12pm)</option>
                    <option value="Afternoon (12pm-3pm)">Afternoon (12pm-3pm)</option>
                    <option value="Evening (3pm-7pm)">Evening (3pm-7pm)</option>
                  </select>
                </div>
              </div>
              
              <div class="mb-3">
                <label for="service" class="form-label">Service Required *</label>
                <select class="form-select" id="service" name="service" required>
                  <option value="">Select Service</option>
                  <option value="Consultation">Consultation with Dr. Khritij</option>
                  <option value="MRI Fusion Biopsy">MRI Fusion Biopsy</option>
                  <option value="PSA Test">PSA Test</option>
                  <option value="Follow-up">Follow-up Visit</option>
                  <option value="Second Opinion">Second Opinion</option>
                </select>
              </div>
              
              <div class="mb-4">
                <label for="message" class="form-label">Additional Information</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
              </div>
              
              <input type="hidden" name="source" value="contact-page">
              
              <button type="submit" class="btn btn-primary w-100 py-2">Request Appointment</button>
              
              <p class="small text-muted mt-3 mb-0">
                <i class="bi bi-shield-lock-fill me-1"></i> Your information is secure and will not be shared
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Location Map -->
<section class="py-5" id="location">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center js-fadein">
        <h2 class="section-title mb-3">Our Location</h2>
        <p class="lead text-muted">Conveniently located in Greater Kailash 1 with ample parking</p>
      </div>
    </div>
    
    <div class="row g-4 align-items-center">
      <div class="col-lg-6 js-fadein">
        <div class="map-container shadow">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.715014087295!2d77.2348643150812!3d28.54973398245041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3a25f46d9a9%3A0x6d5a9b0b9b0b9b0b!2sGreater%20Kailash%201%2C%20New%20Delhi%2C%20Delhi%20110048!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <div class="col-lg-6 js-fadein">
        <div class="ps-lg-4">
          <h3 class="h4 fw-bold mb-3">Eigen Prostate Care Centre</h3>
          <address class="mb-4">
            <p class="mb-2"><i class="bi bi-geo-alt-fill text-primary me-2"></i> C-29, Ground Floor, Pamposh Enclave,<br>Greater Kailash 1, New Delhi - 110048</p>
            <p class="mb-2"><i class="bi bi-telephone-fill text-primary me-2"></i> +91 1145678900</p>
            <p class="mb-2"><i class="bi bi-envelope-fill text-primary me-2"></i> info@eigenprostate.com</p>
          </address>
          
          <h5 class="fw-bold mb-3">Clinic Hours</h5>
          <ul class="list-unstyled mb-4">
            <li class="mb-2"><strong>Monday - Friday:</strong> 3pm - 7pm</li>
            <li class="mb-2"><strong>Saturday:</strong> 10am - 2pm</li>
            <li class="mb-2"><strong>Sunday:</strong> Closed (Emergency calls only)</li>
          </ul>
          
          <h5 class="fw-bold mb-3">Getting Here</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-subway text-primary me-2"></i> <strong>Nearest Metro:</strong> Greater Kailash (1km)</li>
            <li class="mb-2"><i class="bi bi-p-square text-primary me-2"></i> <strong>Parking:</strong> Available in building</li>
            <li class="mb-2"><i class="bi bi-bus-front text-primary me-2"></i> <strong>Bus Routes:</strong> 534, 543, 580</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Emergency Contact -->
<section class="py-5 bg-primary text-white">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8 js-fadein">
        <h2 class="mb-4">Need Immediate Assistance?</h2>
        <p class="lead mb-4">For urgent prostate-related concerns outside clinic hours, our urologist is available for emergency consultations.</p>
        <a href="tel:+919876543210" class="btn btn-light btn-lg px-4 me-2"><i class="bi bi-telephone me-2"></i> Emergency: +91 9876543210</a>
        <a href="mailto:emergency@eigenprostate.com" class="btn btn-outline-light btn-lg px-4"><i class="bi bi-envelope me-2"></i> Emergency Email</a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<!-- <footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <h5 class="text-primary mb-3">EIGEN Prostate Care</h5>
        <p>Delhi's premier center for advanced prostate diagnosis and treatment using cutting-edge MRI fusion biopsy technology.</p>
        <div class="d-flex gap-3">
          <a href="#" class="text-white"><i class="bi bi-facebook fs-5"></i></a>
          <a href="#" class="text-white"><i class="bi bi-twitter fs-5"></i></a>
          <a href="#" class="text-white"><i class="bi bi-linkedin fs-5"></i></a>
          <a href="#" class="text-white"><i class="bi bi-instagram fs-5"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
        <h6 class="text-primary mb-3">Quick Links</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
          <li class="mb-2"><a href="about.php" class="text-white text-decoration-none">About Us</a></li>
          <li class="mb-2"><a href="services.php" class="text-white text-decoration-none">Services</a></li>
          <li class="mb-2"><a href="faq.php" class="text-white text-decoration-none">FAQ</a></li>
          <li class="mb-2"><a href="contact.php" class="text-white text-decoration-none">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
        <h6 class="text-primary mb-3">Services</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">MRI Fusion Biopsy</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">PSA Testing</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">Prostate Cancer Screening</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">Treatment Planning</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">Second Opinion</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4">
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
      &copy; <?=date('Y')?> Eigen Prostate Care Centre, New Delhi. All Rights Reserved. | <a href="#" class="text-white text-decoration-none">Privacy Policy</a> | <a href="#" class="text-white text-decoration-none">Terms of Service</a>
    </div>
  </div>
</footer> -->

<?php include "footer.php"?>
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