<?php /* Smarty version 2.6.26, created on 2023-05-01 12:51:49
         compiled from labourCommissionPassWorkerDeath.tpl */ ?>
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
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Pincode</th>
                                <th>Aadhaar</th>
                                <th>Agency Name</th>
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
                                        <img src="photos/<?php echo $this->_tpl_vars['d']['loginId']; ?>
/<?php echo $this->_tpl_vars['d']['photo']; ?>
"
                                            class="avatar avatar-xxl bradius cover-image">
                                    </td>
                                    <td><?php echo $this->_tpl_vars['d']['dob']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['aadhaar']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['agencyName']; ?>
</td>
                                    <td>
                                        <a href="Death Reports/<?php echo $this->_tpl_vars['d']['loginId']; ?>
/<?php echo $this->_tpl_vars['d']['deathReport']; ?>
" download
                                            class="btn btn-secondary w-lg me-2">Download Death Report</a>
                                        <?php if ($this->_tpl_vars['d']['deathPassingStatus'] == '1'): ?>
                                            <a href="labourCommissionPassWorkerDeathToPolice.php?worker_loginId=<?php echo $this->_tpl_vars['d']['loginId']; ?>
"
                                                class="btn btn-success w-lg">Pass to PS</a>
                                        <?php else: ?>
                                            <button class="btn btn-outline-success disabled w-lg">Passed to PS</button>
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