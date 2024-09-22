(function($) {
    "use strict";
    var HT = {}; // Khai báo là 1 đối tượng
    var timer = null
    var _token = $('meta[name="csrf-token"]').attr('content');
 
 /* MAIN VARIABLE */
 
    var   $window = $(window),
          $document = $(document);
 
 
    // FUNCTION DECLARGE

    HT.phoneInput =() => {
          const phoneInput = document.querySelector('.phone-input');
          const errorMessage1 = document.querySelector('.error-message1');
      
          // Regular expression to validate phone number format starting with 0
          const phoneRegex = /^0\d{9,10}$/;
      
          phoneInput.addEventListener('input', function() {
            if (phoneRegex.test(this.value) && this.value.length <= 10) {
              this.classList.remove('invalid');
              errorMessage1.style.display = 'none';
            } else {
              this.classList.add('invalid');
              errorMessage1.style.display = 'block';
            }
          });
      
          phoneInput.addEventListener('blur', function() {
            if (this.value.trim() === '') {
              this.classList.remove('invalid');
              errorMessage1.style.display = 'none';
            }
          });
    }
    HT.Email =()=>{
       const emailInput = document.querySelector('.email-input');
       const errorMessage = document.querySelector('.error-message');
 
          // Regular expression to validate email format
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
 
          emailInput.addEventListener('input', function() {
             if (emailRegex.test(this.value)) {
             this.classList.remove('invalid');
             errorMessage.style.display = 'none';
             } else {
             this.classList.add('invalid');
             errorMessage.style.display = 'block';
             }
          });
 
          emailInput.addEventListener('blur', function() {
             if (this.value.trim() === '') {
             this.classList.remove('invalid');
             errorMessage.style.display = 'none';
             }
          });
 
    }
 
    // Document ready functions
    $document.ready(function() {
       
     
    });
 
 })(jQuery);
 