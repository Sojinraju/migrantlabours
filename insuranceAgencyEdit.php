<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 4) {

    $id = $_COOKIE['id'];
    $p = $obj->insuranceAgencyEdit($id);
    $smartyObj->assign('view4', $p);
    if (isset($_POST['hide']) and ($_POST['hide'] == 'd')) {
        if (isset($_POST['insAgId']) and ($_POST['insAgId'] != null)) {
            if (isset($_POST['insAgName']) and ($_POST['insAgName']) != null) {
                if (isset($_POST['address']) and ($_POST['address']) != null) {
                    if (isset($_POST['district']) and ($_POST['district']) != null) {
                        if (isset($_POST['contactNo']) and ($_POST['contactNo']) != null) {
                            if (isset($_POST['email']) and ($_POST['email']) != null) {
                                $insAgId = trim($_POST['insAgId']);
                                $insAgName = trim($_POST['insAgName']);
                                $address = trim($_POST['address']);
                                $district = trim($_POST['district']);
                                $contactNo = trim($_POST['contactNo']);
                                $email = trim($_POST['email']);
                                $obj->updateInsuranceAgency($insAgId, $insAgName, $address, $district, $contactNo, $email, $id);
                            } else
                                echo "<script>alert('Email is Empty')</script>";
                        } else
                            echo "<script>alert('Contact No. is Empty')</script>";

                    } else
                        echo "<script>alert('District is Empty')</script>";
                } else
                    echo "<script>alert('Address is Empty')</script>";
            } else
                echo "<script>alert('Insurance Agency Name is Empty')</script>";
        } else
            echo "<script>alert('Insurance Agency Id is Empty')</script>";
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

    $smartyObj->display('insuranceAgencyHeader.tpl');
    $smartyObj->display('insuranceAgencyEdit.tpl');
    $smartyObj->display('footer.tpl');

} else
    header("location:login.php");
?>