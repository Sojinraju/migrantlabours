<?php /* Smarty version 2.6.26, created on 2023-04-24 08:34:20
         compiled from agencyWorkerDetailsByWork.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'agencyWorkerDetailsByWork.tpl', 29, false),)), $this); ?>
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Assigned Workers</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Aadhaar</th>
                                <th>Worker Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Start Date</th>
                                <th>No. of Days</th>
                                <th>Total Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_from = $this->_tpl_vars['view2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                <tr>
                                    <td><?php echo $this->_tpl_vars['d']['aadhaar']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['workerName']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['dob']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
                                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['d']['startDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['days']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['salary']*$this->_tpl_vars['d']['days']; ?>
</td>
                                    <td><a href="agencyRemoveWorkAssigned.php?workAssignId=<?php echo $this->_tpl_vars['d']['workAssignId']; ?>
"
                                    class="btn btn-danger">Remove</a></td>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>