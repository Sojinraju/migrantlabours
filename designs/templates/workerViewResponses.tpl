<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Responses</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Complaints</a></li>
            <li class="breadcrumb-item active" aria-current="page">Responses</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row">
                                <div class="col-lg-12">
                                {if count($data)==0}
                                    No Responses
                                {/if}
                                {foreach from=$data item="d" key="k"}
                                    <div class="card text-white bg-primary ribbone-card">
                                        <div class="power-ribbone power-ribbone-top-left text-primary"><span
                                                class="bg-white"><i
                                                    class="fa fa-exclamation-circle text-primary"></i></span></div>

                                        <div class="card-header">
                                            <h3 class="card-title text-white ms-7">Complaint from {$d.currentDate|date_format:"%d-%m-%Y"}
                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Subject: {$d.subject}</p>
                                            <p class="card-text">Content: {$d.content}</p>
                                        </div>
                                        <div class="card-footer">
                                                <div class=" row mb-4">
                                                    <label class="col-md-1 text-white form-label">Response:</label>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control text-primary bg-white" readonly>{$d.adminReply}</textarea>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                {/foreach}
                                </div>
                            </div>