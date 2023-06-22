<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Mark Attendance</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Workers</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Attendance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mark Attendance</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mark Attendance of Workers on {php}echo date('d-m-Y');{/php}</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker ID</th>
                                <th>Worker Name</th>
                                <th>Photo</th>
                                <th>Address</th>
                                <th>DOB</th>
                                <th>Street</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Pincode</th>
                                <th>Contact No.</th>
                                <th>Aadhaar</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data item="d"}
                                <tr>
                                    <td>{$d.workerId}</td>
                                    <td>{$d.workerName}</td>
                                    <td>
                                        <img src="photos/{$d.wlogid}/{$d.photo}"
                                            class="avatar avatar-xxl bradius cover-image">
                                    </td>
                                    <td>{$d.address}</td>
                                    <td>{$d.dob}</td>
                                    <td>{$d.street}</td>
                                    <td>{$d.district}</td>
                                    <td>{$d.city}</td>
                                    <td>{$d.pincode}</td>
                                    <td>{$d.contactNo}</td>
                                    <td>{$d.aadhaar}</td>
                                    <td>{$d.email}</td>
                                    <td>
                                        {if $d.attendance==NULL}
                                            <a href="agencyPresentWorker.php?worker_loginId={$d.wlogid}"
                                                class=" btn w-lg btn-success me-2">Present</a>
                                            <a href="agencyAbsentWorker.php?worker_loginId={$d.wlogid}"
                                                class="btn w-lg btn-danger">Absent</a>
                                        {else}
                                            {if $d.attendance=='Present'}agencyAttendanceWorkers
                                                <button class=" btn w-lg btn-outline-success disabled me-2">Marked Present</button>
                                                <a href="agencyToggleAttendanceWorker.php?worker_loginId={$d.wlogid}"
                                                    class="btn w-lg btn-danger">Absent</a>
                                            {else}
                                                <a href="agencyToggleAttendanceWorker.php?worker_loginId={$d.wlogid}"
                                                    class=" btn w-lg btn-success me-2">Present</a>
                                                <button class="btn w-lg btn-outline-danger disabled">Marked Absent</button>
                                            {/if}
                                        {/if}
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>