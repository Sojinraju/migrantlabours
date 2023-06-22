<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Upload Crime Report</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="policeStationViewWorkers.php">Passed Workers</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Upload Crime Report</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <div class="card-title">Upload Crime Report</div>
    </div>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="hide" value="w">
            <div class="text-center">
                <div class="mb-4">
                    <input type="file" class="dropify" data-bs-height="100" name="crimeReport" required>
                </div>
                {* <h5 class="text-dark fw-semibold mb-4">{$d.workerName}</h5> *}
                <a href="policeStationViewWorkers.php" class="btn btn-danger me-4">Cancel</a>
                <input type="submit" value="Upload" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>