<?php /* Smarty version 2.6.26, created on 2023-05-10 12:42:16
         compiled from insuranceAgencyViewInsuranceClaim.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'insuranceAgencyViewInsuranceClaim.tpl', 47, false),)), $this); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Insurance Claims</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Insurance Claims</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Insurance Claims</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker Name</th>
                                <th>Worker Photo</th>
                                <th>Aadhaar</th>
                                <th>Agency Name</th>
                                <th>Scheme Category</th>
                                <th>Scheme Name</th>
                                <th>Scheme Amount</th>
                                <th>Applied Date</th>
                                <th>Validity</th>
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
                                    <td><?php echo $this->_tpl_vars['d']['aadhaar']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['agencyName']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['schemeCat']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['schemeName']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['schemeAmnt']; ?>
</td>
                                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['d']['currentDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['validity']; ?>
</td>
                                    <td>
                                        <a href="insuranceAgencyCancelInsuranceClaim.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                            class="btn btn-danger me-2">Reject</a>
                                        <?php if ($this->_tpl_vars['d']['claimStatus'] == '0'): ?>
                                            <a href="insuranceAgencyGrantClaim.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                                class="btn w-lg btn-warning bg-warning-gradient warning1">Check Details
                                                and Pay</a>
                                        <?php else: ?>
                                            <?php if ($this->_tpl_vars['d']['medicalReport'] == null): ?>
                                                <button class="btn w-lg btn-outline-warning disabled">&emsp;Claimed
                                                    (Normal)&emsp;</button>
                                            <?php else: ?>
                                                <button class="btn w-lg btn-outline-warning disabled">Claimed
                                                    (Immediate)</button>
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