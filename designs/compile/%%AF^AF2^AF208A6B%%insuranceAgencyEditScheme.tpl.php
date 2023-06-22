<?php /* Smarty version 2.6.26, created on 2023-04-09 04:57:20
         compiled from insuranceAgencyEditScheme.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Edit Scheme</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active"><a href="insuranceAgencySchemes.php">Schemes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Scheme</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="a">
            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f']):
?>
                <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Category</label>
                <div class="col-md-9">
                    <input type="text" name="schemeCat" class="form-control" value="<?php echo $this->_tpl_vars['f']['schemeCat']; ?>
"
                        placeholder="Scheme Category">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Name</label>
                <div class="col-md-9">
                    <input type="text" name="schemeName" class="form-control" value="<?php echo $this->_tpl_vars['f']['schemeName']; ?>
"
                        placeholder="Scheme Name">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Amount</label>
                <div class="col-md-9">
                    <input type="number" name="schemeAmnt" class="form-control" value="<?php echo $this->_tpl_vars['f']['schemeAmnt']; ?>
"
                        placeholder="Scheme Amount">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Validity</label>
                <div class="col-md-9">
                    <input type="number" name="validity" class="form-control" value="<?php echo $this->_tpl_vars['f']['validity']; ?>
"
                        placeholder="Number of Years">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Details</label>
                <div class="col-md-9">
                    <textarea type="text" name="schemeDetails" class="form-control"
                        placeholder="Scheme Details"><?php echo $this->_tpl_vars['f']['schemeDetails']; ?>
</textarea>
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Interest Rate</label>
                <div class="col-md-9">
                    <input type="text" name="interestRate" class="form-control" value="<?php echo $this->_tpl_vars['f']['interestRate']; ?>
"
                        placeholder="Percentage of Interest">
                </div>
            </div>
            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?>
        </form>
    </div>
</div>
