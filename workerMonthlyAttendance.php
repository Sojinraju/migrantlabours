<?php
include_once("settings\settings.php");
include_once("classes\userclass.php");
$obj = new userclass();
session_start();
if (isset($_COOKIE['logined']) && $_COOKIE['logined'] == 1 && $_COOKIE['userType'] == 3) {

$smartyObj->display('workerHeader.tpl');
$smartyObj->display('workerMonthlyAttendance.tpl');
if (isset($_POST['hide']) and ($_POST['hide'] == 'd')) {
    if (isset($_POST['month']) and ($_POST['month'] != null)) {
        $month = $_POST['month'];
        $monthName = date('F', mktime(0, 0, 0, $month, 10));
        $worker_loginId = $_COOKIE['id'];
        $worker_details = $obj->workerEdit($worker_loginId);
        foreach ($worker_details as $w) {
            $workerId = $w['workerId'];
            $workerName = $w['workerName'];
        }
        echo "<script>
            var dropdown = document.getElementById('month');
			var selectedValue = '$month';
			for (var i = 0; i < dropdown.options.length; i++) {
				if (dropdown.options[i].value == selectedValue) {
					dropdown.selectedIndex = i;
					break;
				}
			}
            </script>";
        echo "<div class='card'>
            <div class='card-header'>
              <h4 class='card-title'>Monthly Attendance</h4>
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
                  <div class='row'>
                  <label class='col-md-3 form-label'>Month</label>
                  <div class='col-md-9'>
                  <input type='text' class='form-control' readonly value='$monthName' />
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class='card'>
    <div class='card-body'>
        <div class='table-responsive'>
            <table class='table table-bordered text-nowrap border-bottom' id='basic-datatable'>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Attendance Status</th>
                    </tr>
                </thead>
                <tbody>";

        $attendance = $obj->getMonthlyAttendance($worker_loginId, $month);
        foreach ($attendance as $a) {
            $currentDate = $a['currentDate'];
            $attendance = $a['attendance'];
            echo "<tr>
                <td>$currentDate</td>";
            if ($attendance == 'Present')
                echo "<td><div class='d-grid'><button class='btn btn-success-light disabled'>$attendance</button></div></td></tr>";
            else
                echo "<td><div class='d-grid'><button class='btn btn-danger-light disabled'>$attendance</button></div></td></tr>";
        }
        echo "</tbody>
            </table>
            </div>
            </div>
            </div>";
    }
}
$smartyObj->display('footer.tpl');
    
} else
    header("location:login.php");
?>