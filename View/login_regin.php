<?php include './header.php'; ?>
<link rel="stylesheet" href="css/log.css" />

<main>
    <div class="title">
        <span class="home">Trang chủ</span> &ensp;
        <i class="fa-solid fa-forward"></i> &ensp;
        <span>Đăng nhập/Đăng ký</span>
    </div>
    <div class="login_regin">
        <div class="login">
            <h2>ĐĂNG NHẬP</h2>
            <form action="../Controller/UserController.php" method="post">
                <label for="">User name:</label><br />
                <input type="text" name="email" id="" /><br />
                <label for="">Password:</label><br />
                <input type="password" name="password" />
                <div class="btn_login">
                    <input type="submit" name="login" value="Đăng nhập" />
                    <a href="">Quên mật khẩu?</a>
                </div>
            </form>
            <p>
                Nếu Quý khách có vấn đề gì thắc mắc hoặc cần hỗ trợ gì thêm có thể
                liên hệ:
            </p>
            <b>Hotline: 0961.022.334</b>
            <p>để được support nhanh nhất nhé.</p>
        </div>
        <div class="regin">
            <h2>ĐĂNG KÝ</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="">Họ và tên:</label><br />
                <input type="text" name="name" /><br />
                <label for="">Email:</label><br />
                <input type="email" name="email" /><br />
                <label for="">Mật Khẩu:</label><br />
                <input type="password" name="password" /><br />
                <label for="">Nhập lại password:</label><br />
                <input type="password" name="repassword" /><br />
                <input type="file" name="avata" /><br />
                <div class="btn_regin">
                    <input type="submit" value="Đăng ký" name="dangky" />
                    <input type="reset" value="Làm mới" />
                </div>
            </form>
        </div>
    </div>
</main>
<script src="js/login.js"></script>
<?php include './footer.php' ?>