<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Death Case Passing</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Death Case Passing</a></li>
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
                                        {if $d.deathReport==null}
                                            Alive
                                        {else}
                                            Died
                                        {/if}
                                    </td>
                                    <td>
                                        {if $d.deathReport==null}
                                            <a href="agencyUploadWorkerDeathReport.php?worker_loginId={$d.wlogid}"
                                                class="btn btn-primary w-lg me-2">Upload DR</a>
                                        {else}
                                            <a href="agencyUploadWorkerDeathReport.php?worker_loginId={$d.wlogid}"
                                                class="btn btn-orange w-lg me-2">Reupload DR</a>
                                        {/if}

                                        {if $d.deathReport==null}
                                            <button class="btn btn-success disabled w-lg">Pass to LC</button>
                                        {else}
                                            {if $d.deathPassingStatus=='0'}
                                                <a href="agencyPassWorkerDeathToLabourCommission.php?worker_loginId={$d.wlogid}"
                                                    class="btn btn-success w-lg">Pass to LC</a>
                                            {else}
                                                <button class="btn btn-outline-success disabled w-lg">Passed to LC</button>
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