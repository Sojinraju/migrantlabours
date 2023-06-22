<?php /* Smarty version 2.6.26, created on 2023-05-09 06:42:04
         compiled from insuranceAgencyGrantClaim.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'insuranceAgencyGrantClaim.tpl', 79, false),)), $this); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Check Details and Pay</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active"><a
                    href="insuranceAgencyViewInsuranceClaim.php">Insurance Claims</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Check Details and Pay</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->


<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Scheme Details</div>
            </div>
            <div class="card-body">
                <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Scheme Amount Per Year</label>
                        <div class="col-md-9">
                            <input type="text" value="<?php echo $this->_tpl_vars['v']['schemeAmnt']; ?>
" class="form-control" readonly>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Scheme Validity</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['v']['validity']; ?>
 Year(s)" readonly>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Paid Amount</label>
                        <div class="col-md-9">
                            <?php if ($this->_tpl_vars['v']['totalAmntPaid'] == null): ?>
                                <input type="text" class="form-control" readonly value="0">
                            <?php else: ?>
                                <input type="text" class="form-control" readonly value="<?php echo $this->_tpl_vars['v']['totalAmntPaid']; ?>
">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Amount to be Paid</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['v']['schemeAmnt']*$this->_tpl_vars['v']['validity']-$this->_tpl_vars['v']['totalAmntPaid']; ?>
"
                                readonly>
                        </div>
                    </div>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Claim Details</div>
            </div>
            <div class="card-body">
                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Claim Type</label>
                        <div class="col-md-9">
                            <?php if ($this->_tpl_vars['d']['medicalReport'] == null): ?>
                                <input type="text" value="Normal Claim" class="form-control" readonly>
                            <?php else: ?>
                                <input type="text" value="Immediate Claim" class="form-control" readonly>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Claim Date</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" readonly
                                value="<?php echo ((is_array($_tmp=$this->_tpl_vars['d']['currentDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
">
                        </div>
                    </div>
                    <?php if ($this->_tpl_vars['d']['medicalReport'] != null): ?>
                        <div class="row">
                            <center><a href="Insurance Medical Reports/<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
/<?php echo $this->_tpl_vars['d']['medicalReport']; ?>
" download
                                    class="btn btn-secondary">Download Medical Report</a></center>
                        </div>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Payable Amount</div>
            </div>
            <div class="card-body">
                <form action="" method="post" class="form-horizontal">
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Enter Payable Amount</label>
                        <div class="col-md-9">
                            <input type="number" name="amount" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-0 mt-4 row justify-content-end">
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-primary" value="Pay" name="pay">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>