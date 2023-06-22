<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Check Details and Pay</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active"><a
                    href="insuranceAgencyViewInsuranceClaim.php">Insurance Claims</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Check Details and Pay</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->


<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Scheme Details</div>
            </div>
            <div class="card-body">
                {foreach from=$view item="v"}
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Scheme Amount Per Year</label>
                        <div class="col-md-9">
                            <input type="text" value="{$v.schemeAmnt}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Scheme Validity</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{$v.validity} Year(s)" readonly>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Paid Amount</label>
                        <div class="col-md-9">
                            {if $v.totalAmntPaid==null}
                                <input type="text" class="form-control" readonly value="0">
                            {else}
                                <input type="text" class="form-control" readonly value="{$v.totalAmntPaid}">
                            {/if}
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Amount to be Paid</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{$v.schemeAmnt*$v.validity-$v.totalAmntPaid}"
                                readonly>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Claim Details</div>
            </div>
            <div class="card-body">
                {foreach from=$data item="d"}
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Claim Type</label>
                        <div class="col-md-9">
                            {if $d.medicalReport==null}
                                <input type="text" value="Normal Claim" class="form-control" readonly>
                            {else}
                                <input type="text" value="Immediate Claim" class="form-control" readonly>
                            {/if}
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Claim Date</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" readonly
                                value="{$d.currentDate|date_format:"%d-%m-%Y"}">
                        </div>
                    </div>
                    {if $d.medicalReport!=null}
                        <div class="row">
                            <center><a href="Insurance Medical Reports/{$d.schemeApplyId}/{$d.medicalReport}" download
                                    class="btn btn-secondary">Download Medical Report</a></center>
                        </div>
                    {/if}
                {/foreach}
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Payable Amount</div>
            </div>
            <div class="card-body">
                <form action="" method="post" class="form-horizontal">
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">Enter Payable Amount</label>
                        <div class="col-md-9">
                            <input type="number" name="amount" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-0 mt-4 row justify-content-end">
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-primary" value="Pay" name="pay">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>