<?php /* Smarty version 2.6.26, created on 2023-05-03 21:30:07
         compiled from val.tpl */ ?>
<?php echo '

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Police Station Registration</h4>
        </div>
        <div class="card-body">
            <form ng-controller="cntrl" name="SaveForm" ng-submit="funcSave()" class="form-horizontal" method="post">
                <input type="hidden" name="hide" value="a">
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Station ID</label>
                    <div class="col-md-9">
                        <input type="text" required maxlength="10"
                            ng-pattern="/^[7-9][0-9]{9}$/" ng-class="{ \'invalid\': SaveForm.stationId.$invalid && SaveForm.stationId.$dirty, \'valid\': SaveForm.stationId.$valid }" ng-model="stationId" name="stationId" class="form-control"
                            placeholder="Station Number">

                        <span style="color:red;" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.stationId.$dirty && SaveForm.stationId.$invalid">
                                Please Enter Valid Mobile No.!
                        </span>
                        <span style="color:green" class="text ms-1 fs-12 fw-light" ng-show="SaveForm.stationId.$valid">
                            Success Message!
                        </span>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Address Line 1</label>
                    <div class="col-md-9">
                        <input type="text" name="addLine1" class="form-control" placeholder="Address Line 1">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Address Line 2</label>
                    <div class="col-md-9">
                        <input type="text" name="addLine2" class="form-control" placeholder="Address Line 2">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Pin Code</label>
                    <div class="col-md-9">
                        <input type="number" name="pincode" class="form-control" placeholder="Pin Code">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">District</label>
                    <div class="col-md-9">
                        <input type="text" name="district" class="form-control" placeholder="District">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">City</label>
                    <div class="col-md-9">
                        <input type="text" name="city" class="form-control" placeholder="City">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Contact Number</label>
                    <div class="col-md-9">
                        <input type="number" name="contactNo" class="form-control" placeholder="Contact Number">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="mb-0 mt-4 row justify-content-end">
                    <div class="col-md-9">
                        <input type="submit" class="btn btn-primary" value="Register">
                    </div>
                </div>
            </form>
        </div>
    </div>





    <h1 style="text-align:center">Validation Example</h1>
    <form ng-controller="cntrl" name="SaveForm" ng-submit="funcSave()">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>

                <td>Name</td>
                <td><input type="text" required maxlength="60" ng-pattern="/^[a-zA-Z. ]*[a-zA-Z]{1,60}$/" name="name"
                        ng-model="name" />
                    <br />
                    <span style="color:red" ng-show="SaveForm.name.$dirty && SaveForm.name.$invalid" class="ng-hide">
                        Please Enter Valid Name.!
                    </span>
                </td>
            </tr>
            <tr>
                <td>Date Of Birth (dd/mm/yyyy)</td>
                <td><input type="text" required ng-pattern="/^(0[1-9]|[12][0-9]|3[01])[\\/](0[1-9]|1[012])[\\/](19|20)\\d\\d$/"
                        ng-model="dob" name="dob" />
                    <br />
                    <span style="color:red" ng-show="SaveForm.dob.$dirty && SaveForm.dob.$invalid" class="ng-hide">
                        Please Enter Valid Date Of Birth.!
                    </span>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" maxlength="100" required ng-pattern="/^\\w+@[a-zA-Z_]+?\\.[a-zA-Z]{2,3}$/" name="email"
                        ng-model="email" />
                    <br />
                    <span style="color:red" ng-show="SaveForm.email.$dirty && SaveForm.email.$invalid" class="ng-hide">
                        Please Enter Valid Email.!
                    </span>
                </td>
            </tr>

            <tr>
                <td>Mobile No </td>
                <td><input type="text" required maxlength="10" ng-pattern="/^[7-9][0-9]{9}$/" name="mobileno"
                        ng-model="mobileno" />
                    <br />
                    <span style="color:red" ng-show="SaveForm.mobileno.$dirty && SaveForm.mobileno.$invalid"
                        class="ng-hide">
                        Please Enter Valid Mobile No.!
                    </span>
                </td>
            </tr>

            <tr>
                <td>Pin code </td>
                <td><input type="text" required maxlength="6" ng-pattern="/^[1-9][0-9]{5}$/" name="pincode"
                        ng-model="pincode" />
                    <br />
                    <span style="color:red" ng-show="SaveForm.pincode.$dirty && SaveForm.pincode.$invalid" class="ng-hide">
                        Please Enter Valid Pin.!
                    </span>
                </td>
            </tr>

            <tr>
                <td colspan="4" style="text-align:center"><input type="submit" value="submit"
                        ng-disabled="SaveForm.$invalid" /></td>
            </tr>
        </table>
    </form>
'; ?>