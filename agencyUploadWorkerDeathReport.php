<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$worker_loginId=$_GET['worker_loginId'];
if (isset($_POST['hide']) and ($_POST['hide'] == 'h')) {
    if (isset($_FILES['deathReport'])) {
        $obj->agencyUploadDeathReport($_FILES['deathReport'], $worker_loginId);
        echo "<script>window.location.href='agencyPassWorkerDeath.php';</script>";
    } else {
        echo "<script>alert('Death Report not Uploaded');window.location.href='agencyPassWorkerDeath.php';</script>";
    }
}
$smartyObj->display('agencyHeader.tpl');
$smartyObj->display('agencyUploadWorkerDeathReport.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>