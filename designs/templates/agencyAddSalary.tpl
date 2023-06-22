<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Add Salary</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Salary</a></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add Salary for Job</h4>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="d">
            <div class="row">
                <label class="col-md-3 form-label">Work</label>
                <div class="col-md-9">
                    <div class="form-group">
                        <select class="form-control form-select select2" data-placeholder="Choose Work" name="work"
                            required>
                            <option></option>
                            <option value="Construction worker">Construction worker</option>
                            <option value="Flooring installer">Flooring installer</option>
                            <option value="Electrician">Electrician</option>
                            <option value="Plumber">Plumber</option>
                            <option value="Carpenter">Carpenter</option>
                            <option value="Mason">Mason</option>
                            <option value="Roofer">Roofer</option>
                            <option value="Painter">Painter</option>
                            <option value="Welder">Welder</option>
                            <option value="Heavy equipment operator">Heavy equipment operator
                            </option>
                            <option value="Farm worker">Farm worker</option>
                            <option value="Fisherman">Fisherman</option>
                            <option value="Housekeeper">Housekeeper</option>
                            <option value="Waiter">Waiter</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Daily Wage</label>
                <div class="col-md-9">
                    <input type="number" name="salary" class="form-control" placeholder="Salary" required>
                </div>
            </div>
            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Salary Details</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                <thead>
                    <tr>
                        <th>Work Category</th>
                        <th>Salary</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$data item="d"}
                        <tr>
                            <td>{$d.work}</td>
                            <td>{$d.salary}</td>
                            <td>
                                <a href="agencyEditSalary.php?id={$d.salaryId}" class=" btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>


            </table>
        </div>
    </div>
</div>