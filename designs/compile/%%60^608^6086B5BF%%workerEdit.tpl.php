<?php /* Smarty version 2.6.26, created on 2023-05-15 20:25:31
         compiled from workerEdit.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Worker Profile</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                    </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Worker Photo</div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <?php $_from = $this->_tpl_vars['view3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                        <img src="photos/<?php echo $this->_tpl_vars['d']['wlogid']; ?>
/<?php echo $this->_tpl_vars['d']['photo']; ?>
" height="250px" width="250px" style="border-radius: 50%;"
                            class="mb-4">
                        <h5 class="mb-1 text-dark fw-semibold mb-4"><?php echo $this->_tpl_vars['d']['workerName']; ?>
</h5>
                        <a href="workerChangePhoto.php">Change Profile Picture</a>
                    <?php endforeach; endif; unset($_from); ?>
                </div>
            </div>
        </div>
        <?php $_from = $this->_tpl_vars['view3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Worker Medical Report</div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <?php if ($this->_tpl_vars['d']['medicalReport'] != null): ?>
                            <a href="Medical Reports/<?php echo $this->_tpl_vars['d']['wlogid']; ?>
/<?php echo $this->_tpl_vars['d']['medicalReport']; ?>
" class="btn btn-success me-2">View
                                MR</a>
                        <?php endif; ?>
                        <a href="workerReuploadMedicalReport.php" class="btn btn-warning">Reupload
                            MR</a>
                    </div>
                </div>
            </div>
            <?php if ($this->_tpl_vars['d']['workerCard'] != null): ?>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Worker Permit Card</div>
                    </div>
                    <div class="card-body">
                        <?php echo substr($d['workerCard'], -11, -4); ?>
                        <center><img src="Worker Cards/images/<?php echo $this->_tpl_vars['d']['wlogid']; ?>
/<?php echo $this->_tpl_vars['d']['qrCode']; ?>
.png" height="300px" width="300px">
                        </center>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a href="Worker Cards/images/<?php echo $this->_tpl_vars['d']['wlogid']; ?>
/<?php echo $this->_tpl_vars['d']['workerCard']; ?>
" class="btn btn-success me-2">View
                                WPC</a>
                            <a href="Worker Cards/images/<?php echo $this->_tpl_vars['d']['wlogid']; ?>
/<?php echo $this->_tpl_vars['d']['workerCard']; ?>
" download
                                class="btn btn-secondary">Download
                                WPC</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Worker Profile</h4>
            </div>
            <div class="card-body">
                <form ng-controller="cntrl" name="SaveForm" ng-submit="funcSave()" class="form-horizontal" method="post"
                    enctype="multipart/form-data" action=""> <?php $_from = $this->_tpl_vars['view3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                        <input type="hidden" name="hide" value="c">
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Worker Name</label>
                            <div class="col-md-9">
                                <input type="text" value="<?php echo $this->_tpl_vars['d']['workerName']; ?>
"
                                    ng-pattern="<?php echo '/^(?!.*\\.\\.)[a-zA-Z][a-zA-Z. ]{1,48}[a-zA-Z]$/'; ?>
" required
                                    maxlength="50" ng-model="workerName" name="workerName"
                                    ng-init="workerName='<?php echo $this->_tpl_vars['d']['workerName']; ?>
'"
                                    ng-class="<?php echo '{ \'invalid\': SaveForm.workerName.$invalid && SaveForm.workerName.$dirty, \'valid\': SaveForm.workerName.$valid }'; ?>
"
                                    class="form-control" placeholder="Worker Name">
                                <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.workerName.$dirty && SaveForm.workerName.$invalid">
                                    Please enter valid Worker Name.
                                </span>
                                <span style="color:green" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.workerName.$valid">
                                    Worker Name is valid.
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Address</label>
                            <div class="col-md-9">
                                <textarea ng-pattern="<?php echo '/^[a-zA-Z0-9\\s#.,\'-]{10,}$/'; ?>
" required
                                    ng-model="address" name="address" ng-init="address='<?php echo $this->_tpl_vars['d']['address']; ?>
'" class="form-control"
                                    ng-class="<?php echo '{ \'invalid\': SaveForm.address.$invalid && SaveForm.address.$dirty, \'valid\': SaveForm.address.$valid }'; ?>
"
                                    placeholder="Address"><?php echo $this->_tpl_vars['d']['address']; ?>
</textarea>
                                <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.address.$dirty && SaveForm.address.$invalid">
                                    Please enter valid Address.
                                </span>
                                <span style="color:green" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.address.$valid">
                                    Address is valid.
                                </span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Date Of Birth</label>
                            <div class="col-md-9">
                                <input type="date" ng-model="dob" name="dob" ng-init="dob='<?php echo $this->_tpl_vars['d']['dob']; ?>
'" value="<?php echo $this->_tpl_vars['d']['dob']; ?>
"
                                    ng-pattern="<?php echo '/^(19\\d{2}|20[0]\\d)-(\\d{2})-(\\d{2})$/'; ?>
" required
                                    class="form-control">
                                <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.dob.$dirty && SaveForm.dob.$invalid">
                                    Please enter valid DOB.
                                </span>
                                <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.dob.$valid">
                                    DOB is valid.
                                </span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Gender</label>
                            <div class="col-md-9">
                                <?php if ($this->_tpl_vars['d']['gender'] == 'Male'): ?>
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="gender" value="Male" checked
                                                required>
                                            <span class="custom-control-label">Male</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="gender" value="Female">
                                            <span class="custom-control-label">Female</span>
                                        </label>
                                    </div>
                                <?php else: ?>
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="gender" value="Male"
                                                required>
                                            <span class="custom-control-label">Male</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="gender" value="Female"
                                                checked>
                                            <span class="custom-control-label">Female</span>
                                        </label>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Street</label>
                            <div class="col-md-9">
                                <input type="text" value=<?php echo $this->_tpl_vars['d']['street']; ?>

                                    ng-pattern="<?php echo '/^[a-zA-Z0-9\\s\',-]{4,50}$/'; ?>
" name="street"
                                    class="form-control" placeholder="Street" required maxlength="50"
                                    ng-init="street='<?php echo $this->_tpl_vars['d']['street']; ?>
'" ng-model="street"
                                    ng-class="<?php echo '{ \'invalid\': SaveForm.street.$invalid && SaveForm.street.$dirty, \'valid\': SaveForm.street.$valid }'; ?>
">
                                <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.street.$dirty && SaveForm.street.$invalid">
                                    Please enter a valid Street.
                                </span>
                                <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.street.$valid">
                                    Street is valid.
                                </span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">District</label>
                            <div class="col-md-9">
                                <input type="text" value=<?php echo $this->_tpl_vars['d']['district']; ?>

                                    ng-pattern="<?php echo '/^[a-zA-Z0-9\\s\',-]{4,50}$/'; ?>
" name="district"
                                    class="form-control" placeholder="District" required maxlength="50"
                                    ng-init="district='<?php echo $this->_tpl_vars['d']['district']; ?>
'" ng-model="district"
                                    ng-class="<?php echo '{ \'invalid\': SaveForm.district.$invalid && SaveForm.district.$dirty, \'valid\': SaveForm.district.$valid }'; ?>
">
                                <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.district.$dirty && SaveForm.district.$invalid">
                                    Please enter valid District.
                                </span>
                                <span style="color:green" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.district.$valid">
                                    District is valid.
                                </span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">City</label>
                            <div class="col-md-9">
                                <input type="text" value=<?php echo $this->_tpl_vars['d']['city']; ?>

                                    ng-pattern="<?php echo '/^[a-zA-Z0-9\\s\',-]{4,50}$/'; ?>
" name="city"
                                    class="form-control" placeholder="City" required maxlength="50"
                                    ng-init="city='<?php echo $this->_tpl_vars['d']['city']; ?>
'" ng-model="city"
                                    ng-class="<?php echo '{ \'invalid\': SaveForm.city.$invalid && SaveForm.city.$dirty, \'valid\': SaveForm.city.$valid }'; ?>
">
                                <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.city.$dirty && SaveForm.city.$invalid">
                                    Please enter valid City.
                                </span>
                                <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.city.$valid">
                                    City is valid.
                                </span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Pincode</label>
                            <div class="col-md-9">
                                <input type="text" value=<?php echo $this->_tpl_vars['d']['pincode']; ?>
 required maxlength="6" name="pincode"
                                    class="form-control" placeholder="Pin Code"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    ng-class="<?php echo '{ \'invalid\': SaveForm.pincode.$invalid && SaveForm.pincode.$dirty, \'valid\': SaveForm.pincode.$valid }'; ?>
"
                                    ng-pattern="<?php echo '/^[1-9][0-9]{5}$/'; ?>
" ng-init="pincode='<?php echo $this->_tpl_vars['d']['pincode']; ?>
'"
                                    ng-model="pincode">
                                <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.pincode.$dirty && SaveForm.pincode.$invalid">
                                    Please enter valid Pincode.
                                </span>
                                <span style="color:green" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.pincode.$valid">
                                    Pincode is valid.
                                </span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Contact Number</label>
                            <div class="col-md-9">
                                <input type="text" value=<?php echo $this->_tpl_vars['d']['contactNo']; ?>
 name="contactNo" class="form-control"
                                    placeholder="Contact Number" required maxlength="10"
                                    ng-init="contactNo='<?php echo $this->_tpl_vars['d']['contactNo']; ?>
'" ng-model="contactNo"
                                    ng-class="<?php echo '{ \'invalid\': SaveForm.contactNo.$invalid && SaveForm.contactNo.$dirty, \'valid\': SaveForm.contactNo.$valid }'; ?>
"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    ng-pattern="<?php echo '/^[6-9][0-9]{9}$/'; ?>
">
                                <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.contactNo.$dirty && SaveForm.contactNo.$invalid">
                                    Please enter valid Contact No.
                                </span>
                                <span style="color:green" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.contactNo.$valid">
                                    Contact No. is valid.
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Aadhaar</label>
                            <div class="col-md-9">
                                <input type="text" name="aadhaar" value="<?php echo $this->_tpl_vars['d']['aadhaar']; ?>
" ng-init="aadhaar='<?php echo $this->_tpl_vars['d']['aadhaar']; ?>
'"
                                    class="form-control" placeholder="Aadhaar Number" required maxlength=12
                                    ng-model="aadhaar"
                                    ng-class="<?php echo '{ \'invalid\': SaveForm.aadhaar.$invalid && SaveForm.aadhaar.$dirty, \'valid\': SaveForm.aadhaar.$valid }'; ?>
"
                                    ng-pattern="<?php echo '/^[1-9]\\d{11}$/'; ?>
"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.aadhaar.$dirty && SaveForm.aadhaar.$invalid">
                                    Please enter valid Aadhaar Number.
                                </span>
                                <span style="color:green" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.aadhaar.$valid">
                                    Aadhaar Number is valid.
                                </span>
                            </div>
                        </div>
                        <div class=" row">
                            <label class="col-md-3 form-label">Agency Name</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select class="form-control form-select select2" data-placeholder="Choose Agency"
                                        name="agency_loginId" required>
                                        <option></option>
                                        <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
                                            <?php if ($this->_tpl_vars['d']['loginId'] == $this->_tpl_vars['e']['loginId']): ?>
                                                <option value="<?php echo $this->_tpl_vars['e']['loginId']; ?>
" selected><?php echo $this->_tpl_vars['e']['agencyName']; ?>
</option>
                                            <?php else: ?>
                                                <option value="<?php echo $this->_tpl_vars['e']['loginId']; ?>
"><?php echo $this->_tpl_vars['e']['agencyName']; ?>
</option>
                                            <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" name="email" value="<?php echo $this->_tpl_vars['d']['email']; ?>
" ng-init="email='<?php echo $this->_tpl_vars['d']['email']; ?>
'"
                                    class="form-control" placeholder="Email" required maxlength="50" ng-model="email"
                                    ng-pattern="<?php echo '/^[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}$/i'; ?>
"
                                    ng-class="<?php echo '{ \'invalid\': SaveForm.email.$invalid && SaveForm.email.$dirty, \'valid\': SaveForm.email.$valid }'; ?>
">
                                <span style="color:red;" class="text ms-1 fs-12 fw-light"
                                    ng-show="SaveForm.email.$dirty && SaveForm.email.$invalid">
                                    Please enter valid Email.
                                </span>
                                <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.email.$valid">
                                    Email is valid.
                                </span>
                            </div>
                        </div>
                        <div class="mb-0 mt-4 row justify-content-end">
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-primary" value="Update" ng-disabled="SaveForm.$invalid">
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
                <?php echo '
                    <form ng-controller="cntrl" name="SaveForm" ng-submit="funcSave()" class="form-horizontal" method="post"
                        action="">
                        <input type="hidden" name="hide" value="p">
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Current Password</label>
                            <div class="col-md-9">
                                <div class="wrap-input1 validate-input input-group" id="Password-toggle">
                                    <a class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 form-control" type="password" maxlength="32" name="password"
                                        placeholder="Current Password" required ng-model="password" ng-pattern="/^.{3,}$/"
                                        ng-class="{ \'invalid\': SaveForm.password.$invalid && SaveForm.password.$dirty, \'valid\': SaveForm.password.$valid }">
                                </div>
                                <span style="color:red;" class="text fs-12 fw-light"
                                    ng-show="SaveForm.password.$dirty && SaveForm.password.$invalid">
                                    Please enter valid Password.
                                </span>
                                <span style="color:green" class="text fs-12 fw-light" ng-show="SaveForm.password.$valid">
                                    Password is valid.
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">New Password</label>
                            <div class="col-md-9">
                                <div class="wrap-input1 validate-input input-group" id="Password-toggle">
                                    <a class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 form-control" type="password" maxlength="32" name="npassword"
                                        placeholder="New Password" required ng-model="npassword" ng-pattern="/^.{3,}$/"
                                        ng-class="{ \'invalid\': SaveForm.npassword.$invalid && SaveForm.npassword.$dirty, \'valid\': SaveForm.npassword.$valid }">
                                </div>
                                <span style="color:red;" class="text fs-12 fw-light"
                                    ng-show="SaveForm.npassword.$dirty && SaveForm.npassword.$invalid">
                                    Please enter valid Password.
                                </span>
                                <span style="color:green" class="text fs-12 fw-light" ng-show="SaveForm.npassword.$valid">
                                    Password is valid.
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Confirm Password</label>
                            <div class="col-md-9">
                                <div class="wrap-input1 validate-input input-group" id="Password-toggle">
                                    <a class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 form-control" type="password" maxlength="32" name="cpassword"
                                        placeholder="Confirm Password" required ng-model="cpassword" ng-pattern="/^.{3,}$/"
                                        ng-class="{ \'invalid\': SaveForm.cpassword.$invalid && SaveForm.cpassword.$dirty, \'valid\': SaveForm.cpassword.$valid }">
                                </div>
                                <span style="color:red;" class="text fs-12 fw-light"
                                    ng-show="SaveForm.cpassword.$dirty && SaveForm.cpassword.$invalid">
                                    Please enter valid Password.
                                </span>
                                <span style="color:green" class="text fs-12 fw-light" ng-show="SaveForm.cpassword.$valid">
                                    Password is valid.
                                </span>
                            </div>
                        </div>
                        <div class="mb-0 mt-2 row justify-content-end">
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-primary" value="Change" ng-disabled="SaveForm.$invalid">
                            </div>
                        </div>
                    </form>
                '; ?>

            </div>
        </div>
    </div>

</div>