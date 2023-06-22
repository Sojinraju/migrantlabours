<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Death Reports</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Death Reports</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Workers Death Reports</h3>
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
                                            class="btn btn-secondary w-lg">Download Death Report</a>
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