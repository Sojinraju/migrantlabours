<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Claim Details</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Claim Details</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Claim Details</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker Name</th>
                                <th>Aadhaar</th>
                                <th>Scheme Category</th>
                                <th>Scheme Name</th>
                                <th>Scheme Amount</th>
                                <th>Validity</th>
                                <th>Claim Type</th>
                                <th>Applied Date</th>
                                <th>Claimed Date</th>
                                <th>Credited Date</th>
                                <th>Received Amount</th>
                                <th>Paid Amount</th>
                                <th>Card Holder Name</th>
                                <th>Card No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data item="d"}
                                <td>{$d.workerName}</td>
                                <td>{$d.aadhaar}</td>
                                <td>{$d.schemeCat}</td>
                                <td>{$d.schemeName}</td>
                                <td>{$d.schemeAmnt}</td>
                                <td>{$d.validity}</td>
                                <td>{if $d.medicalReport==''}Normal{else}Immediate{/if}</td>
                                <td>{$d.apDate|date_format:"%d-%m-%Y"}</td>
                                <td>{$d.clDate|date_format:"%d-%m-%Y"}</td>
                                <td>{$d.crDate|date_format:"%d-%m-%Y"}</td>
                                <td>{$d.receivedAmount}</td>
                                <td>{$d.paidAmount}</td>
                                <td>{$d.cardHolderName}</td>
                                <td>XXXX XXXX XXXX {$d.cardNo}</td>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>