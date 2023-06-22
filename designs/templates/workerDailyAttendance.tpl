<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Daily Attendance</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Attendance</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Daily Attendance
            </li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Select Date</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="c">
            <div class="row mb-4">
                <label class="col-md-3 form-label">Date</label>
                <div class="col-md-9">
                    <input type="date" name="date" class="form-control" required id="date" />
                </div>
            </div>
            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <input type="submit" class="btn btn-primary" value="View Status">
                </div>
            </div>
        </form>
    </div>
</div>