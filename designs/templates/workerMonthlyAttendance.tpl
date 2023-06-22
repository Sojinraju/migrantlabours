<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Monthly Attendance</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Attendance</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Monthly Attendance
            </li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Select Month</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="d">
            <div class="row">
                <label class="col-md-3 form-label">Month</label>
                <div class="col-md-9">
                    <div class="form-group">
                        <select class="form-control form-select select2" data-placeholder="Choose Month" name="month"
                            required id="month">
                            <option></option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-0 row justify-content-end">
                <div class="col-md-9">
                    <input type="submit" class="btn btn-primary" value="View Status">
                </div>
            </div>
        </form>
    </div>
</div>