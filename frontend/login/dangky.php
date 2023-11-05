<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="dangky.css">
</head>
<body>
    <form action="xulydangky.php" method="POST">
        <div class="container">
          <h1>Đăng Ký</h1>
          <p>Xin hãy nhập biểu mẫu bên dưới để đăng ký.</p>
          <hr>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Nhập Email" name="user_email" required>
          <label for="name"><b>Họ tên</b></label>
          <input type="text" placeholder="Nhập Họ tên" name="user_name" required>
          <label for="name"><b>Username</b></label>
          <input type="text" placeholder="Nhập Username" name="user_login_name" required>
          <label for="phonenumber"><b>Số điện thoại</b></label>
          <input type="text" placeholder="Nhập Số điện thoại" name="number_phone" required>
          <label for="address"><b>Địa chỉ</b></label>
          <input type="text" placeholder="Nhập Địa Chỉ" name="user_address " required="required">
         <label for="psw"><b>Mật Khẩu</b></label>
          <input type="password" placeholder="Nhập Mật Khẩu" name="pass" required>
         <!-- <label for="pswrepeat"><b>Nhập Lại Mật Khẩu</b></label>
          <input type="password" placeholder="Nhập Lại Mật Khẩu" name="pswrepeat" required> -->
          
         <div class="clearfix">
            <button type="submit" class="signupbtn" name="submit">Đăng ký</button>
          </div>
        </div>
      </form>
</body>
</html>