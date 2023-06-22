<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Details</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Details</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Workers in Agency</h3>
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
                                        {if $d.status=='0'}
                                            <a href="agencyApproveWorker.php?id={$d.wlogid}"
                                                class="w-lg btn btn-success me-2">Accept</a>
                                            <a href="agencyRejectWorker.php?id={$d.wlogid}"
                                                class="w-lg btn btn-danger me-2">Reject</a>
                                        {elseif $d.status=='1'}
                                            <button class="w-lg btn btn-outline-success me-2 disabled">Accepted</button>
                                            <a href="agencyRejectWorker.php?id={$d.wlogid}"
                                                class="w-lg btn btn-danger me-2">Reject</a>

                                        {else}
                                            <a href="agencyApproveWorker.php?id={$d.wlogid}"
                                                class=" w-lg btn btn-success me-2">Accept</a>
                                            <button class="w-lg btn btn-outline-danger me-2 disabled">Rejected</button>

                                        {/if}
                                        {if $d.passingStatus=='0'}
                                            <a href="agencyPassWorkerToLabourCommission.php?worker_loginId={$d.wlogid}"
                                                class="w-lg btn btn-primary me-2">Pass to LC</a>
                                        {else}
                                            <button class="w-lg btn btn-outline-primary disabled me-2">Passed to LC</button>
                                        {/if}
                                        {if $d.passingStatus=='3'}
                                            <a href="Crime Reports/{$d.wlogid}/{$d.crimeReport}" download
                                                class="w-lg btn btn-secondary me-2">Download
                                                WCR</a>
                                        {else}
                                            <button class="w-lg btn btn-outline-secondary disabled me-2">WCR not
                                                available</button>
                                        {/if}
                                        {if $d.workerCard==null}
                                            <button class="w-lg btn btn-outline-secondary disabled me-2">WPC Not Available</button>
                                        {else}
                                            <a href="Worker Cards/images/{$d.wlogid}/{$d.workerCard}" download
                                                class="w-lg btn btn-secondary me-2">Download WPC</a>
                                        {/if}
                                        {if $d.medicalReport!=null}
                                            <a href="Medical Reports/{$d.wlogid}/{$d.medicalReport}" download
                                                class="w-lg btn btn-secondary">Download MR</a>
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