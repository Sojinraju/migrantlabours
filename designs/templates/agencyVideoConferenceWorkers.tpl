<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Video Conference</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Video Conference</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li> -->
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Death Status</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Worker Name</th>
                                <th>Photo</th>
                                <th>DOB</th>
                                <th>Pincode</th>
                                <th>Aadhaar</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data item="d"}
                                <tr>
                                    <td>{$d.workerName}</td>
                                    <td>
                                        <img src="photos/{$d.wlogid}/{$d.photo}"
                                            class="avatar avatar-xxl bradius cover-image">
                                    </td>
                                    <td>{$d.dob}</td>
                                    <td>{$d.pincode}</td>
                                    <td>{$d.aadhaar}</td>
                                    <td>
                                        {if $d.status==1}
                                            Approved
                                        {else}
                                            {if $d.status==2}
                                                Rejected
                                            {else}
                                                Unconfirmed
                                            {/if}
                                        {/if}
                                    </td>
                                    <td>
                                        {if $d.videoId==null}
                                            <a href="agencyScheduleVideoCall.php?worker_loginId={$d.wlogid}"
                                                class="btn btn-success me-2" style="width:181.75px">Schedule Video Call</a>
                                        {else}
                                            <button class="btn btn-outline-success me-2 disabled">{$d.scheduledDate|date_format} {$d.scheduledTime|date_format:"%I:%M %p"}</button>
                                            {if $smarty.now >= $d.strTime}
                                                <a href="{$d.url}" class="btn btn-warning">Start Video Call</a>
                                            {else}
                                                <button class="btn btn-outline-warning disabled">Start Video Call</button>
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