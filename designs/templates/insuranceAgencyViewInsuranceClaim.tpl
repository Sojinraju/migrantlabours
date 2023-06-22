<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Insurance Claims</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Insurance Claims</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Insurance Claims</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker Name</th>
                                <th>Worker Photo</th>
                                <th>Aadhaar</th>
                                <th>Agency Name</th>
                                <th>Scheme Category</th>
                                <th>Scheme Name</th>
                                <th>Scheme Amount</th>
                                <th>Applied Date</th>
                                <th>Validity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data item="d"}
                                <tr>
                                    <td>{$d.workerName}</td>
                                    <td> <img src="photos/{$d.wlogid}/{$d.photo}"
                                            class="avatar avatar-xxl bradius cover-image"></td>
                                    <td>{$d.aadhaar}</td>
                                    <td>{$d.agencyName}</td>
                                    <td>{$d.schemeCat}</td>
                                    <td>{$d.schemeName}</td>
                                    <td>{$d.schemeAmnt}</td>
                                    <td>{$d.currentDate|date_format:"%d-%m-%Y"}</td>
                                    <td>{$d.validity}</td>
                                    <td>
                                        <a href="insuranceAgencyCancelInsuranceClaim.php?schemeApplyId={$d.schemeApplyId}"
                                            class="btn btn-danger me-2">Reject</a>
                                        {if $d.claimStatus=='0'}
                                            <a href="insuranceAgencyGrantClaim.php?schemeApplyId={$d.schemeApplyId}"
                                                class="btn w-lg btn-warning bg-warning-gradient warning1">Check Details
                                                and Pay</a>
                                        {else}
                                            {if $d.medicalReport==null}
                                                <button class="btn w-lg btn-outline-warning disabled">&emsp;Claimed
                                                    (Normal)&emsp;</button>
                                            {else}
                                                <button class="btn w-lg btn-outline-warning disabled">Claimed
                                                    (Immediate)</button>
                                            {/if}
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