<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 2) {

$id = $_COOKIE['id'];
$data = $obj->getApprovedWorkersByAgency($id);
$smartyObj->assign('data', $data);
$smartyObj->display('agencyHeader.tpl');
$smartyObj->display('agencyDailyAttendanceWorkers.tpl');
if (isset($_POST['hide']) and ($_POST['hide'] == 'c')) {
    if (isset($_POST['worker_loginId']) and ($_POST['worker_loginId'] != null)) {
        if (isset($_POST['date']) and ($_POST['date'] != null)) {
            $date = $_POST['date'];
            $worker_loginId = $_POST['worker_loginId'];
            $attendance = $obj->getDailyAttendance($worker_loginId, $date);
            foreach ($attendance as $a) {
                $workerId = $a['workerId'];
                $workerName = $a['workerName'];
                $attendance = $a['attendance'];
            }
            echo "<script>document.getElementById('date').value = '$date';</script>";
            echo "<script>
            var dropdown = document.getElementById('worker');
			var selectedValue = '$worker_loginId';
			for (var i = 0; i < dropdown.options.length; i++) {
				if (dropdown.options[i].value == selectedValue) {
					dropdown.selectedIndex = i;
					break;
				}
			}
            </script>";
            echo "<div class='card'>
            <div class='card-header'>
              <h4 class='card-title'>Attendance Status</h4>
            </div>
            <div class='card-body'>
              <div class='row mb-4'>
                <label class='col-md-3 form-label'>Worker ID</label>
                <div class='col-md-9'>
                  <input type='text' class='form-control' readonly value='$workerId' />
                </div>
              </div>
              <div class='row mb-4'>
                <label class='col-md-3 form-label'>Worker Name</label>
                <div class='col-md-9'>
                  <input type='text' class='form-control' readonly value='$workerName' />
                </div>
              </div>
              <div class='row mb-4'>
                <label class='col-md-3 form-label'>Date</label>
                <div class='col-md-9'>
                  <input type='date' class='form-control' readonly value='$date' />
                </div>
              </div>
              <div class='row'>
                <label class='col-md-3 form-label'>Status</label>
                <div class='col-md-9'>
                  <div class='d-grid' id='attendance'>";
            if ($attendance == 'Present') {
                echo "<button class='btn btn-success-light disabled'>Present</button>";
            } elseif ($attendance == 'Absent') {
                echo "<button class='btn btn-danger-light disabled'>Absent</button>";
            } else {
                echo "<button class='btn btn-warning-light disabled'>Not Available</button>";
            }
            echo "</div>
                </div>
              </div>
            </div>
          </div>";
        }
    }
}
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>