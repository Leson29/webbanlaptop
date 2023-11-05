<?php
 
    include ("ketnoi.php");
    if( isset($_POST['submit'])){
        $user_login_name = addslashes($_POST['user_login_name']);
        $pass = addslashes($_POST['pass']);
        $pass = md5($pass);
        $query = mysqli_query("SELECT user_login_name, password FROM tc_user WHERE user_login_name='$user_login_name'");
        if (mysqli_num_rows($query) == 0) {
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='login.php'>Trở lại</a>";
            exit;
        }
         
        //Lấy mật khẩu trong database ra
        $row = mysqli_fetch_array($query);
         
        //So sánh 2 mật khẩu có trùng khớp hay không
        if ($pass != $row['pass']) {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='login.php'>Trở lại</a>";
            exit;
        }
        $_SESSION['user_login_name'] = $user_login_name;
        echo "Xin chào " . $user_login_name . ". Bạn đã đăng nhập thành công. <a href='home.html'>Về trang chủ</a>";
        die();
    }
?>
