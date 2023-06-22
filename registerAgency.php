<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();

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
                                        if (isset($_POST['password']) and ($_POST['password']) != null) {
                                            $agencyId = trim($_POST['agencyId']);
                                            $agencyName = trim($_POST['agencyName']);
                                            $address = trim($_POST['address']);
                                            $pincode = trim($_POST['pincode']);
                                            $district = trim($_POST['district']);
                                            $city = trim($_POST['city']);
                                            $propName = trim($_POST['propName']);
                                            $contactNo = trim($_POST['contactNo']);
                                            $email = trim($_POST['email']);
                                            $password = trim($_POST['password']);
                                            $obj->registerAgency($agencyId, $agencyName, $address, $pincode, $district, $city, $propName, $contactNo, $email, $password);

                                        } else
                                            echo "<script>alert('Password is Empty')</script>";
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
$smartyObj->display('indexHeader.tpl');
$smartyObj->display('registerAgency.tpl');
$smartyObj->display('footer.tpl');
    
?>