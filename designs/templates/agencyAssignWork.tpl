<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Assign Work</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Workers</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Work</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Assign Work
            </li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Approved Workers</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
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
                                        {if $d.isCurrentlyAppliedForJob==null}
                                            {if $d.isPreviouslyAppliedForJob==null}
                                                <a href="agencyAssignWorkToWorker.php?worker_loginId={$d.wlogid}"
                                                    class="w-lg btn btn-success me-2">Assign Work</a>
                                                <button class="w-lg btn btn-danger disabled">Deallocate</a>
                                                {else}
                                                    <a href="agencyAssignWorkToWorker.php?worker_loginId={$d.wlogid}"
                                                        class="w-lg btn btn-warning me-2">Reassign Work</a>
                                                    <button class=" btn w-lg btn-outline-danger disabled">Deallocated</button>
                                                {/if}
                                            {else}
                                                <button class=" btn w-lg btn-outline-success disabled me-2">Work
                                                    Assigned</button>
                                                <a href="agencyDeallocateWork.php?worker_loginId={$d.wlogid}"
                                                    class="w-lg btn btn-danger">Deallocate</a>
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