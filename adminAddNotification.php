<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 0) {

    if (isset($_POST['hide']) and ($_POST['hide'] == 'a')) {
        if (isset($_POST['notification']) and ($_POST['notification'] != null)) {
            $notification = trim($_POST['notification']);
            $obj->registerNotification($notification);
            
        } else
            echo "<script>alert('Notification is Empty')</script>";
    }
    $smartyObj->display("adminAddNotification.tpl");
} else
    header("location:login.php");
?>