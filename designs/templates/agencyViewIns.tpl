<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Apply Insurance</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Apply Insurance</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Insurance Agencies</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Insurance Agency ID</th>
                                <th>Insurance Agency Name</th>
                                <th>Address</th>
                                <th>District</th>
                                <th>Contact No.</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data item="d"}
                                <tr>
                                    <td>{$d.insAgId}</td>
                                    <td>{$d.insAgName}</td>
                                    <td>{$d.address}</td>
                                    <td>{$d.district}</td>
                                    <td>{$d.contactNo}</td>
                                    <td>{$d.email}</td>
                                    <td><a href="agencyViewSchemes.php?insAg_loginId={$d.loginId}" class=" btn btn-primary me-2">View
                                            Schemes</a>
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