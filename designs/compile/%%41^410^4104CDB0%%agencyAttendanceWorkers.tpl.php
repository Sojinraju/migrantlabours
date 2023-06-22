<?php /* Smarty version 2.6.26, created on 2023-05-08 06:19:44
         compiled from agencyAttendanceWorkers.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Mark Attendance</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Attendance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mark Attendance</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mark Attendance of Workers on <?php echo date('d-m-Y'); ?></h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker ID</th>
                                <th>Worker Name</th>
                                <th>Photo</th>
                                <th>Address</th>
                                <th>DOB</th>
                                <th>Street</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Pincode</th>
                                <th>Contact No.</th>
                                <th>Aadhaar</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                <tr>
                                    <td><?php echo $this->_tpl_vars['d']['workerId']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['workerName']; ?>
</td>
                                    <td>
                                        <img src="photos/<?php echo $this->_tpl_vars['d']['wlogid']; ?>
/<?php echo $this->_tpl_vars['d']['photo']; ?>
"
                                            class="avatar avatar-xxl bradius cover-image">
                                    </td>
                                    <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['dob']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['street']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['district']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['city']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['contactNo']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['aadhaar']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['email']; ?>
</td>
                                    <td>
                                        <?php if ($this->_tpl_vars['d']['attendance'] == NULL): ?>
                                            <a href="agencyPresentWorker.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                class=" btn w-lg btn-success me-2">Present</a>
                                            <a href="agencyAbsentWorker.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                class="btn w-lg btn-danger">Absent</a>
                                        <?php else: ?>
                                            <?php if ($this->_tpl_vars['d']['attendance'] == 'Present'): ?>agencyAttendanceWorkers
                                                <button class=" btn w-lg btn-outline-success disabled me-2">Marked Present</button>
                                                <a href="agencyToggleAttendanceWorker.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                    class="btn w-lg btn-danger">Absent</a>
                                            <?php else: ?>
                                                <a href="agencyToggleAttendanceWorker.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                    class=" btn w-lg btn-success me-2">Present</a>
                                                <button class="btn w-lg btn-outline-danger disabled">Marked Absent</button>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>