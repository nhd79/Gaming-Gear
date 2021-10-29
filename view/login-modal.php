<!-- Login Modal -->
<div id="login-modal" class="login-modal">
  <div class="text">Đăng nhập</div>
  <form name="login-form" id="login-form" method="post" action="../controller/login.php" class="">
    <div>
      <input type="text" name="username" id="username" placeholder="Tên đăng nhập..." />
    </div>
    <div>
      <input type="password" name="password" id="password" placeholder="Mật khẩu..." />
    </div>
    <div>
      <button type="submit" name="login-button">Đăng nhập</button>
    </div>
  </form>
  <div>
    Chưa có tài khoản?&nbsp;
    <a href="signup-modal.html" rel="modal:open">Đăng ký tại đây</a>
  </div>
  <!-- <a href="#" rel="modal:close">Close</a> -->
</div>