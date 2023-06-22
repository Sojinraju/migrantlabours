<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Payment Details</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="workerViewAppliedSchemes.php">Applied Schemes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Payment Details</li>
        </ol>
    </div>
</div>

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
                <h3 class="card-title">Payment Details</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Card Holder Name</th>
                                <th>Card No.</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data item="d"}
                                <tr>
                                    <td>{$d.year}</td>
                                    <td>{$d.cardHolderName}</td>
                                    <td>XXXX XXXX XXXX {$d.cardNo}</td>
                                    <td>{$d.amount}</td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>