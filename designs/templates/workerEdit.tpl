<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Worker Profile</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
            {* <li class="breadcrumb-item active" aria-current="page">Worker</li> *}
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
                    {foreach from=$view3 item="d"}
                        <img src="photos/{$d.wlogid}/{$d.photo}" height="250px" width="250px" style="border-radius: 50%;"
                            class="mb-4">
                        <h5 class="mb-1 text-dark fw-semibold mb-4">{$d.workerName}</h5>
                        <a href="workerChangePhoto.php">Change Profile Picture</a>
                    {/foreach}
                </div>
            </div>
        </div>
        {foreach from=$view3 item="d"}
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Worker Medical Report</div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        {if $d.medicalReport!=null}
                            <a href="Medical Reports/{$d.wlogid}/{$d.medicalReport}" class="btn btn-success me-2">View
                                MR</a>
                        {/if}
                        <a href="workerReuploadMedicalReport.php" class="btn btn-warning">Reupload
                            MR</a>
                    </div>
                </div>
            </div>
            {if $d.workerCard!=null}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Worker Permit Card</div>
                    </div>
                    <div class="card-body">
                        {php}echo substr($d['workerCard'], -11, -4);{/php}
                        <center><img src="Worker Cards/images/{$d.wlogid}/{$d.qrCode}.png" height="300px" width="300px">
                        </center>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a href="Worker Cards/images/{$d.wlogid}/{$d.workerCard}" class="btn btn-success me-2">View
                                WPC</a>
                            <a href="Worker Cards/images/{$d.wlogid}/{$d.workerCard}" download
                                class="btn btn-secondary">Download
                                WPC</a>
                        </div>
                    </div>
                </div>
            {/if}
        {/foreach}
    </div>
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Worker Profile</h4>
            </div>
            <div class="card-body">
                <form ng-controller="cntrl" name="SaveForm" ng-submit="funcSave()" class="form-horizontal" method="post"
                    enctype="multipart/form-data" action=""> {foreach from=$view3 item="d"}
                        <input type="hidden" name="hide" value="c">
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Worker Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{$d.workerName}"
                                    ng-pattern="{literal}/^(?!.*\.\.)[a-zA-Z][a-zA-Z. ]{1,48}[a-zA-Z]$/{/literal}" required
                                    maxlength="50" ng-model="workerName" name="workerName"
                                    ng-init="workerName='{$d.workerName}'"
                                    ng-class="{literal}{ 'invalid': SaveForm.workerName.$invalid && SaveForm.workerName.$dirty, 'valid': SaveForm.workerName.$valid }{/literal}"
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
                                <textarea ng-pattern="{literal}/^[a-zA-Z0-9\s#.,'-]{10,}$/{/literal}" required
                                    ng-model="address" name="address" ng-init="address='{$d.address}'" class="form-control"
                                    ng-class="{literal}{ 'invalid': SaveForm.address.$invalid && SaveForm.address.$dirty, 'valid': SaveForm.address.$valid }{/literal}"
                                    placeholder="Address">{$d.address}</textarea>
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
                                <input type="date" ng-model="dob" name="dob" ng-init="dob='{$d.dob}'" value="{$d.dob}"
                                    ng-pattern="{literal}/^(19\d{2}|20[0]\d)-(\d{2})-(\d{2})$/{/literal}" required
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
                                {if $d.gender=='Male'}
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
                                {else}
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
                                {/if}
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Street</label>
                            <div class="col-md-9">
                                <input type="text" value={$d.street}
                                    ng-pattern="{literal}/^[a-zA-Z0-9\s',-]{4,50}$/{/literal}" name="street"
                                    class="form-control" placeholder="Street" required maxlength="50"
                                    ng-init="street='{$d.street}'" ng-model="street"
                                    ng-class="{literal}{ 'invalid': SaveForm.street.$invalid && SaveForm.street.$dirty, 'valid': SaveForm.street.$valid }{/literal}">
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
                                <input type="text" value={$d.district}
                                    ng-pattern="{literal}/^[a-zA-Z0-9\s',-]{4,50}$/{/literal}" name="district"
                                    class="form-control" placeholder="District" required maxlength="50"
                                    ng-init="district='{$d.district}'" ng-model="district"
                                    ng-class="{literal}{ 'invalid': SaveForm.district.$invalid && SaveForm.district.$dirty, 'valid': SaveForm.district.$valid }{/literal}">
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
                                <input type="text" value={$d.city}
                                    ng-pattern="{literal}/^[a-zA-Z0-9\s',-]{4,50}$/{/literal}" name="city"
                                    class="form-control" placeholder="City" required maxlength="50"
                                    ng-init="city='{$d.city}'" ng-model="city"
                                    ng-class="{literal}{ 'invalid': SaveForm.city.$invalid && SaveForm.city.$dirty, 'valid': SaveForm.city.$valid }{/literal}">
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
                                <input type="text" value={$d.pincode} required maxlength="6" name="pincode"
                                    class="form-control" placeholder="Pin Code"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    ng-class="{literal}{ 'invalid': SaveForm.pincode.$invalid && SaveForm.pincode.$dirty, 'valid': SaveForm.pincode.$valid }{/literal}"
                                    ng-pattern="{literal}/^[1-9][0-9]{5}$/{/literal}" ng-init="pincode='{$d.pincode}'"
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
                                <input type="text" value={$d.contactNo} name="contactNo" class="form-control"
                                    placeholder="Contact Number" required maxlength="10"
                                    ng-init="contactNo='{$d.contactNo}'" ng-model="contactNo"
                                    ng-class="{literal}{ 'invalid': SaveForm.contactNo.$invalid && SaveForm.contactNo.$dirty, 'valid': SaveForm.contactNo.$valid }{/literal}"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    ng-pattern="{literal}/^[6-9][0-9]{9}$/{/literal}">
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
                                <input type="text" name="aadhaar" value="{$d.aadhaar}" ng-init="aadhaar='{$d.aadhaar}'"
                                    class="form-control" placeholder="Aadhaar Number" required maxlength=12
                                    ng-model="aadhaar"
                                    ng-class="{literal}{ 'invalid': SaveForm.aadhaar.$invalid && SaveForm.aadhaar.$dirty, 'valid': SaveForm.aadhaar.$valid }{/literal}"
                                    ng-pattern="{literal}/^[1-9]\d{11}$/{/literal}"
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
                                        {foreach from=$data item='e'}
                                            {if $d.loginId==$e.loginId}
                                                <option value="{$e.loginId}" selected>{$e.agencyName}</option>
                                            {else}
                                                <option value="{$e.loginId}">{$e.agencyName}</option>
                                            {/if}
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" name="email" value="{$d.email}" ng-init="email='{$d.email}'"
                                    class="form-control" placeholder="Email" required maxlength="50" ng-model="email"
                                    ng-pattern="{literal}/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i{/literal}"
                                    ng-class="{literal}{ 'invalid': SaveForm.email.$invalid && SaveForm.email.$dirty, 'valid': SaveForm.email.$valid }{/literal}">
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
                    {/foreach}
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit Password</div>
            </div>
            <div class="card-body">
                {literal}
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
                                        ng-class="{ 'invalid': SaveForm.password.$invalid && SaveForm.password.$dirty, 'valid': SaveForm.password.$valid }">
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
                                        ng-class="{ 'invalid': SaveForm.npassword.$invalid && SaveForm.npassword.$dirty, 'valid': SaveForm.npassword.$valid }">
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
                                        ng-class="{ 'invalid': SaveForm.cpassword.$invalid && SaveForm.cpassword.$dirty, 'valid': SaveForm.cpassword.$valid }">
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
                {/literal}
            </div>
        </div>
    </div>

</div>