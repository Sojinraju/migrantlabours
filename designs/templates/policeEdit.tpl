<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Police Station Profile</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Police Station Profile</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="a">
            {foreach from=$view1 item="b"}
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Station ID</label>
                    <div class="col-md-9">
                        <input type="number" name="stationId" value="{$b.stationId}" class="form-control"
                            placeholder="Station Number">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Address Line 1</label>
                    <div class="col-md-9">
                        <input type="text" name="addLine1" value="{$b.addLine1}" class="form-control"
                            placeholder="Address Line 1">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Address Line 2</label>
                    <div class="col-md-9">
                        <input type="text" name="addLine2" value="{$b.addLine2}" class="form-control"
                            placeholder="Address Line 2">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Pin Code</label>
                    <div class="col-md-9">
                        <input type="number" name="pincode" value="{$b.pincode}" class="form-control"
                            placeholder="Pin Code">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">District</label>
                    <div class="col-md-9">
                        <input type="text" name="district" value="{$b.district}" class="form-control"
                            placeholder="District">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">City</label>
                    <div class="col-md-9">
                        <input type="text" name="city" value="{$b.city}" class="form-control" placeholder="City">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Contact Number</label>
                    <div class="col-md-9">
                        <input type="number" name="contactNo" value="{$b.contactNo}" class="form-control"
                            placeholder="Contact Number">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" name="email" value="{$b.email}" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="mb-0 mt-4 row justify-content-end">
                    <div class="col-md-9">
                        <input type="submit" class="btn btn-primary" value="Update">
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

{* This is the home page content of index *}