<?php /* Smarty version 2.6.26, created on 2023-05-10 10:01:22
         compiled from workerViewAppliedSchemes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'workerViewAppliedSchemes.tpl', 42, false),)), $this); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Applied Schemes</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance Schemes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Applied Schemes</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['d']):
?>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Scheme Details - <?php echo $this->_tpl_vars['k']+1; ?>
</h4>
        </div>
        <div class="card-body">
            <?php if ($this->_tpl_vars['d']['schemeApplyId'] == null): ?>
                Worker is currently not approved by any Scheme
            <?php else: ?>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Scheme Category</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo $this->_tpl_vars['d']['schemeCat']; ?>
" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Scheme Name</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo $this->_tpl_vars['d']['schemeName']; ?>
" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Scheme Amount</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo $this->_tpl_vars['d']['schemeAmnt']; ?>
" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Applied Date</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['d']['currentDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Validity</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo $this->_tpl_vars['d']['validity']; ?>
 Year(s)" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Details</label>
                    <div class="col-md-9">
                        <textarea class="form-control" readonly><?php echo $this->_tpl_vars['d']['schemeDetails']; ?>
</textarea>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Interest Rate</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo $this->_tpl_vars['d']['interestRate']; ?>
%" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Insurance Agency</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo $this->_tpl_vars['d']['insAgName']; ?>
" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <center>
                        <a href="Insurance Cards/<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
/<?php echo $this->_tpl_vars['d']['insuranceCard']; ?>
" download
                            class="btn btn-secondary me-4">Download Insurance Card</a>
                        <a href="workerViewPaymentDetails.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                            class="btn btn-warning bg-warning-gradient warning1 me-4">Payment Detials</a>
                        <?php if ($this->_tpl_vars['d']['claimStatus'] == '1'): ?>
                            <button class="w-lg btn btn-outline-info disabled">Claimed Successfully</button>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['d']['paymentCount'] == $this->_tpl_vars['d']['validity']): ?>
                                <button class="btn w-lg btn-outline-success disabled me-4">Full Amount Paid</button>
                                <?php if ($this->_tpl_vars['d']['insClaimId'] == null): ?>
                                    <a href="workerClaimInsurance.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
" class="w-lg btn btn-info">Claim
                                        Insurance</a>
                                <?php else: ?>
                                    <button class="w-lg btn btn-outline-info disabled">Claim Request Sent</button>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if ($this->_tpl_vars['d']['isAnnualAmountPaid'] == null): ?>
                                    <a href="workerPaymentAnnualAmount.php?schemeAmnt=<?php echo $this->_tpl_vars['d']['schemeAmnt']; ?>
&&schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                        class="w-lg btn btn-success me-4">Pay
                                        Annual Amount</a>
                                <?php else: ?>
                                    <button class="btn w-lg btn-outline-success disabled me-4">Annual Amount Paid</button>
                                <?php endif; ?>
                                <?php if ($this->_tpl_vars['d']['insClaimId'] == null): ?>
                                    <a href="workerImmediateClaimInsurance.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                        class="w-lg btn btn-warning">Immediate Claim</a>
                                <?php else: ?>
                                    <button class="w-lg btn btn-outline-warning disabled">Immediate Claim Request Sent</button>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </center>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; endif; unset($_from); ?>