<?php /* Smarty version 2.6.26, created on 2023-04-15 05:10:31
         compiled from labourCommissionViewWorkers.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Details Passing</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Details Passing</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Workers Details</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
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
                                <th>Agency Name</th>
                                <th>Agency Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                <tr>
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
                                    <td><?php echo $this->_tpl_vars['d']['agencyName']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['agency_contactNo']; ?>
</td>
                                    <td>
                                        <?php if ($this->_tpl_vars['d']['passingStatus'] == '1'): ?>
                                            <a href="labourCommissionPassWorkerToPoliceStation.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                class="w-lg btn btn-primary me-2">Pass to PS</a>
                                        <?php else: ?>
                                            <button class="w-lg btn btn-outline-primary disabled me-2">Passed to PS</button>
                                        <?php endif; ?>
                                        <?php if ($this->_tpl_vars['d']['crimeReport'] == null): ?>
                                            <button class="w-lg btn btn-outline-secondary disabled me-2">WCR not
                                                available</button>
                                            <button class="w-lg btn btn-primary disabled me-2">Pass to
                                                Agency</button>
                                        <?php else: ?>
                                            <a href="Crime Reports/<?php echo $this->_tpl_vars['d']['wlogid']; ?>
/<?php echo $this->_tpl_vars['d']['crimeReport']; ?>
" download
                                                class="w-lg btn btn-secondary me-2">Download
                                                WCR</a>
                                            <?php if ($this->_tpl_vars['d']['passingStatus'] == '3'): ?>
                                                <a href="" class="w-lg btn btn-outline-primary disabled me-2">Passed to Agency</a>
                                            <?php else: ?>
                                                <a href="labourCommissionPassWorkerToAgency.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                    class="w-lg btn btn-primary me-2">Pass to Agency</a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($this->_tpl_vars['d']['workerCard'] == null): ?>
                                            <a href="labourCommissionGenerateWPC.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                class="w-lg btn btn-success">Generate WPC</a>
                                        <?php else: ?>
                                            <a href="labourCommissionGenerateWPC.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                class="w-lg btn btn-warning">Re-generate WPC</a>
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