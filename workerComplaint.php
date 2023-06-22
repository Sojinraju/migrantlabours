<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {

$worker_loginId = $_COOKIE['id'];
if (isset($_POST['hide']) and ($_POST['hide'] == 'h')) {
    if (isset($_POST['subject']) and ($_POST['subject'] != null)) {
        if (isset($_POST['content']) and ($_POST['content']) != null) {
            $subject = trim($_POST['subject']);
            $content = trim($_POST['content']);
            $obj->registerComplaint($subject, $content, $worker_loginId);
        } else
            echo "<script>alert('Content is Empty')</script>";
    } else
        echo "<script>alert('Subject is Empty')</script>";
}
$smartyObj->display('workerHeader.tpl');
$smartyObj->display('workerComplaint.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>