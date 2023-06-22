<?php /* Smarty version 2.6.26, created on 2023-05-04 11:00:25
         compiled from user_reg.tpl */ ?>
<html ng-app="myApp">

<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
</head>
<?php echo '

<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
                <div class="col-lg-8">
                    <div ng-controller="cntrl" class="bg-light rounded p-5 m-5 mb-0">
                        <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-white mb-4">
                            User Registration</h4>
                        <form method="post" action="" name="SaveForm" ng-submit="funcSave()">
                            <input type="hidden" name="hide" value="h">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <!--Name-->
                                    <input type="text" required maxlength="60"
                                        ng-pattern="/^[a-zA-Z. ]*[a-zA-Z]{1,60}$/" name="name" ng-model="name"
                                        class="form-control bg-white border-0" placeholder="Your Name"
                                        style="height: 55px;" />
                                    <span style="color:rgba(254, 106, 106, 0.848)"
                                        ng-show="SaveForm.name.$dirty && SaveForm.name.$invalid" class="ng-hide">
                                        Please Enter Valid Name.!
                                    </span>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <!--Contact-->
                                    <input type="number" required maxlength="10" ng-pattern="/^[6-9][0-9]{9}$/"
                                        ng-model="contact" name="contact" class="form-control bg-white border-0"
                                        placeholder="Your Contact" style="height: 55px;">
                                    <span style="color:rgba(254, 106, 106, 0.848)"
                                        ng-show="SaveForm.contact.$dirty && SaveForm.contact.$invalid" class="ng-hide">
                                        Please Enter Valid Contact No.!
                                    </span>
                                </div>
                                <div class="col-12">
                                    <!--Address-->
                                    <textarea name="address" class="form-control bg-white border-0" rows="5"
                                        placeholder="Address"></textarea>
                                </div>
                                <div class="col-12">
                                    <!--PIN Code-->
                                    <input type="number" required maxlength="6" ng-pattern="/^[1-9][0-9]{5}$/" ng-model="pin" name="pin" class="form-control bg-white border-0"
                                        placeholder="PIN Code" style="height: 55px;">
                                        <span style="color:rgba(254, 106, 106, 0.848)"
                                        ng-show="SaveForm.pin.$dirty && SaveForm.pin.$invalid" class="ng-hide">
                                        Please Enter Valid Pincode.!
                                    </span>
                                </div>
                                <div class="col-12 col-sm-6 form-control text-muted bg-white border-0 w-100 ps-4 pe-5"
                                    style="height: 55px;">
                                    <!--Gender-->
                                    <tr>
                                        <th>Gender&emsp;:&emsp;</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="gender" value="male" id=m
                                                    class="form-check-input">
                                                <label class="form-check-label" for="m">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="gender" value="female" id=f
                                                    class="form-check-input">
                                                <label class="form-check-label" for="f">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="gender" value="others" id=o
                                                    class="form-check-input">
                                                <label class="form-check-label" for="o">Others</label>
                                            </div>
                                        </td>
                                    </tr>
                                </div>
                                <div class="col-12 form-control text-muted bg-white border-0 w-100 ps-4 pe-5"
                                    style="height: 55px;">
                                    <!--DOB-->
                                    <th>Date Of Birth&emsp;:&emsp;</th>
                                    <td><input type="date" required min="1900-01-01" max="2020-01-01"  ng-model="dob" name="dob" placeholder="Date Of Birth"
                                            class="bg-white text-muted border-0 border-0"></td>
                                            <span style="color:rgba(254, 106, 106, 0.848)"
                                        ng-show="SaveForm.dob.$dirty && SaveForm.dob.$invalid" class="ng-hide">
                                        Please Enter Valid DOB.!
                                    </span>
                                </div>
                                <div class="col-12">
                                    <!--Email-->
                                    <input type="email" maxlength="100" required ng-pattern="/^\\w+@[a-zA-Z_]+?\\.[a-zA-Z]{2,3}$/" ng-model="email" name="email" class="form-control bg-white border-0"
                                        placeholder="Your Email" style="height: 55px;">
                                </div>
                                <span style="color:rgba(254, 106, 106, 0.848)"
                                        ng-show="SaveForm.email.$dirty && SaveForm.email.$invalid" class="ng-hide">
                                        Please Enter Valid Email.!
                                    </span>
                                <div class="col-12">
                                    <!--Password-->
                                    <input type="password" name="password" class="form-control bg-white border-0"
                                        placeholder="Password" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit"
                                        ng-disabled="SaveForm.$invalid">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var app = angular.module("myApp", []);
        app.controller(\'cntrl\', function ($scope) {

            $scope.funcSave = function () {
                if ($scope.SaveForm.$valid) {
                    alert("Form is Valid..!!");
                }
                else {
                    alert("Form is not Valid..!!");
                }
            }

        })

    </script>
    '; ?>

</body>

</html>