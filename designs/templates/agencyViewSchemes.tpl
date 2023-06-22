<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">View Schemes</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active"><a href="agencyViewIns.php">Apply Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Schemes</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Schemes in Insurance Agency</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Scheme Category</th>
                                <th>Scheme Name</th>
                                <th>Scheme Amount</th>
                                <th>Validity</th>
                                <th>Scheme Details</th>
                                <th>Interest Rate</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data item="d"}
                                <tr>
                                    <td>{$d.schemeCat}</td>
                                    <td>{$d.schemeName}</td>
                                    <td>{$d.schemeAmnt}</td>
                                    <td>{$d.validity}</td>
                                    <td>{$d.schemeDetails}</td>
                                    <td>{$d.interestRate}</td>
                                    <td><a href="agencyInsApplyWorkers.php?schemeId={$d.schemeId}"
                                            class=" btn btn-primary me-2">Apply for Workers</a></td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>