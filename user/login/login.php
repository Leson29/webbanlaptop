
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link rel="stylesheet" href="login.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section>
        <!--Bắt Đầu Phần Hình Ảnh-->
        <div class="img-bg">
            <img src="img/tc.jpg" alt="Hình Ảnh Minh Họa">
        </div>
        <!--Kết Thúc Phần Hình Ảnh-->
        <!--Bắt Đầu Phần Nội Dung-->
        <div class="noi-dung">
            <div class="form">
                <h2>Trang Đăng Nhập</h2>
                <form action="xulydangnhap.php" method="POST">
            
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="">
                    </div>
                    
                    <div class="nho-dang-nhap">
                        <label><input type="checkbox" name=""> Nhớ Mật Khẩu</label>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Nhập">
                    </div>
                    <div class="input-form">
                        <p>Bạn Chưa Có Tài Khoản? <a href="dangky.php">Đăng Ký</a></p>
                    </div>
                </form>
                <h3>Đăng Nhập Bằng Mạng Xã Hội</h3>
                <ul class="icon-dang-nhap">
                    <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                    <li><i class="fa fa-google" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                </ul>
            </div>
        </div>
        <!--Kết Thúc Phần Nội Dung-->
    </section>
    
</body>
</html>