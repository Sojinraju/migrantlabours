<?php /* Smarty version 2.6.26, created on 2023-05-11 08:07:02
         compiled from registerPolice.tpl */ ?>
<?php echo '
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Police Station Registration</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Register</a></li>
                <li class="breadcrumb-item active" aria-current="page">Police Station</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Police Station Registration</h4>
        </div>
        <div class="card-body">
            <form ng-controller="cntrl" name="SaveForm" ng-submit="funcSave()" class="form-horizontal" method="post"
                action="">
                <input type="hidden" name="hide" value="a">
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Station ID</label>
                    <div class="col-md-9">
                        <input type="text" ng-pattern="/^[1-9][0-9]{0,9}$/" required maxlength="10" ng-model="stationId"
                            name="stationId"
                            ng-class="{ \'invalid\': SaveForm.stationId.$invalid && SaveForm.stationId.$dirty, \'valid\': SaveForm.stationId.$valid }"
                            oninput="this.value = this.value.replace(/[^0-9]/g, \'\');" class="form-control"
                            placeholder="Station Number">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.stationId.$dirty && SaveForm.stationId.$invalid">
                            Please enter valid Station ID.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.stationId.$valid">
                            Station ID is valid.
                        </span>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Address Line 1</label>
                    <div class="col-md-9">
                        <input type="text" ng-pattern="/^[a-zA-Z0-9\\s#.,\'-]{5,100}$/" required maxlength="100" ng-model="addLine1" name="addLine1" class="form-control"
                            ng-class="{ \'invalid\': SaveForm.addLine1.$invalid && SaveForm.addLine1.$dirty, \'valid\': SaveForm.addLine1.$valid }"
                            placeholder="Address Line 1">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.addLine1.$dirty && SaveForm.addLine1.$invalid">
                            Please enter valid Address line.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.addLine1.$valid">
                            Address line is valid.
                        </span>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Address Line 2</label>
                    <div class="col-md-9">
                        <input type="text" ng-pattern="/^[a-zA-Z0-9\\s#.,\'-]{5,100}$/" required maxlength="100" ng-model="addLine2" name="addLine2" class="form-control"
                            ng-class="{ \'invalid\': SaveForm.addLine2.$invalid && SaveForm.addLine2.$dirty, \'valid\': SaveForm.addLine2.$valid }"
                            placeholder="Address Line 2">
                        <span style="color:red;" class="text ms-1 fs-12 fw-light"
                            ng-show="SaveForm.addLine2.$dirty && SaveForm.addLine2.$invalid">
                            Please enter valid Address line.
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.addLine2.$valid">
                            Address line is valid.
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
                    <label class="col-md-3 form-label">District</label>
                    <div class="col-md-9">
                        <input type="text" ng-pattern="/^[a-zA-Z0-9\\s\',-]{4,50}$/" name="district" class="form-control" placeholder="District" required
                            maxlength="50" ng-model="district"
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
                        <input type="text" ng-pattern="/^[a-zA-Z0-9\\s\',-]{4,50}$/" name="city" class="form-control" placeholder="City" required maxlength="50"
                            ng-model="city"
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
                        <input type="password" maxlength="32" name="password" class="form-control" placeholder="Password" required
                            ng-model="password" ng-pattern="/^.{3,}$/"
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