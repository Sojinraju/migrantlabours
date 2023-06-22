<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">View Applied Schemes</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Applied Schemes</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Applied Schemes to Workers</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker Name</th>
                                <th>Worker Photo</th>
                                <th>Worker Address</th>
                                <th>DOB</th>
                                <th>Worker Phone</th>
                                <th>Agency Name</th>
                                <th>Agency Phone</th>
                                <th>Scheme Category</th>
                                <th>Scheme Name</th>
                                <th>Scheme Amount</th>
                                <th>Applied Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data item="d"}
                                <tr>
                                    <td>{$d.workerName}</td>
                                    <td> <img src="photos/{$d.wlogid}/{$d.photo}"
                                            class="avatar avatar-xxl bradius cover-image"></td>
                                    <td>{$d.address}</td>
                                    <td>{$d.dob}</td>
                                    <td>{$d.contactNo}</td>
                                    <td>{$d.agencyName}</td>
                                    <td>{$d.agency_contactNo}</td>
                                    <td>{$d.schemeCat}</td>
                                    <td>{$d.schemeName}</td>
                                    <td>{$d.schemeAmnt}</td>
                                    <td>{$d.currentDate|date_format:"%d-%m-%Y"}</td>
                                    <td>
                                        {if $d.claimStatus=='0'}
                                            {if $d.schemeStatus=='2'}
                                                <a href="insuranceAgencyApproveScheme.php?schemeApplyId={$d.schemeApplyId}"
                                                    class="w-lg btn btn-success me-2">Accept</a>
                                                <button class="w-lg btn btn-outline-danger disabled me-2">Rejected</button>
                                            {else}
                                                {if $d.schemeStatus=='1'}
                                                    <button class="w-lg btn btn-outline-success me-2 disabled">Accepted</button>
                                                    <a href="insuranceAgencyRejectScheme.php?schemeApplyId={$d.schemeApplyId}"
                                                        class="w-lg btn btn-danger me-2">Reject</a>
                                                {else}
                                                    <a href="insuranceAgencyApproveScheme.php?schemeApplyId={$d.schemeApplyId}"
                                                        class="w-lg btn btn-success me-2">Accept</a>
                                                    <a href="insuranceAgencyRejectScheme.php?schemeApplyId={$d.schemeApplyId}"
                                                        class="w-lg btn btn-danger me-2">Reject</a>
                                                {/if}
                                            {/if}
                                        {else}
                                            <button class="w-lg btn btn-outline-success me-2 disabled">&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Already Claimed&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                        {/if}
                                        {if $d.schemeStatus=='1'}
                                            {if $d.insuranceCard==null}
                                                <a href="insuranceAgencyUploadCard.php?schemeApplyId={$d.schemeApplyId}"
                                                    class="w-lg btn btn-primary me-2">Upload Ins. Card</a>
                                            {else}
                                                <a href="insuranceAgencyUploadCard.php?schemeApplyId={$d.schemeApplyId}"
                                                    class="w-lg btn btn-warning me-2">Reupload Ins. Card</a>
                                            {/if}
                                        {else}
                                            <button class="w-lg btn btn-outline-primary disabled me-2">Not Available</button>
                                        {/if}
                                        <a href="insuranceAgencyViewPaymentDetails.php?schemeApplyId={$d.schemeApplyId}"
                                            class="btn w-lg btn-warning bg-warning-gradient warning1 me-4">Payment
                                            Details</a>
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