<?php /* Smarty version 2.6.26, created on 2023-03-29 14:20:50
         compiled from insuranceAgencyRegisterScheme.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Scheme Registration</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register New Scheme</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Scheme Registration</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="f">
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Category</label>
                <div class="col-md-9">
                    <input type="text" name="schemeCat" class="form-control" placeholder="Scheme Category">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Name</label>
                <div class="col-md-9">
                    <input type="text" name="schemeName" class="form-control" placeholder="Scheme Name">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Amount</label>
                <div class="col-md-9">
                    <input type="number" name="schemeAmnt" class="form-control" placeholder="Scheme Amount">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Validity</label>
                <div class="col-md-9">
                    <input type="number" name="validity" class="form-control" placeholder="Number of Years">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Scheme Details</label>
                <div class="col-md-9">
                    <textarea type="text" name="schemeDetails" class="form-control"
                        placeholder="Scheme Details"></textarea>
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Interest Rate</label>
                <div class="col-md-9">
                    <input type="text" name="interestRate" class="form-control" placeholder="Percentage of Interest">
                </div>
            </div>
            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <input type="submit" class="btn btn-primary" value="Register">
                </div>
            </div>
        </form>
    </div>
</div>
