<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Apply for Workers</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active"><a href="agencyViewIns.php">Apply Insurance</a></li>
            <li class="breadcrumb-item active"><a href="agencyViewSchemes.php?insAg_loginId={$insAg_loginId}">View
                    Schemes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Apply for Workers</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Apply Scheme for Workers</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker ID</th>
                                <th>Worker Name</th>
                                <th>Photo</th>
                                <th>Address</th>
                                <th>DOB</th>
                                <th>Street</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Pincode</th>
                                <th>Contact No.</th>
                                <th>Aadhaar</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data item="d"}
                                <tr>
                                    <td>{$d.workerId}</td>
                                    <td>{$d.workerName}</td>
                                    <td>
                                        <img src="photos/{$d.wlogid}/{$d.photo}"
                                            class="avatar avatar-xxl bradius cover-image">
                                    </td>
                                    <td>{$d.address}</td>
                                    <td>{$d.dob}</td>
                                    <td>{$d.street}</td>
                                    <td>{$d.district}</td>
                                    <td>{$d.city}</td>
                                    <td>{$d.pincode}</td>
                                    <td>{$d.contactNo}</td>
                                    <td>{$d.aadhaar}</td>
                                    <td>{$d.email}</td>
                                    <td>
                                        {if $d.isApplied==null}
                                            <a href="agencySchemeApply.php?worker_loginId={$d.wlogid}"
                                                class=" btn w-lg btn-success">Apply</a>
                                        {else}
                                            <button class=" btn w-lg btn-outline-success disabled">Already Applied</button>
                                        {/if}
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>