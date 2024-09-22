<div class="panel-head">
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <h2 class="cart-heading">
            <span>Thông tin giao hàng</span>
        </h2>
        {{-- <span class="has-account">Bạn đã có tài khoản? <a href="" title="Đăng nhập ngay">Đăng nhập ngay</a></span> --}}
    </div>
    
</div>
<div class="panel-body mb30">
    <div class="cart-information">
        <div class="uk-grid uk-grid-medium mb20">
            <div class="uk-width-large-1-2">
                <div class="form-row">
                    <input 
                        type="text"
                        name="fullname"
                        value="{{ old('fullname') }}"
                        placeholder="Nhập vào Họ Tên"
                        class="input-text"
                    >
                </div>
            </div>
            <div class="uk-width-large-1-2">
                <div class="form-row">
                    <input 
                        type="text"
                        name="phone"
                        maxlength="10"
                        value="{{ old('phone') }}"
                        placeholder="Nhập vào Số điện thoại"
                        class="input-text number-input phone-input"
                    >
                    <p class="error-message1" style="color: red; font-size: 14px; margin-top: 5px; display: none;">Số điện thoại không hợp lệ</p>
                </div>
            </div>
        </div>
        <div class="form-row mb20">
            <input 
                type="text"
                name="email"
                value="{{ old('email') }}"
                placeholder="Nhập vào Email"
                class="input-text email-input"
            >
            <p class="error-message2" style="color: red; font-size: 14px; margin-top: 5px; display: none;">Email không hợp lệ</p>
        </div>
        <script>
            const emailInput = document.querySelector('.email-input');
            const errorMessage = document.querySelector('.error-message2');
        
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
        </script>
        <div class="form-row mb20">
            <input 
                type="text"
                name="address"
                value="{{ old('address') }}"
                placeholder="Nhập vào địa chỉ: ví dụ đường Lạc Long Quân..."
                class="input-text"
            >
        </div>
        <div class="uk-grid uk-grid-medium mb20">
            <div class="uk-width-large-1-3">
                <select name="province_id" id="" class="province location setupSelect2" data-target="districts">
                    <option value="0">[Chọn Thành Phố]</option>
                    @foreach($provinces as $key => $val)
                        <option value="{{ $val->code }}">{{ $val->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="uk-width-large-1-3">
                <select name="district_id" id="" class="setupSelect2 districts location" data-target="wards">
                    <option value="0">Chọn Quận Huyện</option>
                </select>
            </div>
            <div class="uk-width-large-1-3">
                <select name="ward_id" id="" class="setupSelect2 wards">
                    <option value="0">Chọn Phường Xã</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <input 
                type="text"
                name="description"
                value="{{ old('description') }}"
                placeholder="Ghi chú thêm (Ví dụ: Giao hàng vào lúc 3 giờ chiều)"
                class="input-text"
            >
        </div>
    </div>
</div>
<script>
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
</script>