<?php /* Smarty version 2.6.26, created on 2023-03-29 18:16:36
         compiled from insuranceAgencySchemes.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Schemes</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Schemes</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Schemes</h3>
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
                                <th>Scheme Details</th>
                                <th>Interest Rate</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                <tr>
                                    <td><?php echo $this->_tpl_vars['d']['schemeCat']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['schemeName']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['schemeAmnt']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['validity']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['schemeDetails']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['interestRate']; ?>
</td>
                                    <td><a href="insuranceAgencyEditScheme.php?id=<?php echo $this->_tpl_vars['d']['schemeId']; ?>
"
                                            class=" btn btn-primary me-2">Edit</a>
                                        <a href="insuranceAgencyDeleteScheme.php?id=<?php echo $this->_tpl_vars['d']['schemeId']; ?>
"
                                            class=" btn btn-danger">Delete</a>
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