<?php /* Smarty version 2.6.26, created on 2023-04-10 02:26:36
         compiled from agencyMonthlyAttendanceWorkers.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Monthly Attendance</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Workers</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Attendance</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Monthly Attendance
            </li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Select Worker and Month</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="d">
            <div class="row">
                <label class="col-md-3 form-label">Worker</label>
                <div class="col-md-9">
                    <div class="form-group">
                        <select class="form-control form-select select2" data-placeholder="Choose Worker"
                            name="worker_loginId" required id="worker">
                            <option></option>
                            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
                                <option value="<?php echo $this->_tpl_vars['e']['wlogid']; ?>
"><?php echo $this->_tpl_vars['e']['workerId']; ?>
. <?php echo $this->_tpl_vars['e']['workerName']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-md-3 form-label">Month</label>
                <div class="col-md-9">
                    <div class="form-group">
                        <select class="form-control form-select select2" data-placeholder="Choose Month" name="month"
                            required id="month">
                            <option></option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <input type="submit" class="btn btn-primary" value="View Status">
                </div>
            </div>
        </form>
    </div>
</div>