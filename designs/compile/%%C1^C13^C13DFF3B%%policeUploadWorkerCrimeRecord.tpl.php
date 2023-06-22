<?php /* Smarty version 2.6.26, created on 2023-04-04 11:44:22
         compiled from policeUploadWorkerCrimeRecord.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Upload Crime Record</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="policeStationViewWorkers.php">Passed Workers</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Upload Crime Record</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <div class="card-title">Upload Crime Record</div>
    </div>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="hide" value="f">
            <div class="text-center">
                <div class="mb-4">
                    <input type="file" class="dropify" data-bs-height="100" name="photo" required>
                </div>
                                <a href="policeStationViewWorkers.php" class="btn btn-danger me-4">Cancel</a>
                <input type="submit" value="Upload" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>