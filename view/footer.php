<!-- Footer -->
<footer>
    <div>
        <span>Sản phẩm</span>
        <span>Thương hiệu</span>
        <span>Cửa hàng</span>
        <span>Tin tức</span>
    </div>
    <div>
        <div class="footer-products">
            <ul>
                <?php
                include_once("../model/db.php");
                $sql = 'select * from category';
                $result = readDatabase($sql);
                foreach ($result as $category) {
                    echo '<li><a href="product.php?product_id=' . $category[0] . '">' . $category[1] . '</a></li>';
                }
                ?>
            </ul>
        </div>
        <div class="footer-brands">
            <ul>
                <li><a href="#">AKKO</a></li>
                <li><a href="#">AKRacing</a></li>
                <li><a href="#">Anda</a></li>
                <li><a href="#">Asus</a></li>
                <li><a href="#">Corsair</a></li>
                <li><a href="#">Cougar</a></li>
                <li><a href="#">DareU</a></li>
                <li><a href="#">DXRACER</a></li>
                <li><a href="#">HyperX</a></li>
                <li><a href="#">Leopold</a></li>
                <li><a href="#">Logitech</a></li>
                <li><a href="#">Rapoo</a></li>
                <li><a href="#">Razer</a></li>
                <li><a href="#">SteelSeries</a></li>
            </ul>
        </div>
        <div class="footer-store">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="product.php">Sản phẩm</a></li>
                <li><a href="#">Chính sách bảo hành</a></li>
                <li><a href="#">Thông tin liên lạc</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-news">
            <div>Đăng ký để nhận thông báo qua email</div>
            <div>
                <form method="post" action="subscribe.php">
                    <input type="text" name="" id="" size="20" />
                    <button type="submit">Đăng ký</button>
                </form>
            </div>
            <div>Liên lạc với chúng tôi</div>
            <div>
                <img src="../images/icon-phone.png" class="phone-icon" />+84 703 802
                199
            </div>
            <div>
                <img src="../images/icon-email.png" class="email-icon" />hoangduy791999@gmail.com
            </div>
            <div>© 2021. All rights reserved.</div>
        </div>
    </div>
</footer>
<div id="scroll-button" class="to-top-button">
    <a href="#top"><img src="../images/up-arrow.png" class="up-icon" /></a>
</div>
<script src="../js/scroll-button.js"></script>