<?php /* Smarty version 2.6.26, created on 2023-05-02 23:16:32
         compiled from insuranceAgencyViewPaymentDetails.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Payment Details</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active"><a href="insuranceAgencyViewAppliedSchemes.php">View Applied Schemes</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Payment Details</li>

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
                <h3 class="card-title">Payment Details</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Card Holder Name</th>
                                <th>Card No.</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                <tr>
                                    <td><?php echo $this->_tpl_vars['d']['year']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['cardHolderName']; ?>
</td>
                                    <td>XXXX XXXX XXXX <?php echo $this->_tpl_vars['d']['cardNo']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['amount']; ?>
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