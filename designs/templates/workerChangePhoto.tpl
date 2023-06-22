<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Change Profile Picture</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="workerEdit.php">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Change Profile Picture</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <div class="card-title">Change Profile Picture</div>
    </div>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="hide" value="f">
            <div class="text-center">
                {foreach from=$data item="d"}
                    <div class="mb-4">
                        <input type="file" class="dropify" data-bs-height="100"
                            data-default-file="photos/{$d.wlogid}/{$d.photo}" name="photo" required>
                    </div>
                    <h5 class="text-dark fw-semibold mb-4">{$d.workerName}</h5>
                {/foreach}
                <a href="workerEdit.php" class="btn btn-danger me-4">Cancel</a>
                <input type="submit" value="Change" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>