<?php /* Smarty version 2.6.26, created on 2023-05-10 09:56:23
         compiled from agencyViewAppliedSchemes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'agencyViewAppliedSchemes.tpl', 52, false),)), $this); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">View Applied Schemes</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
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
                                <th>Insurance Agency Name</th>
                                <th>Scheme Category</th>
                                <th>Scheme Name</th>
                                <th>Scheme Amount</th>
                                <th>Applied Date</th>
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
                                    <td><?php echo $this->_tpl_vars['d']['insAgName']; ?>
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
                                        <?php if ($this->_tpl_vars['d']['schemeStatus'] == '0'): ?>Pending<?php else: ?><?php if ($this->_tpl_vars['d']['schemeStatus'] == '1'): ?>Approved<?php else: ?>Rejected<?php endif; ?><?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($this->_tpl_vars['d']['claimStatus'] == '0'): ?>
                                            <a href="agencyCancelAppliedScheme.php?schemeApplyId=<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
"
                                                class="btn btn-danger me-2">&nbsp;Cancel&nbsp;</a>
                                        <?php else: ?>
                                            <button class="btn btn-outline-danger disabled me-2">Claimed</button>
                                        <?php endif; ?>
                                        <?php if ($this->_tpl_vars['d']['insuranceCard'] == null): ?>
                                            <button class="w-lg btn btn-outline-secondary disabled">Not
                                                Available</button>
                                        <?php else: ?>
                                            <a href="Insurance Cards/<?php echo $this->_tpl_vars['d']['schemeApplyId']; ?>
/<?php echo $this->_tpl_vars['d']['insuranceCard']; ?>
" download
                                                class="w-lg btn btn-secondary">Download
                                                Ins. Card</a>
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