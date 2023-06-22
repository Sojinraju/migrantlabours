<?php /* Smarty version 2.6.26, created on 2023-04-23 08:30:44
         compiled from workerReuploadMedicalReport.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Reupload Medical Report</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="workerEdit.php">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reupload Medical Report</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <div class="card-title">Reupload Medical Report</div>
    </div>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="hide" value="f">
            <div class="text-center">
                <div class="mb-4">
                    <input type="file" class="dropify" data-bs-height="100" name="medicalReport" required>
                </div>
                <h5 class="text-dark fw-semibold mb-4"><?php echo $this->_tpl_vars['d']['workerName']; ?>
</h5>
                <a href="workerEdit.php" class="btn btn-danger me-4">Cancel</a>
                <input type="submit" value="Upload" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>