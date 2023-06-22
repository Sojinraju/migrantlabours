<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 1) {

    $id = $_COOKIE['id'];
    $p = $obj->policeEdit($id);
    $smartyObj->assign('view1', $p);
    if (isset($_POST['hide']) and ($_POST['hide'] == 'a')) {
        if (isset($_POST['stationId']) and ($_POST['stationId'] != null)) {
            if (isset($_POST['addLine1']) and ($_POST['addLine1']) != null) {
                if (isset($_POST['addLine2']) and ($_POST['addLine2']) != null) {
                    if (isset($_POST['pincode']) and ($_POST['pincode']) != null) {
                        if (isset($_POST['district']) and ($_POST['district']) != null) {
                            if (isset($_POST['city']) and ($_POST['city']) != null) {
                                if (isset($_POST['contactNo']) and ($_POST['contactNo']) != null) {
                                    if (isset($_POST['email']) and ($_POST['email']) != null) {
                                        $stationId = trim($_POST['stationId']);
                                        $addLine1 = trim($_POST['addLine1']);
                                        $addLine2 = trim($_POST['addLine2']);
                                        $pincode = trim($_POST['pincode']);
                                        $district = trim($_POST['district']);
                                        $city = trim($_POST['city']);
                                        $contactNo = trim($_POST['contactNo']);
                                        $email = trim($_POST['email']);
                                        $obj->updatePoliceStation($stationId, $addLine1, $addLine2, $pincode, $district, $city, $contactNo, $email, $id);
                                    } else
                                        echo "<script>alert('Email is Empty')</script>";
                                } else
                                    echo "<script>alert('Contact No. is Empty')</script>";
                            } else
                                echo "<script>alert('City is Empty')</script>";
                        } else
                            echo "<script>alert('District is Empty')</script>";
                    } else
                        echo "<script>alert('Pincode is Empty')</script>";
                } else
                    echo "<script>alert('Address Line 2 is Empty')</script>";
            } else
                echo "<script>alert('Address Line 1 is Empty')</script>";
        } else
            echo "<script>alert('Station ID is Empty')</script>";
    }

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

    $smartyObj->display('policeHeader.tpl');
    $smartyObj->display('policeEdit.tpl');
    $smartyObj->display('footer.tpl');

} else
    header("location:login.php");
?>