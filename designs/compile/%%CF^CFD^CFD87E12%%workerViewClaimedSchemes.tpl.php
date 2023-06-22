<?php /* Smarty version 2.6.26, created on 2023-05-10 12:01:26
         compiled from workerViewClaimedSchemes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'workerViewClaimedSchemes.tpl', 44, false),)), $this); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Claimed Schemes</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance Schemes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Claimed Schemes</li>
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
                                <th>Scheme Category</th>
                                <th>Scheme Name</th>
                                <th>Scheme Amount</th>
                                <th>Validity</th>
                                <th>Insurance Agency</th>
                                <th>Claim Type</th>
                                <th>Applied Date</th>
                                <th>Claimed Date</th>
                                <th>Credited Date</th>
                                <th>Paid Amount</th>
                                <th>Received Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                <td><?php echo $this->_tpl_vars['d']['schemeCat']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['d']['schemeName']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['d']['schemeAmnt']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['d']['validity']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['d']['insAgName']; ?>
</td>
                                <td><?php if ($this->_tpl_vars['d']['medicalReport'] == ''): ?>Normal<?php else: ?>Immediate<?php endif; ?></td>
                                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['d']['apDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
</td>
                                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['d']['clDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
</td>
                                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['d']['crDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
</td>
                                <td><?php echo $this->_tpl_vars['d']['paidAmount']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['d']['receivedAmount']; ?>
</td>
                            <?php endforeach; endif; unset($_from); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>