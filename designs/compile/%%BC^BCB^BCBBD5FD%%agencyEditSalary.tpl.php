<?php /* Smarty version 2.6.26, created on 2023-04-16 11:40:23
         compiled from agencyEditSalary.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Edit Salary</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="agencyAddSalary.php">Salary</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Salary</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Salary</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="d">
            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Work</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['d']['work']; ?>
" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Daily Wage</label>
                    <div class="col-md-9">
                        <input type="number" name="salary" value=<?php echo $this->_tpl_vars['d']['salary']; ?>
 class="form-control" required>
                    </div>
                </div>
            <?php endforeach; endif; unset($_from); ?>
            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <a href="agencyAddSalary.php" class="btn btn-danger me-4">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </div>
        </form>
    </div>
</div>