<?php /* Smarty version 2.6.26, created on 2023-05-10 12:41:05
         compiled from workerViewWork.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'workerViewWork.tpl', 48, false),)), $this); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">My Work</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">My Work</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li> -->
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Work Details</h4>
    </div>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
        <div class="card-body">
            <?php if ($this->_tpl_vars['d']['work'] == null): ?>
                Worker is currently not applied to any Job
            <?php else: ?>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Work</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo $this->_tpl_vars['d']['work']; ?>
" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">No. of Days</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo $this->_tpl_vars['d']['days']; ?>
" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Salary</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo $this->_tpl_vars['d']['salary']; ?>
" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Total Salary</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo $this->_tpl_vars['d']['days']*$this->_tpl_vars['d']['salary']; ?>
" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Start Date</label>
                    <div class="col-md-9">
                        <input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['d']['startDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
" class="form-control" readonly>
                    </div>
                </div>


            </div>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</div>