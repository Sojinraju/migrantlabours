<?php
include_once('settings/settings.php');
include_once('classes/userclass.php');
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

    $id = $_COOKIE['id'];
    $p = $obj->agencyEdit($id);
    $smartyObj->assign('view2', $p);
    if (isset($_POST['hide']) and ($_POST['hide'] == 'b')) {
        if (isset($_POST['agencyId']) and ($_POST['agencyId'] != null)) {
            if (isset($_POST['agencyName']) and ($_POST['agencyName']) != null) {
                if (isset($_POST['address']) and ($_POST['address']) != null) {
                    if (isset($_POST['pincode']) and ($_POST['pincode']) != null) {
                        if (isset($_POST['district']) and ($_POST['district']) != null) {
                            if (isset($_POST['city']) and ($_POST['city']) != null) {
                                if (isset($_POST['propName']) and ($_POST['propName']) != null) {
                                    if (isset($_POST['contactNo']) and ($_POST['contactNo']) != null) {
                                        if (isset($_POST['email']) and ($_POST['email']) != null) {
                                            $agencyId = trim($_POST['agencyId']);
                                            $agencyName = trim($_POST['agencyName']);
                                            $address = trim($_POST['address']);
                                            $pincode = trim($_POST['pincode']);
                                            $district = trim($_POST['district']);
                                            $city = trim($_POST['city']);
                                            $propName = trim($_POST['propName']);
                                            $contactNo = trim($_POST['contactNo']);
                                            $email = trim($_POST['email']);
                                            $obj->updateAgency($agencyId, $agencyName, $address, $pincode, $district, $city, $propName, $contactNo, $email, $id);
                                        } else
                                            echo "<script>alert('Email is Empty')</script>";
                                    } else
                                        echo "<script>alert('Contact No. is Empty')</script>";
                                } else
                                    echo "<script>alert('Proprietor Name is Empty')</script>";
                            } else
                                echo "<script>alert('City is Empty')</script>";
                        } else
                            echo "<script>alert('District is Empty')</script>";
                    } else
                        echo "<script>alert('Pincode is Empty')</script>";
                } else
                    echo "<script>alert('Address is Empty')</script>";
            } else
                echo "<script>alert('Agency Name is Empty')</script>";
        } else
            echo "<script>alert('Agency ID is Empty')</script>";
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

    $smartyObj->display("agencyHeader.tpl");
    $smartyObj->display('agencyEdit.tpl');
    $smartyObj->display("footer.tpl");

} else
    header("location:login.php");
?>