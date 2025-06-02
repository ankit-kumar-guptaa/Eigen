// js/script.js

// Appointment form validation
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Toggle
    document.querySelectorAll('.faq-item').forEach(function(item){
      item.querySelector('.faq-question').onclick = function() {
        item.classList.toggle('faq-open');
      };
    });
  
    // Simple scroll-in animation for sections
    window.addEventListener('scroll', function() {
      document.querySelectorAll('.js-fadein').forEach(function(el){
        let rect = el.getBoundingClientRect();
        if(rect.top < window.innerHeight - 60) {
          el.classList.add('fadein');
        }
      });
    });
  });
  
  // Add .fadein in CSS for animation