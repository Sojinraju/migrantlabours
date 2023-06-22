<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Edit Salary</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="agencyAddSalary.php">Salary</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Salary</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Salary</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="d">
            {foreach from=$data item="d"}
                <div class="row mb-4">
                    <label class="col-md-3 form-label">Work</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="{$d.work}" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Daily Wage</label>
                    <div class="col-md-9">
                        <input type="number" name="salary" value={$d.salary} class="form-control" required>
                    </div>
                </div>
            {/foreach}
            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <a href="agencyAddSalary.php" class="btn btn-danger me-4">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </div>
        </form>
    </div>
</div>