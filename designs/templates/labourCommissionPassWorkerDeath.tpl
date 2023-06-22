<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Details Passing</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Details Passing</li>
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
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Pincode</th>
                                <th>Aadhaar</th>
                                <th>Agency Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data item="d"}
                                <tr>
                                    <td>{$d.workerName}</td>
                                    <td>
                                        <img src="photos/{$d.loginId}/{$d.photo}"
                                            class="avatar avatar-xxl bradius cover-image">
                                    </td>
                                    <td>{$d.dob}</td>
                                    <td>{$d.gender}</td>
                                    <td>{$d.pincode}</td>
                                    <td>{$d.aadhaar}</td>
                                    <td>{$d.agencyName}</td>
                                    <td>
                                        <a href="Death Reports/{$d.loginId}/{$d.deathReport}" download
                                            class="btn btn-secondary w-lg me-2">Download Death Report</a>
                                        {if $d.deathPassingStatus=='1'}
                                            <a href="labourCommissionPassWorkerDeathToPolice.php?worker_loginId={$d.loginId}"
                                                class="btn btn-success w-lg">Pass to PS</a>
                                        {else}
                                            <button class="btn btn-outline-success disabled w-lg">Passed to PS</button>
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