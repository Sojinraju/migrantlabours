<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Edit Scheme</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active"><a href="insuranceAgencySchemes.php">Schemes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Scheme</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="a">
            {foreach from=$data item="f"}
                <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Category</label>
                <div class="col-md-9">
                    <input type="text" name="schemeCat" class="form-control" value="{$f.schemeCat}"
                        placeholder="Scheme Category">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Name</label>
                <div class="col-md-9">
                    <input type="text" name="schemeName" class="form-control" value="{$f.schemeName}"
                        placeholder="Scheme Name">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Amount</label>
                <div class="col-md-9">
                    <input type="number" name="schemeAmnt" class="form-control" value="{$f.schemeAmnt}"
                        placeholder="Scheme Amount">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Validity</label>
                <div class="col-md-9">
                    <input type="number" name="validity" class="form-control" value="{$f.validity}"
                        placeholder="Number of Years">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Details</label>
                <div class="col-md-9">
                    <textarea type="text" name="schemeDetails" class="form-control"
                        placeholder="Scheme Details">{$f.schemeDetails}</textarea>
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Interest Rate</label>
                <div class="col-md-9">
                    <input type="text" name="interestRate" class="form-control" value="{$f.interestRate}"
                        placeholder="Percentage of Interest">
                </div>
            </div>
            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </div>
            {/foreach}
        </form>
    </div>
</div>

{* This is the home page content of index *}
