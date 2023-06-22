<?php /* Smarty version 2.6.26, created on 2023-05-13 15:57:56
         compiled from agencyVideoConferenceWorkers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'agencyVideoConferenceWorkers.tpl', 59, false),)), $this); ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Video Conference</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Video Conference</a></li>
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
                                        <?php if ($this->_tpl_vars['d']['status'] == 1): ?>
                                            Approved
                                        <?php else: ?>
                                            <?php if ($this->_tpl_vars['d']['status'] == 2): ?>
                                                Rejected
                                            <?php else: ?>
                                                Unconfirmed
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($this->_tpl_vars['d']['videoId'] == null): ?>
                                            <a href="agencyScheduleVideoCall.php?worker_loginId=<?php echo $this->_tpl_vars['d']['wlogid']; ?>
"
                                                class="btn btn-success me-2" style="width:181.75px">Schedule Video Call</a>
                                        <?php else: ?>
                                            <button class="btn btn-outline-success me-2 disabled"><?php echo ((is_array($_tmp=$this->_tpl_vars['d']['scheduledDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['d']['scheduledTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%I:%M %p") : smarty_modifier_date_format($_tmp, "%I:%M %p")); ?>
</button>
                                            <?php if (time() >= $this->_tpl_vars['d']['strTime']): ?>
                                                <a href="<?php echo $this->_tpl_vars['d']['url']; ?>
" class="btn btn-warning">Start Video Call</a>
                                            <?php else: ?>
                                                <button class="btn btn-outline-warning disabled">Start Video Call</button>
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