<!-- faq.php -->
<?php $page='faq'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FAQ | Eigen Prostate Care Centre | MRI Fusion Biopsy Delhi</title>
  <meta name="description" content="Frequently asked questions about MRI Fusion Prostate Biopsy at Eigen Prostate Care Centre Delhi. Get answers about procedure, safety, cost and more.">
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
    
    .accordion-button:not(.collapsed) {
      background-color: rgba(13, 110, 253, 0.1);
      color: var(--primary);
      font-weight: 600;
    }
    
    .accordion-button:focus {
      box-shadow: none;
      border-color: rgba(13, 110, 253, 0.25);
    }
    
    .accordion-item {
      margin-bottom: 15px;
      border-radius: 8px !important;
      overflow: hidden;
      border: 1px solid rgba(0,0,0,0.1);
    }
    
    .bg-light-gradient {
      background: linear-gradient(135deg, rgba(13,110,253,0.05) 0%, rgba(255,255,255,1) 100%);
    }
    
    .question-category {
      background: white;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 30px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
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
        <li class="nav-item"><a class="nav-link active" href="faq.php">FAQ</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
      <a href="contact.php#appointment" class="btn btn-primary ms-3 d-none d-md-inline-block">Book Appointment</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="py-5 bg-light-gradient">
  <div class="container py-5">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 js-fadein">
        <h1 class="display-5 fw-bold mb-3">Frequently Asked Questions</h1>
        <p class="lead mb-4">Find answers to common questions about MRI Fusion Prostate Biopsy and our services</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="#procedure" class="btn btn-outline-primary">Procedure Questions</a>
          <a href="#safety" class="btn btn-outline-primary">Safety & Recovery</a>
          <a href="#cost" class="btn btn-outline-primary">Cost & Insurance</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Content -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <!-- Procedure Questions -->
        <div class="question-category js-fadein" id="procedure">
          <h3 class="h4 fw-bold mb-4 text-primary"><i class="bi bi-clipboard2-pulse me-2"></i> Procedure Questions</h3>
          <div class="accordion" id="accordionProcedure">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#procedureOne">
                  What is MRI Fusion Prostate Biopsy?
                </button>
              </h2>
              <div id="procedureOne" class="accordion-collapse collapse" data-bs-parent="#accordionProcedure">
                <div class="accordion-body">
                  <p>MRI Fusion Biopsy is an advanced diagnostic technique that combines MRI (Magnetic Resonance Imaging) with real-time ultrasound to precisely target suspicious areas in the prostate. This method is significantly more accurate than traditional biopsy methods, with 3-4 times better cancer detection rates.</p>
                  <p>The procedure involves:</p>
                  <ul>
                    <li>Pre-biopsy MRI to identify suspicious areas</li>
                    <li>Software fusion of MRI images with live ultrasound</li>
                    <li>Precise targeting of lesions through the perineal skin</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#procedureTwo">
                  How is MRI Fusion different from traditional biopsy?
                </button>
              </h2>
              <div id="procedureTwo" class="accordion-collapse collapse" data-bs-parent="#accordionProcedure">
                <div class="accordion-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Feature</th>
                        <th>MRI Fusion Biopsy</th>
                        <th>Traditional TRUS Biopsy</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Accuracy</td>
                        <td>3-4x better cancer detection</td>
                        <td>Misses 20-30% of cancers</td>
                      </tr>
                      <tr>
                        <td>Approach</td>
                        <td>Through perineal skin (clean area)</td>
                        <td>Through rectum (higher infection risk)</td>
                      </tr>
                      <tr>
                        <td>Targeting</td>
                        <td>Precise lesion targeting</td>
                        <td>Random sampling</td>
                      </tr>
                      <tr>
                        <td>Pain Level</td>
                        <td>Minimal discomfort</td>
                        <td>Moderate discomfort</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#procedureThree">
                  How long does the procedure take?
                </button>
              </h2>
              <div id="procedureThree" class="accordion-collapse collapse" data-bs-parent="#accordionProcedure">
                <div class="accordion-body">
                  <p>The MRI Fusion Biopsy typically takes about <strong>30-45 minutes</strong> from start to finish. This includes:</p>
                  <ul>
                    <li>10-15 minutes for preparation and positioning</li>
                    <li>20-30 minutes for the actual biopsy procedure</li>
                    <li>5-10 minutes for post-procedure instructions</li>
                  </ul>
                  <p>Most patients can go home the same day and resume light activities within 24 hours.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Safety & Recovery Questions -->
        <div class="question-category js-fadein" id="safety">
          <h3 class="h4 fw-bold mb-4 text-primary"><i class="bi bi-shield-check me-2"></i> Safety & Recovery</h3>
          <div class="accordion" id="accordionSafety">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safetyOne">
                  What are the risks of MRI Fusion Biopsy?
                </button>
              </h2>
              <div id="safetyOne" class="accordion-collapse collapse" data-bs-parent="#accordionSafety">
                <div class="accordion-body">
                  <p>MRI Fusion Biopsy is significantly safer than traditional methods, with complication rates less than 1%. Potential risks include:</p>
                  <ul>
                    <li><strong>Infection:</strong> Less than 0.5% risk (vs 5-7% with TRUS biopsy)</li>
                    <li><strong>Bleeding:</strong> Minor spotting may occur for 1-2 days</li>
                    <li><strong>Discomfort:</strong> Mild soreness in the biopsy area</li>
                    <li><strong>Urinary symptoms:</strong> Temporary mild burning during urination</li>
                  </ul>
                  <div class="alert alert-info mt-3">
                    <i class="bi bi-info-circle-fill me-2"></i> Our center follows strict sterile protocols and uses antibiotics when needed to minimize any risks.
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safetyTwo">
                  What is the recovery time after biopsy?
                </button>
              </h2>
              <div id="safetyTwo" class="accordion-collapse collapse" data-bs-parent="#accordionSafety">
                <div class="accordion-body">
                  <p>Recovery after MRI Fusion Biopsy is typically quick:</p>
                  <ul>
                    <li><strong>Same day:</strong> Most patients go home within 1-2 hours after the procedure</li>
                    <li><strong>24 hours:</strong> Resume light activities and desk work</li>
                    <li><strong>48 hours:</strong> Resume normal activities including driving</li>
                    <li><strong>1 week:</strong> Resume exercise and strenuous activities</li>
                  </ul>
                  <p>We provide detailed post-procedure instructions tailored to your specific case.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safetyThree">
                  Are there any activity restrictions after biopsy?
                </button>
              </h2>
              <div id="safetyThree" class="accordion-collapse collapse" data-bs-parent="#accordionSafety">
                <div class="accordion-body">
                  <p>We recommend the following precautions for optimal recovery:</p>
                  <div class="row">
                    <div class="col-md-6">
                      <h6 class="fw-bold">For 24 hours:</h6>
                      <ul>
                        <li>Avoid heavy lifting (>5kg)</li>
                        <li>No vigorous exercise</li>
                        <li>No sexual activity</li>
                        <li>No long car/bus journeys</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <h6 class="fw-bold">For 1 week:</h6>
                      <ul>
                        <li>No swimming or baths (showers okay)</li>
                        <li>No cycling or horseback riding</li>
                        <li>Avoid constipation (take stool softeners if needed)</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Cost & Insurance Questions -->
        <div class="question-category js-fadein" id="cost">
          <h3 class="h4 fw-bold mb-4 text-primary"><i class="bi bi-currency-rupee me-2"></i> Cost & Insurance</h3>
          <div class="accordion" id="accordionCost">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#costOne">
                  What is the cost of MRI Fusion Biopsy?
                </button>
              </h2>
              <div id="costOne" class="accordion-collapse collapse" data-bs-parent="#accordionCost">
                <div class="accordion-body">
                  <p>The total cost for MRI Fusion Biopsy at our center typically ranges between <strong>₹35,000 to ₹50,000</strong>, depending on:</p>
                  <ul>
                    <li>Whether you already have a recent MRI</li>
                    <li>Number of targeted samples needed</li>
                    <li>Additional pathology tests required</li>
                  </ul>
                  <p>This comprehensive cost includes:</p>
                  <ul>
                    <li>Consultation with Dr. Khritij</li>
                    <li>Procedure fees</li>
                    <li>Anesthesia</li>
                    <li>Pathology analysis</li>
                    <li>Follow-up consultation</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#costTwo">
                  Do you accept insurance for this procedure?
                </button>
              </h2>
              <div id="costTwo" class="accordion-collapse collapse" data-bs-parent="#accordionCost">
                <div class="accordion-body">
                  <p>We work with most major health insurance providers in India. Coverage for MRI Fusion Biopsy varies by plan, but many insurers now recognize its medical necessity.</p>
                  <p><strong>Insurance tips:</strong></p>
                  <ul>
                    <li>Check if your plan requires pre-authorization</li>
                    <li>Ask about "day care procedure" coverage</li>
                    <li>Our team can provide necessary documentation for claims</li>
                  </ul>
                  <div class="alert alert-info mt-3">
                    <i class="bi bi-info-circle-fill me-2"></i> Contact our billing department at +91 1145678901 for specific insurance queries.
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#costThree">
                  Are there payment plans available?
                </button>
              </h2>
              <div id="costThree" class="accordion-collapse collapse" data-bs-parent="#accordionCost">
                <div class="accordion-body">
                  <p>We offer several payment options to make the procedure accessible:</p>
                  <ul>
                    <li><strong>EMI options</strong> through healthcare financing partners</li>
                    <li><strong>Partial payment plans</strong> (50% upfront, 50% within 30 days)</li>
                    <li><strong>Corporate tie-ups</strong> with major companies</li>
                  </ul>
                  <p>We also accept all major credit/debit cards, UPI, and bank transfers.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Still Have Questions -->
        <div class="text-center mt-5 js-fadein">
          <h4 class="mb-4">Still have questions?</h4>
          <p class="mb-4">Our team is happy to answer any additional questions you may have about MRI Fusion Biopsy.</p>
          <a href="contact.php" class="btn btn-primary px-4 me-2"><i class="bi bi-envelope me-2"></i> Contact Us</a>
          <a href="tel:+911145678900" class="btn btn-outline-primary px-4"><i class="bi bi-telephone me-2"></i> Call Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
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