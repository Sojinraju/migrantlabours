<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
//QR code generation library
include_once("phpqrcode\qrlib.php");

$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 5) {

$worker_loginId = $_GET['worker_loginId'];
$data = $obj->workerEdit($worker_loginId);
$smartyObj->assign('view3', $data);
$title = isset($_POST['title']) ? htmlentities($_POST['title']) : "INTERNET ID CARD";
if (isset($_POST['generate'])) {
    $id = rand('1000000', '9999999');
    $workerName = $_POST['workerName'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $photo = $_POST['photo'];
    $gender = $_POST['gender'];
    $street = $_POST['street'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $contactNo = $_POST['contactNo'];
    $aadhaar = $_POST['aadhaar'];
    $agencyName = $_POST['agencyName'];
    $email = $_POST['email'];

    //QR code content $text
    $text = "ID: $id\nName: $workerName\nAddress: $address\nDOB: $dob\nGender: $gender\nStreet: $street\nDistrict: $district\nCity: $city\nPincode: $pincode\nContact No.: $contactNo\nAadhaar: $aadhaar\nAgency Name: $agencyName\nEmail: $email";
   
    $d = "Worker Cards/images/" . $worker_loginId;
    if (!is_dir($d)) {
        mkdir($d);
    }

    //Generate and Save QR code
    $qrcode = "Worker Cards/images/$worker_loginId/$id.png";
    QRcode::png($text, $qrcode);

    $workerCard = str_replace(" ", "_", $workerName . $id) . '.jpg';
    $save = "Worker Cards/images/$worker_loginId/$workerCard";
    $_SESSION['card'] = $save;
    $bgpic = imagecreatefrompng("Worker Cards/migrant_labours.png");
    $textcolor = imagecolorallocate($bgpic, 255, 255, 255);
    $infcolor = imagecolorallocate($bgpic, 0, 0, 0);
    $stscolor = imagecolorallocate($bgpic, 0x00, 0x55, 0x00);
    $ttscolor = imagecolorallocate($bgpic, 255, 0, 0);
    $ifscolor = imagecolorallocate($bgpic, 0, 1, 255);
    $font = "Worker Cards/fonts/Quicksand.ttf";

    imagettftext($bgpic, 8, 90, 25, 600, $infcolor, $font, 'WORKER CARD GENERATED ON ' . date('d-m-Y'));

    imagettftext($bgpic, 25, 0, 50, 50, $infcolor, $font, 'ID : ');
    imagettftext($bgpic, 25, 0, 115, 50, $infcolor, $font, $id);

    imagettftext($bgpic, 14, 0, 50, 120, $textcolor, $font, 'Name');
    imagettftext($bgpic, 14, 0, 200, 120, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 120, $textcolor, $font, $workerName);

    imagettftext($bgpic, 14, 0, 50, 160, $textcolor, $font, 'Address');
    imagettftext($bgpic, 14, 0, 200, 160, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 160, $textcolor, $font, $address);

    imagettftext($bgpic, 14, 0, 50, 220, $textcolor, $font, 'Date Of Birth');
    imagettftext($bgpic, 14, 0, 200, 220, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 220, $textcolor, $font, date('d-m-Y', strtotime($dob)));

    imagettftext($bgpic, 14, 0, 50, 260, $textcolor, $font, 'Gender');
    imagettftext($bgpic, 14, 0, 200, 260, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 260, $textcolor, $font, $gender);

    imagettftext($bgpic, 14, 0, 50, 300, $textcolor, $font, 'Street');
    imagettftext($bgpic, 14, 0, 200, 300, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 300, $textcolor, $font, $street);

    imagettftext($bgpic, 14, 0, 50, 340, $textcolor, $font, 'District');
    imagettftext($bgpic, 14, 0, 200, 340, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 340, $textcolor, $font, $district);

    imagettftext($bgpic, 14, 0, 50, 380, $textcolor, $font, 'City');
    imagettftext($bgpic, 14, 0, 200, 380, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 380, $textcolor, $font, $city);

    imagettftext($bgpic, 14, 0, 50, 420, $textcolor, $font, 'Pincode');
    imagettftext($bgpic, 14, 0, 200, 420, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 420, $textcolor, $font, $pincode);

    imagettftext($bgpic, 14, 0, 50, 460, $textcolor, $font, 'Contact No.');
    imagettftext($bgpic, 14, 0, 200, 460, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 460, $textcolor, $font, $contactNo);

    imagettftext($bgpic, 14, 0, 50, 500, $textcolor, $font, 'Aadhaar No.');
    imagettftext($bgpic, 14, 0, 200, 500, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 500, $textcolor, $font, $aadhaar);

    imagettftext($bgpic, 14, 0, 50, 540, $textcolor, $font, 'Agency Name');
    imagettftext($bgpic, 14, 0, 200, 540, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 540, $textcolor, $font, $agencyName);

    imagettftext($bgpic, 14, 0, 50, 580, $textcolor, $font, 'Email');
    imagettftext($bgpic, 14, 0, 200, 580, $textcolor, $font, ':');
    imagettftext($bgpic, 14, 0, 250, 580, $textcolor, $font, $email);

    if (trim($photo != "")) {
        $imgi = getimagesize($photo);
        if ($imgi[0] > 0) {
            if ($imgi[2] == 1) {
                $av = imagecreatefromgif($photo);
                imagecopyresized($bgpic, $av, 650, 300, 0, 0, 175, 190, $imgi[0], $imgi[1]);
            } else if ($imgi[2] == 2) {
                $av = imagecreatefromjpeg($photo);
                imagecopyresized($bgpic, $av, 650, 300, 0, 0, 175, 190, $imgi[0], $imgi[1]);
            } else if ($imgi[2] == 3) {
                $av = imagecreatefrompng($photo);
                imagecopyresized($bgpic, $av, 650, 300, 0, 0, 175, 190, $imgi[0], $imgi[1]);
            }

        }
    }

    //Include qr code in the worker card
    if (trim($qrcode != "")) {
        $imgi = getimagesize($qrcode);
                $av = imagecreatefrompng($qrcode);
                imagecopyresized($bgpic, $av, 760, 20, 0, 0, 250, 250, $imgi[0], $imgi[1]);
    }


    imagepng($bgpic, $save);
    imagedestroy($bgpic);
    $obj->uploadWorkerCard($worker_loginId, $workerCard);
    header("Location: " . $save);
}

$smartyObj->display('labourCommissionHeader.tpl');
$smartyObj->display('labourCommissionGenerateWPC.tpl');
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>