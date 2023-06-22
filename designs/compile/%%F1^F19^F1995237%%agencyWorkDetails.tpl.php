<?php /* Smarty version 2.6.26, created on 2023-04-23 20:31:50
         compiled from agencyWorkDetails.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Details</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Workers</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Work</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Details
            </li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Select Job</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="post">
                    <input type="hidden" name="hide" value="d">
                    <div class="row">
                        <label class="col-md-3 form-label">Work</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <select class="form-control form-select select2" data-placeholder="Choose Work"
                                    name="salaryId" id="salaryId" required>
                                    <option></option>
                                    <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                        <option value="<?php echo $this->_tpl_vars['d']['salaryId']; ?>
"><?php echo $this->_tpl_vars['d']['work']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 row justify-content-end">
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>