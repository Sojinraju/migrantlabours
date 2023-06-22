<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Applied Schemes</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance Schemes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Applied Schemes</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
{foreach from=$data item="d" key="k"}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Scheme Details - {$k+1}</h4>
        </div>
        <div class="card-body">
            {if $d.schemeApplyId==null}
                Worker is currently not approved by any Scheme
            {else}
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Scheme Category</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.schemeCat}" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Scheme Name</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.schemeName}" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Scheme Amount</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.schemeAmnt}" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Applied Date</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.currentDate|date_format:"%d-%m-%Y"}" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Validity</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.validity} Year(s)" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Details</label>
                    <div class="col-md-9">
                        <textarea class="form-control" readonly>{$d.schemeDetails}</textarea>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Interest Rate</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.interestRate}%" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Insurance Agency</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.insAgName}" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <center>
                        <a href="Insurance Cards/{$d.schemeApplyId}/{$d.insuranceCard}" download
                            class="btn btn-secondary me-4">Download Insurance Card</a>
                        <a href="workerViewPaymentDetails.php?schemeApplyId={$d.schemeApplyId}"
                            class="btn btn-warning bg-warning-gradient warning1 me-4">Payment Detials</a>
                        {if $d.claimStatus=='1'}
                            <button class="w-lg btn btn-outline-info disabled">Claimed Successfully</button>
                        {else}
                            {if $d.paymentCount==$d.validity}
                                <button class="btn w-lg btn-outline-success disabled me-4">Full Amount Paid</button>
                                {if $d.insClaimId==null}
                                    <a href="workerClaimInsurance.php?schemeApplyId={$d.schemeApplyId}" class="w-lg btn btn-info">Claim
                                        Insurance</a>
                                {else}
                                    <button class="w-lg btn btn-outline-info disabled">Claim Request Sent</button>
                                {/if}
                            {else}
                                {if $d.isAnnualAmountPaid==null}
                                    <a href="workerPaymentAnnualAmount.php?schemeAmnt={$d.schemeAmnt}&&schemeApplyId={$d.schemeApplyId}"
                                        class="w-lg btn btn-success me-4">Pay
                                        Annual Amount</a>
                                {else}
                                    <button class="btn w-lg btn-outline-success disabled me-4">Annual Amount Paid</button>
                                {/if}
                                {if $d.insClaimId==null}
                                    <a href="workerImmediateClaimInsurance.php?schemeApplyId={$d.schemeApplyId}"
                                        class="w-lg btn btn-warning">Immediate Claim</a>
                                {else}
                                    <button class="w-lg btn btn-outline-warning disabled">Immediate Claim Request Sent</button>
                                {/if}
                            {/if}
                        {/if}
                    </center>
                </div>
            {/if}
        </div>
    </div>
{/foreach}