<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">View Applied Schemes</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
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
                                <th>Insurance Agency Name</th>
                                <th>Scheme Category</th>
                                <th>Scheme Name</th>
                                <th>Scheme Amount</th>
                                <th>Applied Date</th>
                                <th>Status</th>
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
                                    <td>{$d.insAgName}</td>
                                    <td>{$d.schemeCat}</td>
                                    <td>{$d.schemeName}</td>
                                    <td>{$d.schemeAmnt}</td>
                                    <td>{$d.currentDate|date_format:"%d-%m-%Y"}</td>
                                    <td>
                                        {if $d.schemeStatus=='0'}Pending{else}{if $d.schemeStatus=='1'}Approved{else}Rejected{/if}{/if}
                                    </td>
                                    <td>
                                        {if $d.claimStatus=='0'}
                                            <a href="agencyCancelAppliedScheme.php?schemeApplyId={$d.schemeApplyId}"
                                                class="btn btn-danger me-2">&nbsp;Cancel&nbsp;</a>
                                        {else}
                                            <button class="btn btn-outline-danger disabled me-2">Claimed</button>
                                        {/if}
                                        {if $d.insuranceCard==null}
                                            <button class="w-lg btn btn-outline-secondary disabled">Not
                                                Available</button>
                                        {else}
                                            <a href="Insurance Cards/{$d.schemeApplyId}/{$d.insuranceCard}" download
                                                class="w-lg btn btn-secondary">Download
                                                Ins. Card</a>
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