<?php /* Smarty version 2.6.26, created on 2023-05-10 12:16:51
         compiled from workerComplaint.tpl */ ?>
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Register Complaint</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Complaints</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register Complaint</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="card">
    <div class="card-header">
        <div class="card-title">Complaint</div>
    </div>
    <div class="card-body">
        <form method="post" action="">
            <input type="hidden" name="hide" value="h">
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Subject</label>
                <div class="col-md-9">
                    <input type="text" name="subject" class="form-control" placeholder="Complaint Subject">
                </div>
            </div>
            <div class=" row mb-4">
                <label class="col-md-3 form-label">Content</label>
                <div class="col-md-9">
                    <textarea name="content" class="form-control" placeholder="Complaint Description"></textarea>
                </div>
            </div>
            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <input type="submit" class="btn btn-primary" value="Send to Admin">
                </div>
            </div>
        </form>
    </div>
</div>