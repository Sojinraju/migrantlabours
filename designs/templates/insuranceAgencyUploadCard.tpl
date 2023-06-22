<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Upload Insurance Card</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Insurance</a></li>
            <li class="breadcrumb-item active"><a href="insuranceAgencyViewAppliedSchemes.php">Insurance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Upload Insurance Card</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <div class="card-title">Upload Insurance Card</div>
    </div>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="hide" value="w">
            <div class="text-center">
                <div class="mb-4">
                    <input type="file" class="dropify" data-bs-height="100" name="insuranceCard" required>
                </div>
                <a href="insuranceAgencyViewAppliedSchemes.php" class="btn btn-danger me-4">Cancel</a>
                <input type="submit" value="Upload" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>