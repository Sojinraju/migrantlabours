<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {

$id = $_COOKIE['id'];
if (isset($_POST['hide']) and ($_POST['hide'] == 'f')) {
    if (isset($_FILES['medicalReport'])) {
        $obj->updateWorkerMedicalReport($_FILES['medicalReport'], $id);
        echo "<script>window.location.href='workerEdit.php';</script>";
    } else {
        echo "<script>alert('Medical Report Not Uploaded');window.location.href='workerEdit.php';</script>";
    }
}
$smartyObj->display('workerHeader.tpl');
$smartyObj->display('workerReuploadMedicalReport.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>