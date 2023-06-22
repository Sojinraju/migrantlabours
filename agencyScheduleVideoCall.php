<?php

//use the phpmailer
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);

include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

    $agency_loginId = $_COOKIE['id'];
    $worker_loginId = $_GET['worker_loginId'];
    if (isset($_POST['hide']) and ($_POST['hide'] == 'h')) {
        if (isset($_POST['scheduledDate']) and ($_POST['scheduledDate'] != null)) {
            if (isset($_POST['scheduledTime']) and ($_POST['scheduledTime']) != null) {
                $scheduledDate = trim($_POST['scheduledDate']);
                $scheduledTime = trim($_POST['scheduledTime']);
                $message = $obj->agencyScheduleVideoCall($scheduledDate, $scheduledTime, $worker_loginId, $agency_loginId);

                //use the phpmailer
                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'username@gmail.com';
                    $mail->Password = 'password';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = '587';
                    $mail->setFrom('username@gmail.com');
                    $workerEmail = $obj->getEmailOfWorker($worker_loginId);
                    $mail->addAddress($workerEmail);
                    $mail->isHTML(true);
                    $mail->Subject = 'Video Conferencing Scheduled with Agency using Migrant Labours Tracking System';
                    $mail->Body = "$message";
                    $mail->send();

                } catch (Exception $e) {
                    echo "<script>alert('$e')</script>";
                }

                echo "<script>window.location.href='agencyVideoConferenceWorkers.php';</script>";
            } else
                echo "<script>alert('Time is Empty')</script>";
        } else
            echo "<script>alert('Date is Empty')</script>";
    }
    $smartyObj->display('agencyHeader.tpl');
    $smartyObj->display('agencyScheduleVideoCall.tpl');
    $smartyObj->display('footer.tpl');

} else
    header("location:login.php");
?>