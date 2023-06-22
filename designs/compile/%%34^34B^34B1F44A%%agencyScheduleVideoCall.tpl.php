<?php /* Smarty version 2.6.26, created on 2023-05-11 15:26:17
         compiled from agencyScheduleVideoCall.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Schedule Video Call</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Video Conference</a></li>
            <li class="breadcrumb-item active" aria-current="page">Schedule Video Call</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Schedule Date and Time</h3>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="hide" value="h">
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Schedule Date</label>
                <div class="col-md-9">
                    <input type="date" name="scheduledDate" class="form-control" required>
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Schedule Time</label>
                <div class="col-md-9">
                    <input type="time" name="scheduledTime" class="form-control" required>
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