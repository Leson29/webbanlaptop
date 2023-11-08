<?php
 
    include ("ketnoi.php");
    if( isset($_POST['submit'])){
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $password = md5($password);
        $query = mysqli_query("SELECT username, password FROM tbl_user WHERE username='$username'");
        if (mysqli_num_rows($query) == 0) {
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='login.php'>Trở lại</a>";
            exit;
        }
         
        //Lấy mật khẩu trong database ra
        $row = mysqli_fetch_array($query);
         
        //So sánh 2 mật khẩu có trùng khớp hay không
        if ($password != $row['password']) {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='login.php'>Trở lại</a>";
            exit;
        }
        $_SESSION['username'] = $username;
        echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công." <a href='home.html'>Về trang chủ</a>;
        die();
    }
?>
