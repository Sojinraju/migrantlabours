<?php

class userclass
{
    function registerPoliceStation($stationId, $addLine1, $addLine2, $pincode, $district, $city, $contactNo, $email, $password)
    {
        $query = "select loginId from login where email='" . $email . "'";
        $exe = mysql_query($query);
        $loginId = null;
        while ($rr = mysql_fetch_array($exe))
            $loginId = $rr['loginId'];
        if ($loginId == null) {
            $query4 = "select stationId from policestation where stationId='" . $stationId . "'";
            $exe4 = mysql_query($query4);
            $checkStationId = null;
            while ($rr = mysql_fetch_array($exe4))
                $checkStationId = $rr['stationId'];
            if ($checkStationId == null) {
                $enc = md5($password);
                $query1 = "insert into login(email,password,userType) values('" . $email . "','" . $enc . "','1')";
                $exe1 = mysql_query($query1);
                $query2 = "select loginId from login";
                $exe2 = mysql_query($query2);
                $loginId = null;
                while ($rr = mysql_fetch_array($exe2)) {
                    $loginId = $rr['loginId'];
                }
                $query3 = "insert into policestation(stationId,addLine1,addLine2,pincode,district,city,contactNo,loginId) values('" . $stationId . "','" . $addLine1 . "','" . $addLine2 . "','" . $pincode . "','" . $district . "','" . $city . "','" . $contactNo . "','" . $loginId . "')";
                $exe3 = mysql_query($query3);
                if ($exe1 && $exe3)
                    echo "<script>alert('Police Station Registration Successfull')</script>";
                else
                    echo "<script>alert('Unsuccessfull attempt while Police Station Registration')</script>";
            } else
                echo "<script>alert('Error! Station with same Station Id already exists')</script>";
        } else
            echo "<script>alert('Error! User with same email id already registered')</script>";
    }

    function registerAgency($agencyId, $agencyName, $address, $pincode, $district, $city, $propName, $contactNo, $email, $password)
    {
        $query = "select loginId from login where email='" . $email . "'";
        $exe = mysql_query($query);
        $loginId = null;
        while ($rr = mysql_fetch_array($exe))
            $loginId = $rr['loginId'];
        if ($loginId == null) {
            $query4 = "select agencyId from agency where agencyId='" . $agencyId . "'";
            $exe4 = mysql_query($query4);
            $checkAgencyId = null;
            while ($rr = mysql_fetch_array($exe4))
                $checkAgencyId = $rr['agencyId'];
            if ($checkAgencyId == null) {
                $enc = md5($password);
                $query1 = "insert into login(email,password,userType) values('" . $email . "','" . $enc . "','2')";
                $exe1 = mysql_query($query1);
                $query2 = "select loginId from login";
                $exe2 = mysql_query($query2);
                $loginId = null;
                while ($rr = mysql_fetch_array($exe2)) {
                    $loginId = $rr['loginId'];
                }
                $query3 = "insert into agency(agencyId,agencyName,address,pincode,district,city,propName,contactNo,loginId) values('" . $agencyId . "','" . $agencyName . "','" . $address . "','" . $pincode . "','" . $district . "','" . $city . "','" . $propName . "','" . $contactNo . "','" . $loginId . "')";
                $exe3 = mysql_query($query3);
                if ($exe1 && $exe3)
                    echo "<script>alert('Agency  Registration Successfull')</script>";
                else
                    echo "<script>alert('Unsuccessfull attempt while Agency Registration')</script>";
            } else
                echo "<script>alert('Error! Agency with same Agency Id already exists')</script>";
        } else
            echo "<script>alert('Error! User with same email id already registered')</script>";
    }
    function registerWorker($workerName, $_file1 = NULL, $_file2 = NULL, $address, $dob, $gender, $street, $district, $city, $pincode, $contactNo, $aadhaar, $agency_loginId, $email, $password)
    {
        $query = "select loginId from login where email='" . $email . "'";
        $exe = mysql_query($query);
        $loginId = null;
        while ($rr = mysql_fetch_array($exe))
            $loginId = $rr['loginId'];
        if ($loginId == null) {
            $enc = md5($password);
            $query1 = "insert into login(email,password,userType) values('" . $email . "','" . $enc . "','3')";
            $exe1 = mysql_query($query1);
            $query2 = "select loginId from login";
            $exe2 = mysql_query($query2);
            $loginId = null;
            while ($rr = mysql_fetch_array($exe2)) {
                $loginId = $rr['loginId'];
            }
            $query3 = "insert into worker(workerName,photo,medicalReport,address,dob,gender,street,district,city,pincode,contactNo,aadhaar,loginId,agency_loginId) values('" . $workerName . "','" . $_file1['name'] . "','" . $_file2['name'] . "','" . $address . "','" . $dob . "','" . $gender . "','" . $street . "','" . $district . "','" . $city . "','" . $pincode . "','" . $contactNo . "','" . $aadhaar . "','" . $loginId . "','" . $agency_loginId . "')";
            $d1 = "photos/" . $loginId;
            $d2 = "Medical Reports/" . $loginId;
            $exe3 = mysql_query($query3);
            if ($exe1 && $exe3) {
                mkdir($d1);
                mkdir($d2);
                move_uploaded_file($_file1["tmp_name"], $d1 . "/" . $_file1["name"]);
                move_uploaded_file($_file2["tmp_name"], $d2 . "/" . $_file2["name"]);
                echo "<script>alert('Worker  Registration Successfull')</script>";
            } else
                echo "<script>alert('Unsuccessfull attempt while Worker Registration')</script>";
        } else
            echo "<script>alert('Error! User with same email id already registered')</script>";
    }
    function registerInsuranceAgency($insAgId, $insAgName, $address, $district, $contactNo, $email, $password)
    {
        $query = "select loginId from login where email='" . $email . "'";
        $exe = mysql_query($query);
        $loginId = null;
        while ($rr = mysql_fetch_array($exe))
            $loginId = $rr['loginId'];
        if ($loginId == null) {
            $query4 = "select insAgId from insuranceagency where insAgId='" . $insAgId . "'";
            $exe4 = mysql_query($query4);
            $checkInsAgId = null;
            while ($rr = mysql_fetch_array($exe4))
                $checkInsAgId = $rr['insAgId'];
            if ($checkInsAgId == null) {
                $enc = md5($password);
                $query1 = "insert into login(email,password,userType) values('" . $email . "','" . $enc . "','4')";
                $exe1 = mysql_query($query1);
                $query2 = "select loginId from login";
                $exe2 = mysql_query($query2);
                $loginId = null;
                while ($rr = mysql_fetch_array($exe2)) {
                    $loginId = $rr['loginId'];
                }
                $query3 = "insert into insuranceagency(insAgId,insAgName,address,district,contactNo,loginId) values('" . $insAgId . "','" . $insAgName . "','" . $address . "','" . $district . "','" . $contactNo . "','" . $loginId . "')";
                $exe3 = mysql_query($query3);
                if ($exe1 && $exe3)
                    echo "<script>alert('Insurance Agency  Registration Successfull')</script>";
                else
                    echo "<script>alert('Unsuccessfull attempt while Insurance Agency Registration')</script>";
            } else
                echo "<script>alert('Error! Agency with same Agency Id already exists')</script>";
        } else
            echo "<script>alert('Error! User with same email id already registered')</script>";
    }
    function registerScheme($schemeCat, $schemeName, $schemeAmnt, $validity, $schemeDetails, $interestRate, $insAg_loginId)
    {
        $query = "insert into scheme(schemeCat,schemeName,schemeAmnt,validity,schemeDetails,interestRate,insAg_loginId) values('" . $schemeCat . "','" . $schemeName . "','" . $schemeAmnt . "','" . $validity . "','" . $schemeDetails . "','" . $interestRate . "','" . $insAg_loginId . "')";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Scheme Registration Successfull')</script>";
        else
            echo "<script>alert('Unsuccessfull attempt while Scheme Registration')</script>";
    }
    function registerNotification($notification)
    {
        $currentDate = date('Y-m-d');
        $query = "insert into notification(notification,currentDate) values('" . $notification . "','" . $currentDate . "')";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Notification Added Successfully')</script>";
        else
            echo "<script>alert('Notfication Not Added')</script>";
    }
    function applyScheme($worker_loginId, $schemeId)
    {
        $query1 = "select schemeApplyId from schemeapply where worker_loginId='" . $worker_loginId . "' and schemeId='" . $schemeId . "' and claimStatus='0'";
        $exe1 = mysql_query($query1);
        $schemeApplyId = null;
        while ($rr = mysql_fetch_array($exe1)) {
            $schemeApplyId = $rr['schemeApplyId'];
        }
        if ($schemeApplyId == null) {
            $currentDate = date('Y-m-d');
            $query2 = "insert into schemeapply(worker_loginId,schemeId,currentDate) values('" . $worker_loginId . "','" . $schemeId . "','" . $currentDate . "')";
            $exe2 = mysql_query($query2);
            if ($exe2)
                echo "<script>alert('Scheme applied to worker')</script>";
            else
                echo "<script>alert('Scheme not applied to worker')</script>";
        } else
            echo "<script>alert('Scheme already applied for worker')</script>";
    }

    function login($email, $password)
    {
        $enc = md5($password);
        $query = "select loginId,userType,status from login where email='" . $email . "' and password='" . $enc . "'";
        $exe = mysql_query($query);
        $id = null;
        $userType = null;
        $c = 0;
        while ($rr = mysql_fetch_array($exe)) {
            $id = $rr['loginId'];
            $userType = $rr['userType'];
            $status = $rr['status'];
            $c++;
        }
        if ($c > 0) {
            if ($status == 1) {
                setcookie("id", $id);
                setcookie("logined", 1);
                setcookie("userType", $userType);
                if ($userType == 0) {
                    header("location:admin.php");
                } else if ($userType == 1) {
                    header("location:policeHome.php");
                } else if ($userType == 2) {
                    header("location:agencyHome.php");
                } else if ($userType == 3) {
                    header("location:workerHome.php");
                } else if ($userType == 4) {
                    header("location:insuranceAgencyHome.php");
                } else if ($userType == 5) {
                    header("location:labourCommissionHome.php");
                } else {
                    echo "<script>alert('User not registered')</script>";
                }
            } else {
                echo "<script>alert('User not accepted')</script>";
            }
        } else
            echo "<script>alert('Invalid User')</script>";
    }
    function getEmailOfUser($id)
    {
        $query = "select email from login where loginId='" . $id . "'";
        $exe = mysql_query($query);
        $email = null;
        while ($rr = mysql_fetch_array($exe))
            $email = $rr['email'];
        echo $email;
        return $email;
    }
    function getEmailOfWorker($id)
    {
        $query = "select email from login where loginId='" . $id . "'";
        $exe = mysql_query($query);
        $email = null;
        while ($rr = mysql_fetch_array($exe))
            $email = $rr['email'];
        return $email;
    }
    function getTypeOfUser($id)
    {
        $query = "select case when userType='0' then 'Admin'
        when userType='1' then 'Police Station'
        when userType='2' then 'Agency' 
        when userType='3' then 'Worker'
        when userType='4' then 'Insurance Agency'
        when userType='5' then 'Labour Commission'
        else 'Not Available'
        end as userType
        from login where loginId='" . $id . "'";
        $exe = mysql_query($query);
        $usertype = null;
        while ($rr = mysql_fetch_array($exe))
            $usertype = $rr['userType'];
        echo $usertype;
    }

    function getAllPoliceStations()
    {
        $query = "select * from policestation inner join login on login.loginId=policestation.loginId";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getAllAgency()
    {
        $query = "select * from agency inner join login on login.loginId=agency.loginId";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getAllInsuranceAgency()
    {
        $query = "select * from insuranceagency inner join login on login.loginId=insuranceagency.loginId";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getAllWorkers()
    {
        $query = "select worker.workerId,worker.photo,worker.workerName,worker.address,worker.dob,worker.street,worker.district,worker.city,worker.pincode,worker.contactNo,worker.aadhaar,agency.agencyName,agency.loginId,login.email,login.status,worker.loginId as wlogid from worker inner join login on login.loginId=worker.loginId inner join agency on agency.loginId=worker.agency_loginId";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getWorkersByAgency($id)
    {
        $query = "select worker.workerId,worker.photo,worker.workerName,worker.address,worker.dob,worker.street,worker.district,worker.city,worker.pincode,worker.contactNo,worker.aadhaar,worker.workerCard,worker.medicalReport,worker.deathReport,worker.deathPassingStatus,agency.agencyName,agency.loginId,login.email,login.status,worker.passingStatus,worker.crimeReport,worker.loginId as wlogid from worker inner join login on login.loginId=worker.loginId inner join agency on agency.loginId=worker.agency_loginId where worker.agency_loginId='" . $id . "'";
        // $query = "select *,worker.loginId as wlogid,worker.address as address,worker.district as district,worker.city as city,worker.pincode as pincode,worker.contactNo as contactNo from worker inner join login on login.loginId=worker.loginId inner join agency on agency.loginId=worker.agency_loginId where worker.agency_loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getApprovedWorkersByAgency($id)
    {
        $currentDate = date('Y-m-d');
        $query = "select worker.workerId,worker.photo,worker.workerName,worker.address,worker.dob,worker.street,worker.district,worker.city,worker.pincode,worker.contactNo,worker.aadhaar,agency.agencyName,agency.loginId,login.email,login.status,worker.loginId as wlogid,attendance.attendance,attendance.currentDate from worker inner join login on login.loginId=worker.loginId inner join agency on agency.loginId=worker.agency_loginId left join attendance on attendance.worker_loginId=worker.loginId and attendance.currentDate='" . $currentDate . "' where worker.agency_loginId='" . $id . "' and status='1'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getWorkersByLabourCommission()
    {
        $query = "select worker.workerName,worker.address,worker.dob,worker.gender,worker.street,worker.district,worker.city,worker.pincode,worker.contactNo,worker.aadhaar,login.email,worker.loginId as wlogid,worker.photo,worker.workerCard,agency.agencyName,agency.contactNo as agency_contactNo,worker.passingStatus,worker.crimeReport from worker inner join agency on agency.loginId=worker.agency_loginId inner join login on login.loginId=worker.loginId where not worker.passingStatus='0'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getWorkersByPoliceStation($id)
    {
        $query = "select worker.workerName,worker.address,worker.dob,worker.street,worker.district,worker.city,worker.pincode,worker.contactNo,worker.aadhaar,login.email,worker.loginId as wlogid,worker.photo,agency.agencyName,agency.contactNo as agency_contactNo,worker.passingStatus,worker.crimeReport from worker inner join agency on agency.loginId=worker.agency_loginId inner join login on login.loginId=worker.loginId inner join policestation on worker.pincode=policestation.pincode where worker.passingStatus='2' and policestation.loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }

    function getSchemesByInsAg($id)
    {
        $query = "select * from scheme where insAg_loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getAllNotifications()
    {
        $query = "select * from notification order by currentDate desc";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function viewAppliedSchemesByInsAg($id)
    {
        $query = "select worker.workerName,worker.address,worker.dob,worker.contactNo,worker.loginId as wlogid,worker.photo,agency.agencyName,agency.contactNo as agency_contactNo,scheme.schemeCat,scheme.schemeName,scheme.schemeAmnt,schemeapply.schemeApplyId,schemeapply.currentDate,schemeapply.schemeStatus,schemeapply.insuranceCard,schemeapply.claimStatus from schemeapply inner join worker on schemeapply.worker_loginId=worker.loginId inner join scheme on schemeapply.schemeId=scheme.schemeId inner join agency on worker.agency_loginId=agency.loginId inner join insuranceagency on scheme.insAg_loginId=insuranceagency.loginId where insuranceagency.loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function viewAppliedSchemesByAgency($id)
    {
        $query = "select worker.workerName,worker.address,worker.dob,worker.contactNo,worker.loginId as wlogid,worker.photo,insuranceagency.insAgName,schemeapply.schemeApplyId,scheme.schemeCat,scheme.schemeName,scheme.schemeAmnt,schemeapply.currentDate,schemeapply.schemeStatus,schemeapply.insuranceCard,schemeapply.claimStatus from schemeapply inner join worker on schemeapply.worker_loginId=worker.loginId inner join scheme on schemeapply.schemeId=scheme.schemeId inner join agency on worker.agency_loginId=agency.loginId inner join insuranceagency on scheme.insAg_loginId=insuranceagency.loginId where agency.loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function approvebyAgency($id)
    {
        $query = "update login set status='1' where loginId='" . $id . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Approved Successfully')</script>";
        else
            echo "<script>alert('Approval Unsuccessfull')</script>";
    }
    function rejectbyAgency($id)
    {
        $query = "update login set status='2' where loginId='" . $id . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Rejected Successfully')</script>";
        else
            echo "<script>alert('Rejection Unsuccessfull')</script>";
    }
    function approvebyAdmin($id)
    {
        $query = "update login set status='1' where loginId='" . $id . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Approved Successfully')</script>";
        else
            echo "<script>alert('Approval Unsuccessfull')</script>";
    }
    function rejectbyAdmin($id)
    {
        $query = "update login set status='2' where loginId='" . $id . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Rejected Successfully')</script>";
        else
            echo "<script>alert('Rejection Unsuccessfull')</script>";
    }
    function policeEdit($id)
    {
        $query = "select * from policestation inner join login on login.loginId=policestation.loginId where login.loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($a = mysql_fetch_array($exe)) {
            $arr[] = $a;

        }
        return $arr;
    }
    function agencyEdit($id)
    {
        $query = "select * from agency inner join login on login.loginId=agency.loginId where login.loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($a = mysql_fetch_array($exe)) {
            $arr[] = $a;
        }
        return $arr;
    }
    function workerEdit($id)
    {
        $query = "select worker.workerId,worker.photo,worker.workerName,worker.address,worker.dob,worker.gender,worker.street,worker.district,worker.city,worker.pincode,worker.contactNo,worker.aadhaar,worker.workerCard,worker.medicalReport,SUBSTRING(workerCard, -11, 7) AS qrCode,agency.agencyName,agency.loginId,login.email,worker.loginId as wlogid from worker inner join login on login.loginId=worker.loginId inner join agency on agency.loginId=worker.agency_loginId where login.loginId='" . $id . "'";
        // $query = "select *,worker.address as address,worker.loginId as wlogid from worker inner join login on login.loginId=worker.loginId inner join agency on agency.loginId=worker.agency_loginId where login.loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($a = mysql_fetch_array($exe)) {
            $arr[] = $a;
        }
        return $arr;

    }
    function insuranceAgencyEdit($id)
    {
        $query = "select * from insuranceagency inner join login on login.loginId=insuranceagency.loginId where login.loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($a = mysql_fetch_array($exe)) {
            $arr[] = $a;
        }
        return $arr;
    }
    function schemeEdit($id)
    {
        $query = "select * from scheme where schemeId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($a = mysql_fetch_array($exe)) {
            $arr[] = $a;
        }
        return $arr;
    }

    function updatePoliceStation($stationId, $addLine1, $addLine2, $pincode, $district, $city, $contactNo, $email, $id)
    {
        $query = "select loginId from login where email='" . $email . "'";
        $exe = mysql_query($query);
        $loginId = null;
        while ($rr = mysql_fetch_array($exe))
            $loginId = $rr['loginId'];
        if ($loginId == null or $loginId == $id) {
            $query3 = "select policestation.stationId from policestation inner join login on policestation.loginId=login.loginId where login.loginId='" . $id . "'";
            $exe3 = mysql_query($query3);
            $checkStationId = null;
            while ($rr = mysql_fetch_array($exe3))
                $checkStationId = $rr['stationId'];
            if ($checkStationId == null or $checkStationId == $stationId) {
                $query1 = "update policestation set stationId='" . $stationId . "', addLine1='" . $addLine1 . "', addLine2='" . $addLine2 . "', pincode='" . $pincode . "', district='" . $district . "', city='" . $city . "', contactNo='" . $contactNo . "' where loginId='" . $id . "'";
                $exe1 = mysql_query($query1);
                $query2 = "update login set email='" . $email . "' where loginId='" . $id . "'";
                $exe2 = mysql_query($query2);
                if ($exe1 && $exe2)
                    echo "<script>alert('Updation Successfull')</script>";
                else
                    echo "<script>alert('Updation Unsuccessfull')</script>";
            } else
                echo "<script>alert('Error! Station with same Station Id already exists')</script>";
        } else
            echo "<script>alert('Error! User with same email id already registered')</script>";
    }
    function updateAgency($agencyId, $agencyName, $address, $pincode, $district, $city, $propName, $contactNo, $email, $id)
    {
        $query = "select loginId from login where email='" . $email . "'";
        $exe = mysql_query($query);
        $loginId = null;
        while ($rr = mysql_fetch_array($exe))
            $loginId = $rr['loginId'];
        if ($loginId == null or $loginId == $id) {
            $query3 = "select agency.agencyId from agency inner join login on agency.loginId=login.loginId where login.loginId='" . $id . "'";
            $exe3 = mysql_query($query3);
            $checkAgencyId = null;
            while ($rr = mysql_fetch_array($exe3))
                $checkAgencyId = $rr['agencyId'];
            if ($checkAgencyId == null or $checkAgencyId == $agencyId) {
                $query1 = "update agency set agencyId='" . $agencyId . "', agencyName='" . $agencyName . "', address='" . $address . "', pincode='" . $pincode . "', district='" . $district . "', city='" . $city . "',propName='" . $propName . "', contactNo='" . $contactNo . "' where loginId='" . $id . "'";
                $exe1 = mysql_query($query1);
                $query2 = "update login set email='" . $email . "' where loginId='" . $id . "'";
                $exe2 = mysql_query($query2);
                if ($exe1 && $exe2)
                    echo "<script>alert('Updation Successfull')</script>";
                else
                    echo "<script>alert('Updation Unsuccessfull')</script>";
            } else
                echo "<script>alert('Error! Agency with same Agency Id already exists')</script>";
        } else
            echo "<script>alert('Error! User with same email id already registered')</script>";
    }
    function updateWorker($workerName, /*$_file = NULL,*/$address, $dob, $gender, $street, $district, $city, $pincode, $contactNo, $aadhaar, $agency_loginId, $email, $id)
    {
        $query = "select loginId from login where email='" . $email . "'";
        $exe = mysql_query($query);
        $loginId = null;
        while ($rr = mysql_fetch_array($exe))
            $loginId = $rr['loginId'];
        if ($loginId == null or $loginId == $id) {
            $query1 = "update worker set workerName='" . $workerName . "', address='" . $address . "',dob='" . $dob . "',gender='" . $gender . "', street='" . $street . "', district='" . $district . "', city='" . $city . "',pincode='" . $pincode . "', contactNo='" . $contactNo . "', aadhaar='" . $aadhaar . "',agency_loginId='" . $agency_loginId . "' where loginId='" . $id . "'";
            $exe1 = mysql_query($query1);
            $query2 = "update login set email='" . $email . "' where loginId='" . $id . "'";
            $exe2 = mysql_query($query2);
            if ($exe1 && $exe2) {
                echo "<script>alert('Updation Successfull')</script>";
            } else
                echo "<script>alert('Updation Unsuccessfull')</script>";
        } else
            echo "<script>alert('Error! User with same email id already registered')</script>";
    }
    function updateWorkerPhoto($_file = NULL, $id)
    {
        $query1 = "update worker set photo='" . $_file['name'] . "' where loginId='" . $id . "'";
        $d = "photos/" . $id;
        $exe1 = mysql_query($query1);
        if ($exe1) {
            if (!is_dir($d)) {
                mkdir($d);
            }
            move_uploaded_file($_file["tmp_name"], $d . "/" . $_file["name"]);
            echo "<script>alert('Photo Updation Successfull')</script>";
        } else
            echo "<script>alert('Photo Updation Unsuccessfull')</script>";
    }
    function updateWorkerMedicalReport($_file = NULL, $id)
    {
        $query1 = "update worker set medicalReport='" . $_file['name'] . "' where loginId='" . $id . "'";
        $d = "Medical Reports/" . $id;
        $exe1 = mysql_query($query1);
        if ($exe1) {
            if (!is_dir($d)) {
                mkdir($d);
            }
            move_uploaded_file($_file["tmp_name"], $d . "/" . $_file["name"]);
            echo "<script>alert('Medical Report Updation Successfull')</script>";
        } else
            echo "<script>alert('Medical Report Updation Unsuccessfull')</script>";
    }
    function immediateClaimWorker($_file = NULL, $schemeApplyId)
    {
        $currentDate = date('Y-m-d');
        $query = "insert into insuranceclaim(schemeApplyId,medicalReport,currentDate) values('" . $schemeApplyId . "','" . $_file['name'] . "','" . $currentDate . "')";
        $d = "Insurance Medical Reports/" . $schemeApplyId;
        $exe = mysql_query($query);
        if ($exe) {
            if (!is_dir($d))
                mkdir($d);
            move_uploaded_file($_file["tmp_name"], $d . "/" . $_file["name"]);
            echo "<script>alert('Claim Request Sent Successfully')</script>";
        } else
            echo "<script>alert('Claim Request Unsuccessfull')</script>";
    }
    function claimInsurance($schemeApplyId)
    {
        $currentDate = date('Y-m-d');
        $query = "insert into insuranceclaim(schemeApplyId,currentDate) values('" . $schemeApplyId . "','" . $currentDate . "')";
        $exe = mysql_query($query);
        if ($exe) {
            echo "<script>alert('Claim Request Sent Successfully');</script>";
        } else
            echo "<script>alert('Claim Request Unsuccessfull');</script>";
    }
    function agencyUploadDeathReport($_file = null, $worker_loginId)
    {
        $query = "update worker set deathReport='" . $_file['name'] . "' where loginId='" . $worker_loginId . "'";
        $d = "Death Reports/" . $worker_loginId;
        $exe = mysql_query($query);
        if ($exe) {
            if (!is_dir($d)) {
                mkdir($d);
            }
            move_uploaded_file($_file["tmp_name"], $d . "/" . $_file["name"]);
            echo "<script>alert('Crime Report Uploaded Successfully')</script>";
        } else
            echo "<script>alert('Crime Report Not Uploaded')</script>";
    }
    function policeUploadWorkerCrimeReport($_file = NULL, $worker_loginId)
    {
        $query = "update worker set crimeReport='" . $_file['name'] . "' where loginId='" . $worker_loginId . "'";
        $d = "Crime Reports/" . $worker_loginId;
        $exe = mysql_query($query);
        if ($exe) {
            if (!is_dir($d)) {
                mkdir($d);
            }
            move_uploaded_file($_file["tmp_name"], $d . "/" . $_file["name"]);
            echo "<script>alert('Crime Report Uploaded Successfully')</script>";
        } else
            echo "<script>alert('Crime Report Not Uploaded')</script>";
    }

    function insuranceAgencyUploadCard($_file = NULL, $schemeApplyId)
    {
        $query = "update schemeapply set insuranceCard='" . $_file['name'] . "' where schemeApplyId='" . $schemeApplyId . "'";
        $d = "Insurance Cards/" . $schemeApplyId;
        $exe = mysql_query($query);
        if ($exe) {
            if (!is_dir($d)) {
                mkdir($d);
            }
            move_uploaded_file($_file["tmp_name"], $d . "/" . $_file["name"]);
            echo "<script>alert('Insurance Card Uploaded Successfully')</script>";
        } else
            echo "<script>alert('Insurance Card Not Uploaded')</script>";
    }
    function updateInsuranceAgency($insAgId, $insAgName, $address, $district, $contactNo, $email, $id)
    {
        $query = "select loginId from login where email='" . $email . "'";
        $exe = mysql_query($query);
        $loginId = null;
        while ($rr = mysql_fetch_array($exe))
            $loginId = $rr['loginId'];
        if ($loginId == null or $loginId == $id) {
            $query3 = "select insuranceagency.insAgId from insuranceagency inner join login on insuranceagency.loginId=login.loginId where login.loginId='" . $id . "'";
            $exe3 = mysql_query($query3);
            $checkInsAgId = null;
            while ($rr = mysql_fetch_array($exe3))
                $checkInsAgId = $rr['insAgId'];
            if ($checkInsAgId == null or $checkInsAgId == $insAgId) {
                $query1 = "update insuranceagency set insAgId='" . $insAgId . "', insAgName='" . $insAgName . "', address='" . $address . "', district='" . $district . "', contactNo='" . $contactNo . "' where loginId='" . $id . "'";
                $exe1 = mysql_query($query1);
                $query2 = "update login set email='" . $email . "' where loginId='" . $id . "'";
                $exe2 = mysql_query($query2);
                if ($exe1 && $exe2)
                    echo "<script>alert('Updation Successfull')</script>";
                else
                    echo "<script>alert('Updation Unsuccessfull')</script>";
            } else
                echo "<script>alert('Error! Insurance Agency with same Insurance Agency Id already exists')</script>";
        } else
            echo "<script>alert('Error! User with same email id already registered')</script>";

    }
    function updateScheme($schemeCat, $schemeName, $schemeAmnt, $validity, $schemeDetails, $interestRate, $id)
    {
        $query = "update scheme set schemeCat='" . $schemeCat . "',schemeName='" . $schemeName . "', schemeAmnt='" . $schemeAmnt . "', validity='" . $validity . "', schemeDetails='" . $schemeDetails . "', interestRate='" . $interestRate . "' where schemeId='" . $id . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Scheme Edit Successfull')</script>";
        else
            echo "<script>alert('Unsuccessfull attempt while Scheme Edit')</script>";
    }
    function deleteSchemeByInsAg($id)
    {
        $query = "delete from scheme where schemeId='" . $id . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Scheme Deleted Successfully')</script>";
        else
            echo "<script>alert('Cannot Delete Scheme')</script>";
    }
    function agencyCancelAppliedScheme($id)
    {
        $query = "delete from schemeapply where schemeApplyId='" . $id . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Scheme Application Deleted Successfully')</script>";
        else
            echo "<script>alert('Cannot Delete Scheme Application')</script>";
    }
    function agencyPassWorkerToLabourCommission($worker_loginId)
    {
        $query = "update worker set passingStatus='1' where loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Passed to Labour Commission Successfully')</script>";
        else
            echo "<script>alert('Passing Unsuccessfull')</script>";
    }
    function labourCommissionPassWorkerToPoliceStation($worker_loginId)
    {
        $query = "update worker set passingStatus='2' where loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Passed to Police Station Successfully')</script>";
        else
            echo "<script>alert('Passing Unsuccessfull')</script>";
    }
    function labourCommissionPassWorkerToAgency($worker_loginId)
    {
        $query = "update worker set passingStatus='3' where loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Passed to Agency Successfully')</script>";
        else
            echo "<script>alert('Passing Unsuccessfull')</script>";
    }
    function agencyPresentWorker($worker_loginId, $agency_loginId)
    {
        $currentDate = date('Y-m-d');
        $currentMonth = date('m');
        $query1 = "select attendanceId from attendance where worker_loginId='" . $worker_loginId . "' and currentDate='" . $currentDate . "'";
        $exe2 = mysql_query($query1);
        $id = null;
        while ($rr = mysql_fetch_array($exe2)) {
            $id = $rr['attendanceId'];
        }
        if ($id == null) {
            $query2 = "insert into attendance(worker_loginId,attendance,agency_loginId,currentDate,currentMonth) values('" . $worker_loginId . "','Present','" . $agency_loginId . "','" . $currentDate . "','" . $currentMonth . "')";
            $exe2 = mysql_query($query2);
            if ($exe2)
                echo "<script>alert('Attendance marked as Present')</script>";
            else
                echo "<script>alert('Attendance not marked')</script>";
        } else
            echo "<script>alert('Attendance already marked')</script>";
    }
    function agencyAbsentWorker($worker_loginId, $agency_loginId)
    {
        $currentDate = date('Y-m-d');
        $currentMonth = date('m');
        $query1 = "select attendanceId from attendance where worker_loginId='" . $worker_loginId . "' and currentDate='" . $currentDate . "'";
        $exe2 = mysql_query($query1);
        $id = null;
        while ($rr = mysql_fetch_array($exe2)) {
            $id = $rr['attendanceId'];
        }
        if ($id == null) {
            $query2 = "insert into attendance(worker_loginId,attendance,agency_loginId,currentDate,currentMonth) values('" . $worker_loginId . "','Absent','" . $agency_loginId . "','" . $currentDate . "','" . $currentMonth . "')";
            $exe2 = mysql_query($query2);
            if ($exe2)
                echo "<script>alert('Attendance marked as Absent')</script>";
            else
                echo "<script>alert('Attendance not marked')</script>";
        } else
            echo "<script>alert('Attendance already marked')</script>";
    }
    function agencyToggleWorkerAttendance($worker_loginId, $agency_loginId, $currentDate)
    {
        $query = "update attendance set attendance=if(attendance='Present','Absent','Present'),agency_loginId='" . $agency_loginId . "' where worker_loginId='" . $worker_loginId . "' and currentDate='" . $currentDate . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Attendance Status Changed')</script>";
        else
            echo "<script>alert('Attendance Not Changed')</script>";
    }
    function getDailyAttendance($worker_loginId, $date)
    {
        $query = "select worker.workerId,worker.workerName,attendance.attendance from worker left join attendance on worker.loginId=attendance.worker_loginId and attendance.currentDate='" . $date . "' where worker.loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getMonthlyAttendance($worker_loginId, $month)
    {
        $query = "select currentDate,attendance from attendance where currentMonth='" . $month . "' and worker_loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function rejectSchemeByInsAg($schemeApplyId)
    {
        $query = "update schemeapply set schemeStatus='2' where schemeApplyId='" . $schemeApplyId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Rejected Successfully')</script>";
        else
            echo "<script>alert('Rejection Unsuccessfull')</script>";
    }
    function approveSchemeByInsAg($schemeApplyId)
    {
        $query = "update schemeapply set schemeStatus='1' where schemeApplyId='" . $schemeApplyId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Approved Successfully')</script>";
        else
            echo "<script>alert('Approval Unsuccessfull')</script>";
    }
    function isApplied($worker_loginId, $schemeId)
    {
        $query1 = "select schemeApplyId from schemeapply where worker_loginId='" . $worker_loginId . "' and schemeId='" . $schemeId . "' and claimStatus='0'";
        $exe1 = mysql_query($query1);
        $schemeApplyId = null;
        while ($rr = mysql_fetch_array($exe1)) {
            $schemeApplyId = $rr['schemeApplyId'];
        }
        return $schemeApplyId;
    }
    function getSchemesByWorker($worker_loginId)
    {
        $query = "select scheme.*,schemeapply.currentDate,schemeapply.insuranceCard,schemeapply.schemeApplyId,insuranceagency.insAgName,insuranceclaim.insClaimId,schemeapply.claimStatus from schemeapply inner join scheme on schemeapply.schemeId=scheme.schemeId inner join worker on schemeapply.worker_loginId=worker.loginId inner join insuranceagency on scheme.insAg_loginId=insuranceagency.loginId left join insuranceclaim on insuranceclaim.schemeApplyId=schemeapply.schemeApplyId where worker.loginId='" . $worker_loginId . "' and schemeapply.schemeStatus='1'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function uploadWorkerCard($worker_loginId, $workerCard)
    {
        $query = "update worker set workerCard='" . $workerCard . "' where loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Worker Card Generated Successfully')</script>";
        else
            echo "<script>alert('Unsuccessfull')</script>";
    }
    function adminDeleteNotification($id)
    {
        $query = "delete from notification where notificationId='" . $id . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Notification Deleted Successfully')</script>";
        else
            echo "<script>alert('Notification Not Deleted')</script>";
    }
    function adminEditNotification($id)
    {
        $query = "select * from notification where notificationId='" . $id . "'";
        $exe = mysql_query($query);
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function updateNotification($notification, $id)
    {
        $query = "update notification set notification='" . $notification . "' where notificationId='" . $id . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Changed Successfully')</script>";
        else
            echo "<script>alert('Not Changed')</script>";
    }
    function registerSalary($work, $salary, $agency_loginId)
    {
        $query1 = "select salaryId from salary where agency_loginId='" . $agency_loginId . "' and work='" . $work . "'";
        $exe1 = mysql_query($query1);
        $salaryId = null;
        while ($rr = mysql_fetch_array($exe1)) {
            $salaryId = $rr['salaryId'];
        }
        if ($salaryId == null) {
            $query2 = "insert into salary(work,salary,agency_loginId) values('" . $work . "','" . $salary . "','" . $agency_loginId . "')";
            $exe2 = mysql_query($query2);
            if ($exe2)
                echo "<script>alert('Salary applied to work')</script>";
            else
                echo "<script>alert('Salary not applied to work')</script>";
        } else
            echo "<script>alert('Salary already applied for the job')</script>";
    }
    function getSalaryOfAgency($agency_loginId)
    {
        $query = "select * from salary where agency_loginId='" . $agency_loginId . "'";
        $exe = mysql_query($query);
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function agencyEditSalary($id)
    {
        $query = "select * from salary where salaryId='" . $id . "'";
        $exe = mysql_query($query);
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function updateSalaryByAgency($salary, $id)
    {
        $query = "update salary set salary='" . $salary . "' where salaryId='" . $id . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Changed Successfully')</script>";
        else
            echo "<script>alert('Not Changed')</script>";
    }
    function registerWork($worker_loginId, $salaryId, $startDate, $days)
    {
        $query = "insert into workassign(worker_loginId,salaryId,startDate,days) values('" . $worker_loginId . "','" . $salaryId . "','" . $startDate . "','" . $days . "')";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Work assigned to Worker')</script>";
        else
            echo "<script>alert('Work not assigned to Worker')</script>";
    }
    function agencyDeallocatWork($worker_loginId)
    {
        $query = "update workassign set deallocationStatus='1' where worker_loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Work Deallocated Successfully')</script>";
        else
            echo "<script>alert('Not Deallocated Work')</script>";
    }

    function getWorkersForJobByAgency($id)
    {
        $query = "select worker.workerId,worker.photo,worker.workerName,worker.address,worker.dob,worker.street,worker.district,worker.city,worker.pincode,worker.contactNo,worker.aadhaar,agency.agencyName,agency.loginId,login.email,login.status,worker.loginId as wlogid from worker inner join login on login.loginId=worker.loginId inner join agency on agency.loginId=worker.agency_loginId where worker.agency_loginId='" . $id . "' and status='1'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe)) {
            $arr[] = $rr;
        }
        return $arr;
    }
    function isPreviouslyAppliedForJob($worker_loginId)
    {
        $query1 = "select distinct worker_loginId from workassign where worker_loginId='" . $worker_loginId . "' and deallocationStatus='1'";
        $exe1 = mysql_query($query1);
        $worker_loginId = null;
        while ($rr = mysql_fetch_array($exe1)) {
            $worker_loginId = $rr['worker_loginId'];
        }
        return $worker_loginId;
    }
    function isCurrentlyAppliedForJob($worker_loginId)
    {
        $query1 = "select distinct worker_loginId from workassign where worker_loginId='" . $worker_loginId . "' and deallocationStatus='0'";
        $exe1 = mysql_query($query1);
        $worker_loginId = null;
        while ($rr = mysql_fetch_array($exe1)) {
            $worker_loginId = $rr['worker_loginId'];
        }
        return $worker_loginId;
    }
    function getAvailableJobs($agency_loginId)
    {
        $query = "select distinct workassign.salaryId,salary.work from salary inner join workassign on workassign.salaryId=salary.salaryId inner join agency on agency.loginId=salary.agency_loginId where agency.loginId='" . $agency_loginId . "' and workassign.deallocationStatus='0'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe)) {
            $arr[] = $rr;
        }
        return $arr;
    }
    function getAvailableWorkersForJob($salaryId)
    {
        $query = "select worker.aadhaar,worker.workerName,worker.dob,worker.gender,workassign.workAssignId,workassign.startDate,workassign.days,salary.salary,salary.work from worker inner join agency on worker.agency_loginId=agency.loginId inner join workassign on workassign.worker_loginId=worker.loginId and workassign.deallocationStatus='0' inner join salary on salary.salaryId=workassign.salaryId  where salary.salaryId='" . $salaryId . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe)) {
            $arr[] = $rr;
        }
        return $arr;
    }
    function getWorkByWorker($worker_loginId)
    {
        $query = "select salary.work,workassign.days,workassign.startDate,salary.salary from salary inner join workassign on salary.salaryId=workassign.salaryId inner join worker on workassign.worker_loginId=worker.loginId where worker.loginId='" . $worker_loginId . "' and workassign.deallocationStatus='0'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe)) {
            $arr[] = $rr;
        }
        return $arr;
    }
    function removeWorkByAgency($workAssignId)
    {
        $query = "delete from workassign where workAssignId='" . $workAssignId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Work Allocation Deleted Successfully')</script>";
        else
            echo "<script>alert('Work Allocation Not Deleted')</script>";
    }
    function paymentByWorker($worker_loginId, $schemeAmnt, $cardHolderName, $cardNo, $expDate, $cvv, $schemeApplyId)
    {
        $query1 = "select insuranceagency.contactNo from insuranceagency inner join scheme on insuranceagency.loginId=scheme.insAg_loginId inner join schemeapply on schemeapply.schemeId=scheme.schemeId where schemeApplyId='" . $schemeApplyId . "'";
        $exe1 = mysql_query($query1);
        $contactNo = null;
        while ($y = mysql_fetch_array($exe1))
            $contactNo = $y['contactNo'];
        $query2 = "select totalAmount from bank where contactNo='" . $contactNo . "'";
        $exe2 = mysql_query($query2);
        $insAgTotalAmount = null;
        while ($y = mysql_fetch_array($exe2))
            $insAgTotalAmount = $y['totalAmount'];
        if ($insAgTotalAmount == null)
            echo "<script>alert('Insurance Agency Doesnot Have Bank Account')</script>";
        else {
            $query3 = "select totalAmount from bank where cvv='" . $cvv . "' and cardNo='" . $cardNo . "'";
            $exe3 = mysql_query($query3);
            $totalAmount = null;
            while ($y = mysql_fetch_array($exe3))
                $totalAmount = $y['totalAmount'];
            if ($totalAmount == null)
                echo "<script>alert('CVV and Card Number Match Does Not Exist')</script>";
            else {
                $totalAmount = $totalAmount - $schemeAmnt;
                $insAgTotalAmount = $insAgTotalAmount + $schemeAmnt;
                $query4 = "update bank set totalAmount='" . $totalAmount . "' where cardNo='" . $cardNo . "'";
                $exe4 = mysql_query($query4);
                $query5 = "update bank set totalAmount='" . $insAgTotalAmount . "' where contactNo='" . $contactNo . "'";
                $exe5 = mysql_query($query5);
                $currentDate = date('Y-m-d');
                $query6 = "insert into payment(cardHolderName,cardNo,cvv,expDate,amount,loginId,currentDate,schemeApplyId) values('" . $cardHolderName . "','" . $cardNo . "','" . $cvv . "','" . $expDate . "','" . $schemeAmnt . "','" . $worker_loginId . "','" . $currentDate . "','" . $schemeApplyId . "')";
                $exe6 = mysql_query($query6);
                if ($exe4 && $exe5 && $exe6)
                    echo "<script>alert('Payment Successfull')</script>";
                else
                    echo "<script>alert('Payment Unsuccessful')</script>";
            }
        }
    }
    function isAnnualAmountPaid($schemeApplyId, $year)
    {
        $query = "select paymentId from payment where schemeApplyId='" . $schemeApplyId . "' and YEAR(currentDate)='" . $year . "'";
        $exe = mysql_query($query);
        $paymentId = null;
        while ($rr = mysql_fetch_array($exe)) {
            $paymentId = $rr['paymentId'];
        }
        return $paymentId;
    }
    function paymentCount($schemeApplyId)
    {
        $query = "select count(paymentId) as paymentCount from payment where schemeApplyId='" . $schemeApplyId . "'  and loginId=(select worker_loginId from schemeApply where schemeApplyId='" . $schemeApplyId . "')";
        $exe = mysql_query($query);
        $paymentCount = null;
        while ($rr = mysql_fetch_array($exe)) {
            $paymentCount = $rr['paymentCount'];
        }
        return $paymentCount;
    }
    function agencyPassWorkerDeathToLabourCommission($worker_loginId)
    {

        $query = "update worker set deathPassingStatus='1' where loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Death Case Passed to Labour Commission Successfully')</script>";
        else
            echo "<script>alert('Death Case Passing Unsuccessfull')</script>";
    }
    function getDeathPassedWorkersByLabourCommission()
    {
        $query = "select worker.*,agency.agencyName from worker inner join agency on agency.loginId=worker.agency_loginId where not deathPassingStatus='0'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getDeathPassedWorkersByPoliceStation($id)
    {
        $query = "select worker.*,agency.agencyName from worker inner join agency on agency.loginId=worker.agency_loginId inner join policestation on worker.pincode=policestation.pincode where worker.deathPassingStatus='2' and policestation.loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function labourCommissionPassWorkerDeathToPolice($worker_loginId)
    {
        $query = "update worker set deathPassingStatus='2' where loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Death Case Passed to Police Station Successfully')</script>";
        else
            echo "<script>alert('Death Case Passing Unsuccessfull')</script>";
    }
    function getPaymetDetailsOfSchemeApply($schemeApplyId)
    {
        $query = "select *,year(currentDate) as year,substr(cardNo,-4) as cardNo from payment where schemeApplyId='" . $schemeApplyId . "' and loginId=(select worker_loginId from schemeApply where schemeApplyId='" . $schemeApplyId . "')";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;

    }
    function getTotalPaymentDetailsOfSchemeApply($schemeApplyId)
    {
        $query = "select scheme.schemeAmnt,sum(payment.amount) as totalAmntPaid,scheme.validity from payment inner join schemeapply on schemeapply.schemeApplyId=payment.schemeApplyId inner join scheme on scheme.schemeId=schemeApply.schemeId where schemeapply.schemeApplyId='" . $schemeApplyId . "' and payment.loginId=(select worker_loginId from schemeApply where schemeApplyId='" . $schemeApplyId . "')";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function registerComplaint($subject, $content, $worker_loginId)
    {
        $currentDate = date('Y-m-d');
        $query = "insert into complaint(subject,content,worker_loginId,currentDate) values('" . $subject . "','" . $content . "','" . $worker_loginId . "','" . $currentDate . "')";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Complaint Sent Successfull')</script>";
        else
            echo "<script>alert('Complaint Not Sent')</scirpt>";
    }
    function getAllComplaints()
    {
        $query = "select complaint.*,worker.workerName,worker.aadhaar,agency.agencyName,login.email from complaint inner join worker on worker.loginId=complaint.worker_loginId inner join agency on agency.loginId=worker.agency_loginId inner join login on login.loginId=worker.loginId";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getActiveComplaints()
    {
        $query = "select complaint.*,worker.workerName,worker.aadhaar,agency.agencyName,login.email from complaint inner join worker on worker.loginId=complaint.worker_loginId inner join agency on agency.loginId=worker.agency_loginId inner join login on login.loginId=worker.loginId where complaint.adminReply='' order by complaint.currentDate desc";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function giveReplyToComplaint($adminReply, $complaintId)
    {
        $query = "update complaint set adminReply='" . $adminReply . "' where complaintId='" . $complaintId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Response Sent Successfully')</script>";
        else
            echo "<script>alert('Response Unsuccessfull')</script>";
    }
    function viewInsuranceClaims($id)
    {
        $query = "select worker.workerName,worker.aadhaar,worker.loginId as wlogid,worker.photo,agency.agencyName,scheme.schemeCat,scheme.schemeName,scheme.schemeAmnt,scheme.validity,schemeapply.schemeApplyId,schemeapply.currentDate,schemeapply.schemeStatus,schemeapply.insuranceCard,schemeapply.claimStatus,insuranceclaim.medicalReport from schemeapply inner join worker on schemeapply.worker_loginId=worker.loginId inner join scheme on schemeapply.schemeId=scheme.schemeId inner join agency on worker.agency_loginId=agency.loginId inner join insuranceagency on scheme.insAg_loginId=insuranceagency.loginId inner join insuranceclaim on insuranceclaim.schemeApplyId=schemeapply.schemeApplyId where insuranceagency.loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function deleteInsuranceClaim($schemeApplyId)
    {
        $query = "delete from insuranceclaim where schemeApplyId='" . $schemeApplyId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Claim Deleted Successfully')</script>";
        else
            echo "<script>alert('Cannot Delete Claim')</script>";
    }
    function getClaimDetailsofScheme($schemeApplyId)
    {
        $query = "select * from insuranceclaim where schemeApplyId='" . $schemeApplyId . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function paymentByInsuranceAgency($insAg_loginId, $amount, $cardHolderName, $cardNo, $expDate, $cvv, $schemeApplyId)
    {
        $query1 = "select worker.contactNo from worker inner join schemeapply on schemeapply.worker_loginId=worker.loginId where schemeApplyId='" . $schemeApplyId . "'";
        $exe1 = mysql_query($query1);
        $contactNo = null;
        while ($y = mysql_fetch_array($exe1))
            $contactNo = $y['contactNo'];
        $query2 = "select totalAmount from bank where contactNo='" . $contactNo . "'";
        $exe2 = mysql_query($query2);
        $workerTotalAmount = null;
        while ($y = mysql_fetch_array($exe2))
            $workerTotalAmount = $y['totalAmount'];
        if ($workerTotalAmount == null)
            echo "<script>alert('Worker Doesnot Have Bank Account')</script>";
        else {
            $query3 = "select totalAmount from bank where cvv='" . $cvv . "' and cardNo='" . $cardNo . "'";
            $exe3 = mysql_query($query3);
            $totalAmount = null;
            while ($y = mysql_fetch_array($exe3))
                $totalAmount = $y['totalAmount'];
            if ($totalAmount == null)
                echo "<script>alert('CVV and Card Number Match Does Not Exist')</script>";
            else {
                $totalAmount = $totalAmount - $amount;
                $workerTotalAmount = $workerTotalAmount + $amount;
                $query4 = "update bank set totalAmount='" . $totalAmount . "' where cardNo='" . $cardNo . "'";
                $exe4 = mysql_query($query4);
                $query5 = "update bank set totalAmount='" . $workerTotalAmount . "' where contactNo='" . $contactNo . "'";
                $exe5 = mysql_query($query5);
                $currentDate = date('Y-m-d');
                $query6 = "insert into payment(cardHolderName,cardNo,cvv,expDate,amount,loginId,currentDate,schemeApplyId) values('" . $cardHolderName . "','" . $cardNo . "','" . $cvv . "','" . $expDate . "','" . $amount . "','" . $insAg_loginId . "','" . $currentDate . "','" . $schemeApplyId . "')";
                $exe6 = mysql_query($query6);
                $query7 = "update schemeapply set claimStatus='1' where schemeApplyId='" . $schemeApplyId . "'";
                $exe7 = mysql_query($query7);
                if ($exe4 && $exe5 && $exe6 && $exe7)
                    echo "<script>alert('Payment Successfull')</script>";
                else
                    echo "<script>alert('Payment Unsuccessful')</script>";
            }
        }
    }
    function imagePathOfWorker($id)
    {
        $query = "select photo from worker where loginId='" . $id . "'";
        $exe = mysql_query($query);
        $photo = null;
        while ($rr = mysql_fetch_array($exe))
            $photo = $rr['photo'];
        return "photos/$id/$photo";
    }
    function getClaimedSchemesByWorker($worker_loginId)
    {
        $query = "select schemeApply.schemeApplyId,scheme.insAg_loginId,scheme.schemeCat, scheme.schemeName, scheme.schemeAmnt, scheme.validity, insuranceagency.insAgName, insuranceclaim.medicalReport, schemeapply.currentDate as apDate, insuranceclaim.currentDate as clDate, payment.currentDate as crDate from schemeapply inner join scheme on schemeapply.schemeId = scheme.schemeId inner join insuranceagency on insuranceagency.loginId = scheme.insAg_loginId inner join insuranceclaim on insuranceclaim.schemeApplyId = schemeapply.schemeApplyId inner join payment on payment.loginId = scheme.insAg_loginId where schemeapply.claimStatus = '1' and schemeapply.worker_loginId = '" . $worker_loginId . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        for ($i = 0; $i < count($arr); $i++) {
            $insAg_loginId = $arr[$i]['insAg_loginId'];
            $schemeApplyId = $arr[$i]['schemeApplyId'];
            $query1 = "select sum(amount) as paidAmount from payment where loginId='" . $worker_loginId . "' and schemeApplyId='" . $schemeApplyId . "'";
            $exe1 = mysql_query($query1);
            $paidAmount = null;
            while ($rr1 = mysql_fetch_array($exe1))
                $paidAmount = $rr1['paidAmount'];
            $query2 = "select sum(amount) as receivedAmount from payment where loginId='" . $insAg_loginId . "' and schemeApplyId='" . $schemeApplyId . "'";
            $exe2 = mysql_query($query2);
            $receivedAmount = null;
            while ($rr2 = mysql_fetch_array($exe2))
                $receivedAmount = $rr2['receivedAmount'];
            $arr[$i]['paidAmount'] = $paidAmount;
            $arr[$i]['receivedAmount'] = $receivedAmount;
        }
        return $arr;
    }
    function getClaimedSchemesByInsAg($insAg_loginId)
    {
        $query = "select schemeapply.schemeApplyId, schemeapply.worker_loginId, worker.workerName, worker.aadhaar, scheme.schemeCat,scheme.schemeName, scheme.schemeAmnt, scheme.validity, insuranceclaim.medicalReport,schemeapply.currentDate as apDate, insuranceclaim.currentDate as clDate, payment.currentDate as crDate,payment.cardHolderName,substr(payment.cardNo,-4) as cardNo from payment inner join schemeapply on payment.schemeApplyId = schemeapply.schemeApplyId inner join worker ON schemeapply.worker_loginId = worker.loginId inner join scheme on scheme.schemeId = schemeapply.schemeId inner join insuranceclaim on insuranceclaim.schemeApplyId = schemeapply.schemeApplyId where payment.loginId = '" . $insAg_loginId . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        for ($i = 0; $i < count($arr); $i++) {
            $worker_loginId = $arr[$i]['worker_loginId'];
            $schemeApplyId = $arr[$i]['schemeApplyId'];
            $query1 = "select sum(amount) as paidAmount from payment where loginId='" . $insAg_loginId . "' and schemeApplyId='" . $schemeApplyId . "'";
            $exe1 = mysql_query($query1);
            $paidAmount = null;
            while ($rr1 = mysql_fetch_array($exe1))
                $paidAmount = $rr1['paidAmount'];
            $query2 = "select sum(amount) as receivedAmount from payment where loginId='" . $worker_loginId . "' and schemeApplyId='" . $schemeApplyId . "'";
            $exe2 = mysql_query($query2);
            $receivedAmount = null;
            while ($rr2 = mysql_fetch_array($exe2))
                $receivedAmount = $rr2['receivedAmount'];
            $arr[$i]['paidAmount'] = $paidAmount;
            $arr[$i]['receivedAmount'] = $receivedAmount;
        }
        return $arr;
    }
    function workerViewResponses($worker_loginId)
    {
        $query = "select * from complaint where worker_loginId='" . $worker_loginId . "' and not adminReply='' order by currentDate desc";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function agencyScheduleVideoCall($scheduledDate, $scheduledTime, $worker_loginId, $agency_loginId)
    {
        $currentDate = date('Y-m-d');
        $currentTime = date('H:i:s');
        $uniqueId = date('YmdHis');
        $videoUrl = "http://localhost/MigrantLabours/agencyVideo.php?worker_loginId=$worker_loginId#$uniqueId";
        $query = "insert into video(agency_loginId,worker_loginId,currentDate,currentTime,scheduledDate,scheduledTime,url) values('" . $agency_loginId . "','" . $worker_loginId . "','" . $currentDate . "','" . $currentTime . "','" . $scheduledDate . "','" . $scheduledTime . "','" . $videoUrl . "')";
        $exe = mysql_query($query);
        $scheduledDate = date('j F, Y', strtotime($scheduledDate));
        $dateTime = new DateTime($scheduledTime);
        $scheduledTime = $dateTime->format('h:i a');

        // error_reporting(E_ALL ^ E_NOTICE);
        // $username = "sojinraju";
        // $password = "softzane@777";
        $query1 = "select agencyName from agency where loginId='" . $agency_loginId . "'";
        $exe1 = mysql_query($query1);
        $agency = null;
        while ($rr = mysql_fetch_array($exe1))
            $agency = $rr['agencyName'];
        $query2 = "select workerName,contactNo from worker where loginId='" . $worker_loginId . "'";
        $exe2 = mysql_query($query2);
        $mobile_number = null;
        $workerName = null;
        while ($rr = mysql_fetch_array($exe2)) {
            $mobile_number = $rr['contactNo'];
            $workerName = $rr['workerName'];
        }
        $message = "Dear $workerName, Your Video Conferencing with $agency is scheduled on $scheduledDate at $scheduledTime. To join use Login ID as $worker_loginId and Passcode as $uniqueId";

        // $url = "https://login.bulksmsgateway.in/textmobilesmsapi.php?user=" . urlencode($username) . "&password=" . urlencode($password) . "&mobile=" . urlencode($mobile_number) . "&message=" . urlencode($message) . "&type=" . urlencode('3');
        // echo "<script type='text/javascript'> 
        //    window.open('" . $url . "', '_blank'); 
        // </script>";
        // $ch = curl_init($url);

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // $curl_scraped_page = curl_exec($ch);

        // curl_close($ch);


        if ($exe)
            echo "<script>alert('Schedule Added Successfully')</script>";
        else
            echo "<script>alert('Schedule Not Added')</script>";
        return $message;
    }

    function removeSchedule($worker_loginId)
    {
        $query = "delete from video where worker_loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        if ($exe)
            echo "<script>alert('Schedule and Call Ended Successfully')</script>";
        else
            echo "<script>alert('Cannot Delete Schedule')</script>";
    }

    function loginWithLoginID($loginId, $passcode)
    {
        $query = "select url,scheduledDate,scheduledTime from video where worker_loginId='" . $loginId . "' and substr(url,-14)='" . $passcode . "'";
        $exe = mysql_query($query);
        $url = null;
        $time = null;
        while ($rr = mysql_fetch_array($exe)) {
            $url = $rr['url'];
            $date = $rr['scheduledDate'];
            $time = $rr['scheduledTime'];
        }
        if ($url == null)
            echo "<script>alert('Please Enter Correct Details')</script>";
        else
            if (date('Y-m-d H:i:s') >= "$date $time")
                header("location:$url");
            else {
                $date = date('F j, Y', strtotime($date));
                $time = date('h:i A', strtotime($time));
                echo "<script>alert('Please Come Back on $date at $time')</script>";
            }

    }

    // function video($url, $id)
    // {
    //     $qry = "update video set url='" . $url . "' where worker_loginId='" . $id . "'";
    //     $ex = mysql_query($qry);
    // }
    function getWorkersByAgencyForVideo($id)
    {
        $query = "select worker.*,worker.loginId as wlogid,video.*,login.status from worker inner join login on login.loginId=worker.loginId left join video on worker.loginId=video.worker_loginId where worker.agency_loginId='" . $id . "'";
        // $query = "select *,worker.loginId as wlogid,worker.address as address,worker.district as district,worker.city as city,worker.pincode as pincode,worker.contactNo as contactNo from worker inner join login on login.loginId=worker.loginId inner join agency on agency.loginId=worker.agency_loginId where worker.agency_loginId='" . $id . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function getVideoDetailsOfWorker($worker_loginId)
    {
        $query = "select * from video where worker_loginId='" . $worker_loginId . "'";
        $exe = mysql_query($query);
        $arr = array();
        while ($rr = mysql_fetch_array($exe))
            $arr[] = $rr;
        return $arr;
    }
    function updatePassword($id, $password, $npassword, $cpassword)
    {
        $enc1 = md5($password);
        $query1 = "select loginId from login where loginId='" . $id . "' and password='" . $enc1 . "'";
        $loginId = null;
        $exe1 = mysql_query($query1);
        if ($rr = mysql_fetch_array($exe1))
            $loginId = $rr['loginId'];
        if ($loginId == null)
            echo "<script>alert('Password is incorrect')</script>";
        else {
            if ($npassword != $cpassword)
                echo "<script>alert('Passwords does not match')</script>";
            else {
                $enc2 = md5($cpassword);
                $query2 = "update login set password='" . $enc2 . "' where loginId='" . $loginId . "'";
                $exe2 = mysql_query($query2);
                if ($exe2)
                    echo "<script>alert('Password Changed Successfully')</script>";
                else
                    echo "<script>alert('Password not Changed')</script>";
            }
        }
    }
}
?>