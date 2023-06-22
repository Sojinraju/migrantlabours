<?php /* Smarty version 2.6.26, created on 2023-04-23 09:00:00
         compiled from agencyAssignWorkToWorker.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Assign Work To Worker</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Workers</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Work</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="agencyAssignWork.php">Assign Work</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Assign Work To Worker
            </li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Select Work</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="c">
            <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Worker</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" readonly value="<?php echo $this->_tpl_vars['d']['workerName']; ?>
" />
                    </div>
                </div>
            <?php endforeach; endif; unset($_from); ?>
            <div class="row">
                <label class="col-md-3 form-label">Work</label>
                <div class="col-md-9">
                    <div class="form-group">
                        <select class="form-control form-select select2" data-placeholder="Select Work" name="salaryId"
                            required>
                            <option></option>
                            <?php $_from = $this->_tpl_vars['view2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
                                <option value="<?php echo $this->_tpl_vars['e']['salaryId']; ?>
"><?php echo $this->_tpl_vars['e']['work']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-md-3 form-label">Start Date</label>
                <div class="col-md-9">
                    <input type="date" name="startDate" class="form-control" required />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-md-3 form-label">Days</label>
                <div class="col-md-9">
                    <input type="number" name="days" class="form-control" required placeholder="No. of Days" />
                </div>
            </div>
            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <a href="agencyAssignWork.php" class="btn btn-danger me-4">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Assign">
                </div>
            </div>
        </form>
    </div>
</div>