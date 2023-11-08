<?php
require_once "Controllers/ControllersComputer.php";

session_start();

// controller
$ControllersComputer = new ControllersComputer();
$task =isset($_GET['task'])? $_GET['task']:null;

//login

$user_login_name = isset($_POST['user_login_name'])? $_POST['user_login_name']:null;
$password = isset($_POST['password'])? $_POST['password']:null;
$created = date("Y.m.d");


// product
$product_name = isset($_POST['product_name'])? $_POST['product_name']:null;
$trandmark = isset($_POST['trandmark'])? $_POST['trandmark']:null;
$product_price = isset($_POST['product_price'])? $_POST['product_price']:null;
$information = isset($_POST['information'])? $_POST['information']:null;
$promotion = isset($_POST['promotion'])? $_POST['promotion']:null;


// thuong hieu
$Dell = isset($_POST['Dell'])? $_POST['Dell']:null;
$Asus = isset($_POST['Asus'])? $_POST['Asus']:null;
$Acer = isset($_POST['Acer'])? $_POST['Acer']:null;
$HP = isset($_POST['HP'])? $_POST['HP']:null;
$Lenovo = isset($_POST['Lenovo'])? $_POST['Lenovo']:null;
$Macbook = isset($_POST['Macbook'])? $_POST['Macbook']:null;


// tìm kiếm
$key = isset($_POST['text_search'])? $_POST['text_search']:null;
// gio hang
if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

// dang nhap
if (isset($_POST['login'])){
    $ControllComputer->doLogin();
}
// dang ky
if (isset($_POST['register'])){
    if (empty($user_login_name) || empty($user_email) || empty($phone || empty($address)  || empty($password) || empty($repassword))){
        $message = "Không được để trống !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }elseif ($password != $repassword){
        $message = "Mật khẩu không trùng nhau !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }elseif (isset($user_login_name) && isset($user_user_email) && isset($phone) && isset($address)  && isset($password) && isset($repassword) && $repassword = $password){
        $ControllComputer->doRegister($user_login_name, $user_email, $phone, $address, $password, $created);
    }
}
// tim kiem san pham
if (isset($_POST['search'])){
    $ControllComputer->doSearch($key);
}
// them san pham
if (isset($_POST['add_product'])){
    $ControllComputer->addProduct($product_name, $trandmark, $product_price, $information, $promotion);
}
// sủa sản phẩm
if (isset($_POST['update_product'])){
    $ControllComputer->doUpdateProduct();
}
// them vao gio hang
if (isset($_POST['btn-cart'])){
    $arr = [];
    $arr['product_id'] = $_POST['product_id'];
    $arr['quantity'] = $_POST['quantity'];
    $ControllComputer->add_to_cart($arr);
}
// thanh toan
if (isset($_POST['payment'])){
    if (isset($_SESSION['username'])){
        header("location:index.php?task=payment");
    }else{
        header("location:index.php?task=pagelogin");
    }
}
// giao hàng
if (isset($_POST['ship'])){
    $ControllComputer->payment();
}
switch ($task){

    // maytinh
    case 'pagehome':
        $ControllComputer->getPageHome();
        break;
    case 'pagecontact':
        $ControllComputer->getPageContact();
        break;
    case 'pagenews':
        $ControllComputer->getPageNews();
        break;
    case 'pagedell':
        $ControllComputer->getPageDell();
        break;
    case 'pageasus':
        $ControllComputer->getPageAsus();
        break;
    case 'pageacer':
        $ControllComputer->getPageAcer();
        break;
    case 'pagehp':
        $ControllComputer->getPageHp();
        break;
    case 'pagelenovo':
        $ControllComputer->getPageLenovo();
        break;
    case 'pagemacbook':
        $ControllComputer->getPageMacbook();
        break;
    case 'pagelogin':
        $ControllComputer->getPageLogin();
        break;
    case 'pageregister':
        $ControllComputer->getPageRegister();
        break;
    case 'pageuser':
        $ControllComputer->getPageUser();
        break;
    case 'pageproduct':
        $ControllComputer->getPageProduct();
        break;
    case 'pagebill':
        $ControllComputer->getPageBill();
        break;
    case 'deleteuser':
        $ControllComputer->deleteUser();
        break;
    case 'editproduct':
        $ControllComputer->getPageEditProduct();
        break;
    case 'deleteproduct':
        $ControllComputer->delProduct();
        break;
    case 'detail':
        $ControllComputer->getDetailPage($_GET['id']);
        break;
    case 'cart':
        $ControllComputer->getPageCart();
        break;
    case 'del_cart':
        $ControllComputer->remove_from_cart($_GET['id']);
        break;
    case 'payment':
        $ControllComputer->getPagePayment();
        break;
    case 'logout':
        session_destroy();
        header("location:index.php?task=pagehome");
        break;

    // tìm kiếm
    default:
        $ControllComputer->getPageHome();
        break;
}
