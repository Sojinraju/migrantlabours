<?php /* Smarty version 2.6.26, created on 2023-05-01 05:13:12
         compiled from agencyUploadWorkerDeathReport.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Upload Death Report</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="agencyPassWorkerDeath.php">Death Case Passing</a>
            </li>a
            <li class="breadcrumb-item active" aria-current="page">Upload Death Report</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <div class="card-title">Upload Death Report</div>
    </div>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="hide" value="h">
            <div class="text-center">
                <div class="mb-4">
                    <input type="file" class="dropify" data-bs-height="100" name="deathReport" required>
                </div>
                                <a href="agencyPassWorkerDeath.php" class="btn btn-danger me-4">Cancel</a>
                <input type="submit" value="Upload" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>