<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

    $id = $_COOKIE['id'];
    $data = $obj->getWorkersByAgencyForVideo($id);
    for ($i = 0; $i < count($data); $i++) {
        $data[$i]['strTime'] = strtotime($data[$i]['scheduledDate'] . ' ' . $data[$i]['scheduledTime']);
    }
    $smartyObj->assign('data', $data);
    $smartyObj->display('agencyHeader.tpl');
    $smartyObj->display('agencyVideoConferenceWorkers.tpl');
    $smartyObj->display('footer.tpl');

} else
    header("location:login.php");
?>