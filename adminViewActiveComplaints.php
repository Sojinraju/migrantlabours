<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 0) {

    $data = $obj->getActiveComplaints();
    $smartyObj->assign('data', $data);
    if (isset($_POST['hide']) and ($_POST['hide'] == 'h')) {
        if (isset($_POST['adminReply']) and ($_POST['adminReply'] != null)) {
            $complaintId = trim($_POST['complaintId']);
            $adminReply = trim($_POST['adminReply']);
            $obj->giveReplyToComplaint($adminReply, $complaintId);
            echo "<script>window.location.href='adminViewActiveComplaints.php'</script>";
        } else
            echo "<script>alert('Admin Reply is Empty')</script>";
    }
    $smartyObj->display('adminViewActiveComplaints.tpl');

} else
    header("location:login.php");
?>