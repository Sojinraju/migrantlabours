<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Generate WPC</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active"><a href="labourCommissionViewWorkers.php">Details Passing</a></li>
            <li class="breadcrumb-item active" aria-current="page">Generate WPC</li>
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
                        <h5 class="text-dark fw-semibold">{$d.workerName}</h5>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Worker Profile</h4>
            </div>
            <div class="card-body">
                <form method="post">
                    {foreach from=$view3 item="d"} <div class=" row mb-4">
                            <label class="col-md-3 form-label">Worker Name</label>
                            <div class="col-md-9">
                                <input type="text" name="workerName" value="{$d.workerName}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Address</label>
                            <div class="col-md-9">
                                <textarea type="text" name="address" class="form-control" readonly>{$d.address}</textarea>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Date Of Birth</label>
                            <div class="col-md-9">
                                <input type="text" value="{$d.dob}" name="dob" class="form-control" readonly>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Gender</label>
                            <div class="col-md-9">
                                <input type="text" value="{$d.gender}" name="gender" class="form-control" readonly>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Street</label>
                            <div class="col-md-9">
                                <input type="text" value="{$d.street}" name="street" class="form-control" readonly>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">District</label>
                            <div class="col-md-9">
                                <input type="text" value="{$d.district}" name="district" class="form-control" readonly>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">City</label>
                            <div class="col-md-9">
                                <input type="text" value="{$d.city}" name="city" class="form-control" readonly>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Pincode</label>
                            <div class="col-md-9">
                                <input type="number" value="{$d.pincode}" name="pincode" class="form-control" readonly>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Contact Number</label>
                            <div class="col-md-9">
                                <input type="number" value="{$d.contactNo}" name="contactNo" class="form-control" readonly>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Aadhaar</label>
                            <div class="col-md-9">
                                <input type="number" value="{$d.aadhaar}" name="aadhaar" class="form-control" readonly>
                            </div>
                        </div>
                        <div class=" row">
                            <label class="col-md-3 form-label">Agency Name</label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" value="{$d.agencyName}" name="agencyName" class="form-control"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" value="{$d.email}" name="email" class="form-control" readonly>
                            </div>
                        </div>
                        <input type="hidden" value="photos/{$d.wlogid}/{$d.photo}" name="photo">
                        <center>
                            {if $d.workerCard==null}
                                <input type="submit" class="btn btn-primary" value="Generate" name="generate">
                            {else}
                                <a href="Worker Cards/images/{$d.wlogid}/{$d.workerCard}" class="btn btn-success me-2">View
                                    Worker Card</a>
                                <input type="submit" class="btn btn-warning" value="Re-generate" name="generate">
                            {/if}
                        </center>
                    {/foreach}
                </form>
            </div>
        </div>
    </div>

</div>


{* This is the home page content of index *}