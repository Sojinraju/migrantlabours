<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Passed Workers</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Passed Workers</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Workers Details</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker Name</th>
                                <th>Photo</th>
                                <th>Address</th>
                                <th>Dob</th>
                                <th>Street</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Pincode</th>
                                <th>Contact No.</th>
                                <th>Aadhaar</th>
                                <th>Email</th>
                                <th>Agency Name</th>
                                <th>Agency Phone</th>
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
                                    <td>{$d.agencyName}</td>
                                    <td>{$d.agency_contactNo}</td>
                                    <td>
                                        {if $d.crimeReport==null}
                                            <a href="policeUploadWorkerCrimeReport.php?worker_loginId={$d.wlogid}"
                                                class="btn btn-primary wg-l">Upload Crime Report</a>
                                        {else}
                                            <a href="policeUploadWorkerCrimeReport.php?worker_loginId={$d.wlogid}"
                                                class="btn btn-orange wg-l">Reupload Crime Report</a>
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