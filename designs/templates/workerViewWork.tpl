<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">My Work</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">My Work</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li> -->
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Work Details</h4>
    </div>
    {foreach from=$data item="d"}
        <div class="card-body">
            {if $d.work==null}
                Worker is currently not applied to any Job
            {else}
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Work</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.work}" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">No. of Days</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.days}" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Salary</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.salary}" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Total Salary</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.days*$d.salary}" class="form-control" readonly>
                    </div>
                </div>
                <div class=" row mb-4">
                    <label class="col-md-3 form-label">Start Date</label>
                    <div class="col-md-9">
                        <input type="text" value="{$d.startDate|date_format:"%d-%m-%Y"}" class="form-control" readonly>
                    </div>
                </div>


            </div>
        {/if}
    {/foreach}
</div>