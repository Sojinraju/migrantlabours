<?php
include_once('settings/settings.php');
include_once('classes/userclass.php');
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$id = $_GET['id'];
$data = $obj->agencyEditSalary($id);
$smartyObj->assign('data', $data);
if (isset($_POST['hide']) and ($_POST['hide'] == 'd')) {
        if (isset($_POST['salary']) and ($_POST['salary']) != null) {
            $salary = trim($_POST['salary']);
            $obj->updateSalaryByAgency($salary, $id);
            echo "<script>window.location.href='agencyAddSalary.php';</script>";
        } else
            echo "<script>alert('Salary is Empty')</script>";
}
$smartyObj->display('agencyHeader.tpl');
$smartyObj->display('agencyEditSalary.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>