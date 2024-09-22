(function($) {
   "use strict";
   var HT = {}; // Khai báo là 1 đối tượng
   var timer = null
   var _token = $('meta[name="csrf-token"]').attr('content');

/* MAIN VARIABLE */

   var   $window = $(window),
         $document = $(document);


   // FUNCTION DECLARGE
   $.fn.elExists = function() {
     return this.length > 0;
   };

   HT.addWishlish = () => {
      $(document).on('click', '.addToWishlist', function(e){
         e.preventDefault()

         let _this = $(this)
        
         $.ajax({
            url: 'ajax/product/wishlist', 
            type: 'POST', 
            data: {
               id: _this.attr('data-id'),
               _token: _token
            }, 
            dataType: 'json', 
            beforeSend: function() {
               
            },
            success: function(res) {
               toastr.success(res.message, 'Thông báo từ hệ thống!')
               if(res.code == 1){
                  _this.removeClass('active')
               }else if(res.code == 2){
                  _this.addClass('active')
               }
            },
         });

      })
   }


   HT.addToCart = () => {
      $(document).on('click', '.addToCart', function(e){
         e.preventDefault()
         let _this = $(this)
         let id = _this.attr('data-id')
         let quantity = $('.quantity-text').val()
         if(typeof quantity === 'undefined'){
            quantity = 1
         }
         
         let attribute_id = []
         $('.attribute-value .choose-attribute').each(function(){
            let _this = $(this)
            if(_this.hasClass('active')){
               attribute_id.push(_this.attr('data-attributeid'))
            }
         })

         let option = {
            id : id,
            quantity: quantity,
            attribute_id: attribute_id,
            _token: _token
         }
         
         $.ajax({
				url: 'ajax/cart/create', 
				type: 'POST', 
				data: option, 
				dataType: 'json', 
				beforeSend: function() {
					
				},
				success: function(res) {
               toastr.clear()
					if(res.code === 10){
                  toastr.success(res.messages, 'Thông báo từ hệ thống!')
                  window.location.reload()
               }else{
                  toastr.error('Có vấn đề xảy ra! Hãy thử lại', 'Thông báo từ hệ thống!')
               }
				},
			});
      

      })
   }

   HT.addCart = () => {
      $(document).on('click', '.addCart', function(e){
         e.preventDefault()
         let _this = $(this)
         let id = _this.attr('data-id')
         let quantity = $('.quantity-text').val()
         if(typeof quantity === 'undefined'){
            quantity = 1
         }
         
         let attribute_id = []
         $('.attribute-value .choose-attribute').each(function(){
            let _this = $(this)
            if(_this.hasClass('active')){
               attribute_id.push(_this.attr('data-attributeid'))
            }
         })

         let option = {
            id : id,
            quantity: quantity,
            attribute_id: attribute_id,
            _token: _token
         }

         $.ajax({
				url: 'ajax/cart/create', 
				type: 'POST', 
				data: option, 
				dataType: 'json', 
				beforeSend: function() {
					
				},
				success: function(res) {
               toastr.clear()
					if(res.code === 10){
                  toastr.success(res.messages, 'Thông báo từ hệ thống!')
                  window.location.href = 'thanh-toan.html'
               }else{
                  toastr.error('Có vấn đề xảy ra! Hãy thử lại', 'Thông báo từ hệ thống!')
               }
				},
			});


      })
   }
   

   HT.changeQuantity = () => {
      $(document).on('click', '.btn-qty', function(){
         let _this = $(this)
         let qtyElement = _this.siblings('.input-qty')
         let qty = qtyElement.val()
         let newQty = (_this.hasClass('minus')) ? parseInt(qty) - 1 : parseInt(qty) + 1
         newQty = (newQty < 1) ? 1 : newQty
         qtyElement.val(newQty)

         let option = {
            qty: newQty,
            rowId: _this.siblings('.rowId').val(),
            _token: _token
         }

         HT.handleUpdateCart(_this, option)
      })
   }

   // HT.changeQuantityInput = () => {
   //    $(document).on('change', '.input-qty', function(){
   //       let _this = $(this)
   //       let option = {
   //          qty: (parseInt(_this.val()) == 0) ? 1 : parseInt(_this.val()),
   //          rowId: _this.siblings('.rowId').val(),
   //          _token: _token
   //       }

   //       if(isNaN(option.qty)){
   //          toastr.error('Số lượng nhập không chính xác', 'Thông báo từ hệ thống!')
   //          return false
   //       }

   //       HT.handleUpdateCart(_this, option)
   //    })
   // }

   HT.changeQuantityInput = () => {
      $(document).on('input', '.input-qty', function() {
        let _this = $(this);
        let value = _this.val().replace(/\D/g, '');
        _this.val(value || '1');
    
        let option = {
          qty: (value === '') ? 1 : parseInt(value),
          rowId: _this.siblings('.rowId').val(),
          _token: _token
        };
    
        HT.handleUpdateCart(_this, option);
      });
    };

   HT.handleUpdateCart = (_this, option) => {
      $.ajax({
         url: 'ajax/cart/update', 
         type: 'POST', 
         data: option, 
         dataType: 'json', 
         beforeSend: function() {
            
         },
         success: function(res) {
            toastr.clear()
            if(res.code === 10){
               HT.changeMinyCartQuantity(res)
               HT.changeMinyQuantityItem(_this, option)
               HT.changeCartItemSubTotal(_this, res)
               HT.changeCartTotal(res)
               toastr.success(res.messages, 'Thông báo từ hệ thống!')
            }else{
               toastr.error('Có vấn đề xảy ra! Hãy thử lại', 'Thông báo từ hệ thống!')
            }
         },
      });
   }

   HT.changeMinyQuantityItem = (item, option) => {
      item.parents('.cart-item').find('.cart-item-number').html(option.qty)
   }

   HT.changeCartItemSubTotal = (item, res) => {
      item.parents('.cart-item-info').find('.cart-price-sale').html(addCommas(res.response.cartItemSubTotal)+'đ')
   }

   HT.changeMinyCartQuantity = (res) => {
      $('#cartTotalItem').html(res.response.cartTotalItems)  
   }

   HT.changeCartTotal = (res) => {
      $('.cart-total').html(addCommas(res.response.cartTotal)+'đ')
      $('.discount-value').html('-' + addCommas(res.response.cartDiscount) + 'đ')
   }

   HT.removeCartItem = () => {
      $(document).on('click', '.cart-item-remove', function(){
         let _this = $(this)
         let option = {
            rowId: _this.attr('data-row-id'),
            _token: _token
         }
         $.ajax({
            url: 'ajax/cart/delete', 
            type: 'POST', 
            data: option, 
            dataType: 'json', 
            beforeSend: function() {
               
            },
            success: function(res) {
               toastr.clear()
               if(res.code === 10){
                  HT.changeMinyCartQuantity(res)
                  HT.changeCartTotal(res)
                  HT.removeCartItemRow(_this)
                  toastr.success(res.messages, 'Thông báo từ hệ thống!')
                  window.location.reload()
               }else{
                  toastr.error('Có vấn đề xảy ra! Hãy thử lại', 'Thông báo từ hệ thống!')
               }
            },
         });
      })
   }

   HT.removeCartItemRow = (_this) => {
      _this.parents('.cart-item').remove()
   }

   HT.setupSelect2 = () => {
      if($('.setupSelect2').length){
         $('.setupSelect2').select2();
     }
   }
   HT.numberInput =() => {
      document.querySelectorAll('.number-input').forEach(input => {
         input.addEventListener('input', function() {
           // Chỉ giữ lại các ký tự số
           this.value = this.value.replace(/\D/g, '');
         });
       });

      
      //    const phoneInput = document.querySelector('.phone-input');
      //    const errorMessage1 = document.querySelector('.error-message1');
     
      //    // Regular expression to validate phone number format starting with 0
      //    const phoneRegex = /^0\d{9,10}$/;
     
      //    phoneInput.addEventListener('input', function() {
      //      if (phoneRegex.test(this.value) && this.value.length <= 10) {
      //        this.classList.remove('invalid');
      //        errorMessage1.style.display = 'none';
      //      } else {
      //        this.classList.add('invalid');
      //        errorMessage1.style.display = 'block';
      //      }
      //    });
     
      //    phoneInput.addEventListener('blur', function() {
      //      if (this.value.trim() === '') {
      //        this.classList.remove('invalid');
      //        errorMessage1.style.display = 'none';
      //      }
      //    });
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
      HT.addCart()
      HT.addToCart()
      HT.setupSelect2()
      HT.changeQuantity()
      HT.changeQuantityInput()
      HT.removeCartItem()
      HT.addWishlish()
      HT.numberInput()
    
   });

})(jQuery);
