<?php /* Smarty version 2.6.26, created on 2023-05-14 22:20:22
         compiled from agencyEdit.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Agency Profile</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Agency Profile</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="b">
            <?php $_from = $this->_tpl_vars['view2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Agency ID</label>
                    <div class="col-md-9">
                        <input type="number" name="agencyId" class="form-control" value="<?php echo $this->_tpl_vars['c']['agencyId']; ?>
"
                            placeholder="Agency Number">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Agency Name</label>
                    <div class="col-md-9">
                        <input type="text" name="agencyName" class="form-control" value="<?php echo $this->_tpl_vars['c']['agencyName']; ?>
"
                            placeholder="Agency Name">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Address</label>
                    <div class="col-md-9">
                        <textarea type="text" name="address" class="form-control"
                            placeholder="Address"><?php echo $this->_tpl_vars['c']['address']; ?>
</textarea>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Pincode</label>
                    <div class="col-md-9">
                        <input type="number" name="pincode" class="form-control" value="<?php echo $this->_tpl_vars['c']['pincode']; ?>
" placeholder="Pincode">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">District</label>
                    <div class="col-md-9">
                        <input type="text" name="district" class="form-control" value="<?php echo $this->_tpl_vars['c']['district']; ?>
"
                            placeholder="District">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">City</label>
                    <div class="col-md-9">
                        <input type="text" name="city" class="form-control" value="<?php echo $this->_tpl_vars['c']['city']; ?>
" placeholder="City">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Proprietor Name</label>
                    <div class="col-md-9">
                        <input type="text" name="propName" class="form-control" value="<?php echo $this->_tpl_vars['c']['propName']; ?>
"
                            placeholder="Proprietor Name">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Contact Number</label>
                    <div class="col-md-9">
                        <input type="number" name="contactNo" class="form-control" value="<?php echo $this->_tpl_vars['c']['contactNo']; ?>
"
                            placeholder="Contact Number">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" name="email" class="form-control" value="<?php echo $this->_tpl_vars['c']['email']; ?>
" placeholder="Email">
                    </div>
                </div>
                <div class="mb-0 mt-4 row justify-content-end">
                    <div class="col-md-9">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </div>
            <?php endforeach; endif; unset($_from); ?>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title">Edit Password</div>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="p">
            <div class="row mb-2">
                <label class="col-md-3 form-label">Current Password</label>
                <div class="col-md-9">
                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                        <a class="input-group-text bg-white text-muted">
                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                        </a>
                        <input class="input100 form-control" type="password" name="password"
                            placeholder="Current Password">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <label class="col-md-3 form-label">New Password</label>
                <div class="col-md-9">
                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                        <a class="input-group-text bg-white text-muted">
                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                        </a>
                        <input class="input100 form-control" type="password" name="cpassword"
                            placeholder="New Password">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <label class="col-md-3 form-label">Confirm Password</label>
                <div class="col-md-9">
                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                        <a class="input-group-text bg-white text-muted">
                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                        </a>
                        <input class="input100 form-control" type="password" name="npassword"
                            placeholder="Confirm Password">
                    </div>
                </div>
            </div>
            <div class="mb-0 mt-2 row justify-content-end">
                <div class="col-md-9">
                    <input type="submit" class="btn btn-primary" value="Change">
                </div>
            </div>
    </div>
</div>
