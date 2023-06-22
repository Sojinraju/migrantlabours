<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Assigned Workers</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Aadhaar</th>
                                <th>Worker Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Start Date</th>
                                <th>No. of Days</th>
                                <th>Total Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$view2 item="d"}
                                <tr>
                                    <td>{$d.aadhaar}</td>
                                    <td>{$d.workerName}</td>
                                    <td>{$d.dob}</td>
                                    <td>{$d.gender}</td>
                                    <td>{$d.startDate|date_format:"%d-%m-%Y"}</td>
                                    <td>{$d.days}</td>
                                    <td>{$d.salary*$d.days}</td>
                                    <td><a href="agencyRemoveWorkAssigned.php?workAssignId={$d.workAssignId}"
                                    class="btn btn-danger">Remove</a></td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>