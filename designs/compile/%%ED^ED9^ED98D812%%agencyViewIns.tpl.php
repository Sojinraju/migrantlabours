<?php /* Smarty version 2.6.26, created on 2023-04-16 09:35:02
         compiled from agencyViewIns.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Apply Insurance</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Apply Insurance</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Insurance Agencies</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Insurance Agency ID</th>
                                <th>Insurance Agency Name</th>
                                <th>Address</th>
                                <th>District</th>
                                <th>Contact No.</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                <tr>
                                    <td><?php echo $this->_tpl_vars['d']['insAgId']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['insAgName']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['district']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['contactNo']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['d']['email']; ?>
</td>
                                    <td><a href="agencyViewSchemes.php?insAg_loginId=<?php echo $this->_tpl_vars['d']['loginId']; ?>
" class=" btn btn-primary me-2">View
                                            Schemes</a>
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