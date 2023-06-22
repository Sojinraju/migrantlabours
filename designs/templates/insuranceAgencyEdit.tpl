<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Insurance Agency Profile</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Insurance Agency Profile</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="d">
            {foreach from=$view4 item="e"}
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Insurance Agency ID</label>
                    <div class="col-md-9">
                        <input type="number" name="insAgId" class="form-control" value="{$e.insAgId}"
                            placeholder="Insurance Agency Number">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Insurance Agency Name</label>
                    <div class="col-md-9">
                        <input type="text" name="insAgName" class="form-control" value="{$e.insAgName}"
                            placeholder="Insurance Agency Name">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Address</label>
                    <div class="col-md-9">
                        <textarea type="text" name="address" class="form-control"
                            placeholder="Address">{$e.address}</textarea>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">District</label>
                    <div class="col-md-9">
                        <input type="text" name="district" class="form-control" value="{$e.district}"
                            placeholder="District">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Contact Number</label>
                    <div class="col-md-9">
                        <input type="number" name="contactNo" class="form-control" value="{$e.contactNo}"
                            placeholder="Contact Number">
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" name="email" class="form-control" value="{$e.email}" placeholder="Email">
                    </div>
                </div>
                <div class="mb-0 mt-4 row justify-content-end">
                    <div class="col-md-9">
                        <input type="submit" class="btn btn-primary" value="Register">
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