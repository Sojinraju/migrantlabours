<?php /* Smarty version 2.6.26, created on 2023-05-15 19:34:53
         compiled from registerWorker.tpl */ ?>
<?php echo '
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Worker Registration</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Register</a></li>
                <li class="breadcrumb-item active" aria-current="page">Worker</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Worker Registration</h4>
        </div>
        <div class="card-body">
            <form ng-controller="cntrl" name="SaveForm" ng-submit="funcSave()" class="form-horizontal" method="post"
                enctype="multipart/form-data" action="">
                <input type="hidden" name="hide" value="c">
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Worker Name</label>
                    <div class="col-md-9">
                        <input type="text" ng-pattern="/^(?!.*\\.\\.)[a-zA-Z][a-zA-Z. ]{1,48}[a-zA-Z]$/" required
                            maxlength="50" ng-model="workerName" name="workerName"
                            ng-class="{ \'invalid\': SaveForm.workerName.$invalid && SaveForm.workerName.$dirty, \'valid\': SaveForm.workerName.$valid }"
                            class="form-control" placeholder="Worker Name">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.workerName.$dirty && SaveForm.workerName.$invalid">
                            Please enter valid Worker Name.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.workerName.$valid">
                            Worker Name is valid.
                        </span>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Photo</label>
                    <div class="col-md-9">
                        <input type="file" name="photo" class="form-control" accept="image/*" required>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Address</label>
                    <div class="col-md-9">
                        <textarea ng-pattern="/^[a-zA-Z0-9\\s#.,\'-]{10,}$/" required ng-model="address" name="address"
                            class="form-control"
                            ng-class="{ \'invalid\': SaveForm.address.$invalid && SaveForm.address.$dirty, \'valid\': SaveForm.address.$valid }"
                            placeholder="Address"></textarea>
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.address.$dirty && SaveForm.address.$invalid">
                            Please enter valid Address.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.address.$valid">
                            Address is valid.
                        </span>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Date Of Birth</label>
                    <div class="col-md-9">
                        <input type="date" ng-model="dob" name="dob"
                            ng-pattern="/^(19\\d{2}|20[0]\\d)-(\\d{2})-(\\d{2})$/" required class="form-control">
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
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="gender" value="Male" required>
                                <span class="custom-control-label">Male</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="gender" value="Female">
                                <span class="custom-control-label">Female</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Street</label>
                    <div class="col-md-9">
                        <input type="text" ng-pattern="/^[a-zA-Z0-9\\s\',-]{4,50}$/" name="street" class="form-control"
                            placeholder="Street" required maxlength="50" ng-model="street"
                            ng-class="{ \'invalid\': SaveForm.street.$invalid && SaveForm.street.$dirty, \'valid\': SaveForm.street.$valid }">
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
                        <input type="text" ng-pattern="/^[a-zA-Z0-9\\s\',-]{4,50}$/" name="district" class="form-control"
                            placeholder="District" required maxlength="50" ng-model="district"
                            ng-class="{ \'invalid\': SaveForm.district.$invalid && SaveForm.district.$dirty, \'valid\': SaveForm.district.$valid }">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.district.$dirty && SaveForm.district.$invalid">
                            Please enter valid District.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.district.$valid">
                            District is valid.
                        </span>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">City</label>
                    <div class="col-md-9">
                        <input type="text" ng-pattern="/^[a-zA-Z0-9\\s\',-]{4,50}$/" name="city" class="form-control"
                            placeholder="City" required maxlength="50" ng-model="city"
                            ng-class="{ \'invalid\': SaveForm.city.$invalid && SaveForm.city.$dirty, \'valid\': SaveForm.city.$valid }">
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
                        <input type="text" required maxlength="6" name="pincode" class="form-control" placeholder="Pin Code"
                            oninput="this.value = this.value.replace(/[^0-9]/g, \'\');"
                            ng-class="{ \'invalid\': SaveForm.pincode.$invalid && SaveForm.pincode.$dirty, \'valid\': SaveForm.pincode.$valid }"
                            ng-pattern="/^[1-9][0-9]{5}$/" ng-model="pincode">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.pincode.$dirty && SaveForm.pincode.$invalid">
                            Please enter valid Pincode.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.pincode.$valid">
                            Pincode is valid.
                        </span>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Contact Number</label>
                    <div class="col-md-9">
                        <input type="text" name="contactNo" class="form-control" placeholder="Contact Number" required
                            maxlength="10" ng-model="contactNo"
                            ng-class="{ \'invalid\': SaveForm.contactNo.$invalid && SaveForm.contactNo.$dirty, \'valid\': SaveForm.contactNo.$valid }"
                            oninput="this.value = this.value.replace(/[^0-9]/g, \'\');" ng-pattern="/^[6-9][0-9]{9}$/">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.contactNo.$dirty && SaveForm.contactNo.$invalid">
                            Please enter valid Contact No.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.contactNo.$valid">
                            Contact No. is valid.
                        </span>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Aadhaar</label>
                    <div class="col-md-9">
                        <input type="text" name="aadhaar" class="form-control" placeholder="Aadhaar Number" required
                            maxlength=12 ng-model="aadhaar"
                            ng-class="{ \'invalid\': SaveForm.aadhaar.$invalid && SaveForm.aadhaar.$dirty, \'valid\': SaveForm.aadhaar.$valid }"
                            ng-pattern="/^[1-9]\\d{11}$/" oninput="this.value = this.value.replace(/[^0-9]/g, \'\');">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.aadhaar.$dirty && SaveForm.aadhaar.$invalid">
                            Please enter valid Aadhaar Number.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.aadhaar.$valid">
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
                            '; ?>

                            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                <option value="<?php echo $this->_tpl_vars['d']['loginId']; ?>
"><?php echo $this->_tpl_vars['d']['agencyName']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                            <?php echo '
                            </select>
                        </div>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Medical Report</label>
                    <div class="col-md-9">
                        <input type="file" name="medicalReport" accept=".pdf, .doc, .docx, .jpg, .jpeg, .png"
                            class="form-control" required>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" name="email" class="form-control" placeholder="Email" required maxlength="50"
                            ng-model="email" ng-pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}$/i"
                            ng-class="{ \'invalid\': SaveForm.email.$invalid && SaveForm.email.$dirty, \'valid\': SaveForm.email.$valid }">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.email.$dirty && SaveForm.email.$invalid">
                            Please enter valid Email.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.email.$valid">
                            Email is valid.
                        </span>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" maxlength="32" name="password" class="form-control" placeholder="Password"
                            required ng-model="password" ng-pattern="/^.{3,}$/"
                            ng-class="{ \'invalid\': SaveForm.password.$invalid && SaveForm.password.$dirty, \'valid\': SaveForm.password.$valid }">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.password.$dirty && SaveForm.password.$invalid">
                            Please enter valid Password.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.password.$valid">
                            Password is valid.
                        </span>
                    </div>
                </div>
                <div class="mb-0 mt-4 row justify-content-end">
                    <div class="col-md-9">
                        <input type="submit" class="btn btn-primary" value="Register" ng-disabled="SaveForm.$invalid">
                    </div>
                </div>
            </form>
        </div>
    </div>

'; ?>