<?php /* Smarty version 2.6.26, created on 2023-05-14 17:46:47
         compiled from registerInsuranceAgency.tpl */ ?>
<?php echo '
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Insurance Agency Registration</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Register</a></li>
                <li class="breadcrumb-item active" aria-current="page">Insurance Agency</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Insurance Agency Registration

            </h4>
        </div>
        <div class="card-body">
            <form ng-controller="cntrl" name="SaveForm" ng-submit="funcSave()" class="form-horizontal" method="post"
                action="">
                <input type="hidden" name="hide" value="d">
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Insurance Agency ID</label>
                    <div class="col-md-9">
                        <input type="text" ng-pattern="/^[1-9][0-9]{0,9}$/" required maxlength="10" ng-model="insAgId"
                            name="insAgId"
                            ng-class="{ \'invalid\': SaveForm.insAgId.$invalid && SaveForm.insAgId.$dirty, \'valid\': SaveForm.insAgId.$valid }"
                            oninput="this.value = this.value.replace(/[^0-9]/g, \'\');" class="form-control"
                            placeholder="Insurance Agency Number">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.insAgId.$dirty && SaveForm.insAgId.$invalid">
                            Please enter valid Station ID.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.insAgId.$valid">
                            Station ID is valid.
                        </span>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Insurance Agency Name</label>
                    <div class="col-md-9">
                        <input type="text" ng-pattern="/^(?!.*\\.\\.)[a-zA-Z]+([.][a-zA-Z]+)*.{1,50}$/" required
                            maxlength="50" ng-model="insAgName" name="insAgName"
                            ng-class="{ \'invalid\': SaveForm.insAgName.$invalid && SaveForm.insAgName.$dirty, \'valid\': SaveForm.insAgName.$valid }"
                            class="form-control" placeholder="Insurance Agency Name">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.insAgName.$dirty && SaveForm.insAgName.$invalid">
                            Please enter valid Insurance Agency Name.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.insAgName.$valid">
                            Insurance Agency Name is valid.
                        </span>
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