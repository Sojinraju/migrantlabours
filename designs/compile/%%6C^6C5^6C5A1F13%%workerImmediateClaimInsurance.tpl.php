<?php /* Smarty version 2.6.26, created on 2023-05-05 23:54:57
         compiled from workerImmediateClaimInsurance.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Upload Medical Report</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="workerEdit.php">View Applied Schemes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Upload Medical Report</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <div class="card-title">Upload Medical Report</div>
    </div>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="hide" value="h">
            <div class="text-center">
                <div class="mb-4">
                    <input type="file" class="dropify" data-bs-height="100" name="medicalReport" required>
                </div>
                <a href="workerViewAppliedSchemes.php" class="btn btn-danger me-4">Cancel</a>
                <input type="submit" value="Upload" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>