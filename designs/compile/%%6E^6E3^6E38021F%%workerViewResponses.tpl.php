<?php /* Smarty version 2.6.26, created on 2023-05-10 12:38:55
         compiled from workerViewResponses.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'workerViewResponses.tpl', 24, false),)), $this); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Responses</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Complaints</a></li>
            <li class="breadcrumb-item active" aria-current="page">Responses</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row">
                                <div class="col-lg-12">
                                <?php if (count ( $this->_tpl_vars['data'] ) == 0): ?>
                                    No Responses
                                <?php endif; ?>
                                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['d']):
?>
                                    <div class="card text-white bg-primary ribbone-card">
                                        <div class="power-ribbone power-ribbone-top-left text-primary"><span
                                                class="bg-white"><i
                                                    class="fa fa-exclamation-circle text-primary"></i></span></div>

                                        <div class="card-header">
                                            <h3 class="card-title text-white ms-7">Complaint from <?php echo ((is_array($_tmp=$this->_tpl_vars['d']['currentDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>

                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Subject: <?php echo $this->_tpl_vars['d']['subject']; ?>
</p>
                                            <p class="card-text">Content: <?php echo $this->_tpl_vars['d']['content']; ?>
</p>
                                        </div>
                                        <div class="card-footer">
                                                <div class=" row mb-4">
                                                    <label class="col-md-1 text-white form-label">Response:</label>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control text-primary bg-white" readonly><?php echo $this->_tpl_vars['d']['adminReply']; ?>
</textarea>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                <?php endforeach; endif; unset($_from); ?>
                                </div>
                            </div>