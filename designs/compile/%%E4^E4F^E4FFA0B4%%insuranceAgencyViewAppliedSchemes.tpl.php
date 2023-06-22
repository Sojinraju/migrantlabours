<?php /* Smarty version 2.6.26, created on 2023-05-11 11:28:27
         compiled from insuranceAgencyViewAppliedSchemes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'insuranceAgencyViewAppliedSchemes.tpl', 52, false),)), $this); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">View Applied Schemes</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Applied Schemes</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Applied Schemes to Workers</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker Name</th>
                                <th>Worker Photo</th>
                                <th>Worker Address</th>
                                <th>DOB</th>
                                <th>Worker Phone</th>
                                <th>Agency Name</th>
                                <th>Agency Phone</th>
                                <th>Scheme Category</th>
                                <th>Scheme Name</th>
                                <th>Scheme Amount</th>
                                <th>Applied Date</th>
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
                                    <td> <img src="photos/<?php echo $this->_tpl_vars['d']['wlogid']; ?>
/<?php echo $this->_tpl_vars['d']['photo']; ?>
"
                                            class="avatar avatar-xxl bradius cover-image"></td>
                                    <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['dob']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['contactNo']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['agencyName']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['agency_contactNo']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['schemeCat']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['schemeName']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['schemeAmnt']; ?>
</td>
                                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['d']['currentDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
</td>
                                    <td>
                                        <?php if ($this->_tpl_vars['d']['claimStatus'] == '0'): ?>
                                            <?php if ($this->_tpl_vars['d']['schemeStatus'] == '2'): ?>
                                                <a href="insuranceAgencyApproveScheme.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                                    class="w-lg btn btn-success me-2">Accept</a>
                                                <button class="w-lg btn btn-outline-danger disabled me-2">Rejected</button>
                                            <?php else: ?>
                                                <?php if ($this->_tpl_vars['d']['schemeStatus'] == '1'): ?>
                                                    <button class="w-lg btn btn-outline-success me-2 disabled">Accepted</button>
                                                    <a href="insuranceAgencyRejectScheme.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                                        class="w-lg btn btn-danger me-2">Reject</a>
                                                <?php else: ?>
                                                    <a href="insuranceAgencyApproveScheme.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                                        class="w-lg btn btn-success me-2">Accept</a>
                                                    <a href="insuranceAgencyRejectScheme.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                                        class="w-lg btn btn-danger me-2">Reject</a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <button class="w-lg btn btn-outline-success me-2 disabled">&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Already Claimed&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                        <?php endif; ?>
                                        <?php if ($this->_tpl_vars['d']['schemeStatus'] == '1'): ?>
                                            <?php if ($this->_tpl_vars['d']['insuranceCard'] == null): ?>
                                                <a href="insuranceAgencyUploadCard.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                                    class="w-lg btn btn-primary me-2">Upload Ins. Card</a>
                                            <?php else: ?>
                                                <a href="insuranceAgencyUploadCard.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                                    class="w-lg btn btn-warning me-2">Reupload Ins. Card</a>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <button class="w-lg btn btn-outline-primary disabled me-2">Not Available</button>
                                        <?php endif; ?>
                                        <a href="insuranceAgencyViewPaymentDetails.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                            class="btn w-lg btn-warning bg-warning-gradient warning1 me-4">Payment
                                            Details</a>
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