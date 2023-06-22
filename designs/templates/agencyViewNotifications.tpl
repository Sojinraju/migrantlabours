<div class="page-header">
    <h1 class="page-title">Notifications</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Notifications</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li> -->
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        {foreach from=$data item="d" key="k"}

            <div class="card text-white bg-primary ribbone-card">
                <div class="power-ribbone power-ribbone-top-left text-primary"><span class="bg-white"><i
                            class="fa fa-bell text-primary"></i></span></div>

                <div class="card-header">
                    <h3 class="card-title text-white ms-7">{$d.currentDate|date_format:"%d-%m-%Y"}</h3>

                </div>
                <div class="card-body">
                    <p class="card-text">{$d.notification}</p>
                </div>
            </div>

        {/foreach}
    </div>
</div>