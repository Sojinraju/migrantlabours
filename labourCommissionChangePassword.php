<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 5) {
    $id = $_COOKIE['id'];
    if (isset($_POST['hide']) and ($_POST['hide']) == 'p') {
        if (isset($_POST['password']) and ($_POST['password'] != null)) {
            if (isset($_POST['npassword']) and ($_POST['npassword'] != null)) {
                if (isset($_POST['cpassword']) and ($_POST['cpassword'] != null)) {
                    $password = trim($_POST['password']);
                    $npassword = trim($_POST['npassword']);
                    $cpassword = trim($_POST['cpassword']);
                    $obj->updatePassword($id, $password, $npassword, $cpassword);
                } else
                    echo "<script>alert('Confirm Password is Empty')</script>";
            } else
                echo "<script>alert('New Password is Empty')</script>";
        } else
            echo "<script>alert('Password is Empty')</script>";
    }

    $smartyObj->display('labourCommissionHeader.tpl');
    $smartyObj->display('labourCommissionChangePassword.tpl');
    $smartyObj->display('footer.tpl');

} else
    header("location:login.php");
?>