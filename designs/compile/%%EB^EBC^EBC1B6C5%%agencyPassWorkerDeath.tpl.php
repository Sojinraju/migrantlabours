<?php /* Smarty version 2.6.26, created on 2023-05-01 05:19:57
         compiled from agencyPassWorkerDeath.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Death Case Passing</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Death Case Passing</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li> -->
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Death Status</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker Name</th>
                                <th>Photo</th>
                                <th>DOB</th>
                                <th>Pincode</th>
                                <th>Aadhaar</th>
                                <th>Status</th>
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
                                    <td><?php echo $this->_tpl_vars['d']['dob']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['aadhaar']; ?>
</td>
                                    <td>
                                        <?php if ($this->_tpl_vars['d']['deathReport'] == null): ?>
                                            Alive
                                        <?php else: ?>
                                            Died
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($this->_tpl_vars['d']['deathReport'] == null): ?>
                                            <a href="agencyUploadWorkerDeathReport.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                class="btn btn-primary w-lg me-2">Upload DR</a>
                                        <?php else: ?>
                                            <a href="agencyUploadWorkerDeathReport.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                class="btn btn-orange w-lg me-2">Reupload DR</a>
                                        <?php endif; ?>

                                        <?php if ($this->_tpl_vars['d']['deathReport'] == null): ?>
                                            <button class="btn btn-success disabled w-lg">Pass to LC</button>
                                        <?php else: ?>
                                            <?php if ($this->_tpl_vars['d']['deathPassingStatus'] == '0'): ?>
                                                <a href="agencyPassWorkerDeathToLabourCommission.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                    class="btn btn-success w-lg">Pass to LC</a>
                                            <?php else: ?>
                                                <button class="btn btn-outline-success disabled w-lg">Passed to LC</button>
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