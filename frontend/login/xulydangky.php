<?php
 
    include 'ketnoi.php';
    if( isset($_POST['submit']) && $_POST['user_email'] != '' && $_POST['user_name'] != '' && $_POST['user_login_name'] != '' && $_POST['number_phone'] != '' && $_POST['user_address'] != ''  && $_POST['pass'] != '' ){
        $email = $_POST['user_email'];
        $fullname = $_POST['user_name'];
        $username = $_POST['user_login_name'];
        $number_phone = $_POST['number_phone'];
        $address = $_POST['user_address'];
        $password = $_POST['pass'];
        $lever = 0;
        if($password != $pswrepeat ){
            header("location: dangky.php");
        }
    $sql = "SELECT * FROM tc_user WHERE user_login_name = '$user_login_name'";
    $old = mysqli_query($connect,$sql);
    $pass = md5($pass);
    if(mysqli_num_rows($old) > 0){
        header("location: dangky.php");
    }
    $sql = " INSERT INTO tc_user (user_email,user_name,user_login_name,number_phone,user_address,pass) VALUES (' $user_email',' $user_name','$user_login_name','$number_phone','$user_address','$pass')";
    mysqli_query($connect,$sql);
    header("location: login.php");}
    else{
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
    }       
   
?>