<!-- Signup Modal -->
<div id="signup-modal" class="signup-modal">
  <div class="text">Đăng ký</div>
  <form name="signup-form" id="signup-form" method="post" action="<?php echo htmlspecialchars('index.php'); ?>" class="">
    <div>
      <input type="text" name="signup-username" id="signup-username" placeholder="Tên đăng nhập..." required />
    </div>
    <div>
      <input type="password" name="signup-password" id="signup-password" placeholder="Mật khẩu..." required />
    </div>
    <div>
      <input type="password" name="password-repeat" id="password-repeat" placeholder="Xác nhận mật khẩu..." required />
    </div>
    <div>
      <input type="text" name="fullname" id="fullname" placeholder="Họ tên..." />
    </div>
    <div>
      <input type="text" name="email" id="email" placeholder="Email..." />
    </div>
    <div>
      <input type="text" name="address" id="address" placeholder="Địa chỉ..." />
    </div>
    <div>
      <input type="text" name="phone-number" id="phone-number" placeholder="Số điện thoại..." />
    </div>
    <div>
      <button type="submit" name="signup-button">Đăng ký</button>
    </div>
  </form>
</div>