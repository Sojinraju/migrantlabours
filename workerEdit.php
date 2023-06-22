<?php
include_once('settings/settings.php');
include_once('classes/userclass.php');
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {

    $id = $_COOKIE['id'];
    $p = $obj->workerEdit($id);
    $smartyObj->assign('view3', $p);
    $data = $obj->getAllAgency();
    $smartyObj->assign('data', $data);
    if (isset($_POST['hide']) and ($_POST['hide'] == 'c')) {
        if (isset($_POST['workerName']) and ($_POST['workerName'] != null)) {
            // if (isset($_POST['photo']) and ($_POST['photo']) != null) {
            if (isset($_POST['address']) and ($_POST['address']) != null) {
                if (isset($_POST['dob']) and ($_POST['dob']) != null) {
                    if (isset($_POST['gender']) and ($_POST['gender']) != null) {
                        if (isset($_POST['street']) and ($_POST['street']) != null) {
                            if (isset($_POST['district']) and ($_POST['district']) != null) {
                                if (isset($_POST['city']) and ($_POST['city']) != null) {
                                    if (isset($_POST['pincode']) and ($_POST['pincode']) != null) {
                                        if (isset($_POST['contactNo']) and ($_POST['contactNo']) != null) {
                                            if (isset($_POST['aadhaar']) and ($_POST['aadhaar']) != null) {
                                                if (isset($_POST['agency_loginId']) and ($_POST['agency_loginId']) != '--select--') {
                                                    if (isset($_POST['email']) and ($_POST['email']) != null) {
                                                        $workerName = trim($_POST['workerName']);
                                                        // $photo = trim($_POST['photo']);
                                                        $address = trim($_POST['address']);
                                                        $dob = trim($_POST['dob']);
                                                        $gender = trim($_POST['gender']);
                                                        $street = trim($_POST['street']);
                                                        $district = trim($_POST['district']);
                                                        $city = trim($_POST['city']);
                                                        $pincode = trim($_POST['pincode']);
                                                        $contactNo = trim($_POST['contactNo']);
                                                        $aadhaar = trim($_POST['aadhaar']);
                                                        $agency_loginId = trim($_POST['agency_loginId']);
                                                        $email = trim($_POST['email']);
                                                        $obj->updateWorker($workerName, /* $_FILES['photo'],*/$address, $dob, $gender, $street, $district, $city, $pincode, $contactNo, $aadhaar, $agency_loginId, $email, $id);
                                                        echo "<script>window.location.href='workerEdit.php';</script>";
                                                    } else
                                                        echo "<script>alert('Email is Empty')</script>";
                                                } else
                                                    echo "<script>alert('Agency Name is Empty')</script>";
                                            } else
                                                echo "<script>alert('Aadhaar is Empty')</script>";
                                        } else
                                            echo "<script>alert('Contact No. is Empty')</script>";
                                    } else
                                        echo "<script>alert('Pincode is Empty')</script>";
                                } else
                                    echo "<script>alert('City is Empty')</script>";
                            } else
                                echo "<script>alert('District is Empty')</script>";
                        } else
                            echo "<script>alert('Street is Empty')</script>";
                    } else
                        echo "<script>alert('Gender is Empty')</script>";
                } else
                    echo "<script>alert('DOB is Empty')</script>";
            } else
                echo "<script>alert('Address is Empty')</script>";
            // } else
            //     echo "<script>alert('Photo is Empty')</script>";
        } else
            echo "<script>alert('Worker Name is Empty')</script>";
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

    $smartyObj->display('workerHeader.tpl');
    $smartyObj->display('workerEdit.tpl');
    $smartyObj->display('footer.tpl');

} else
    header("location:login.php");
?>