<?php /* Smarty version 2.6.26, created on 2023-05-10 09:50:15
         compiled from agencyViewNotifications.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'agencyViewNotifications.tpl', 19, false),)), $this); ?>
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
        <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['d']):
?>

            <div class="card text-white bg-primary ribbone-card">
                <div class="power-ribbone power-ribbone-top-left text-primary"><span class="bg-white"><i
                            class="fa fa-bell text-primary"></i></span></div>

                <div class="card-header">
                    <h3 class="card-title text-white ms-7"><?php echo ((is_array($_tmp=$this->_tpl_vars['d']['currentDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y")); ?>
</h3>

                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo $this->_tpl_vars['d']['notification']; ?>
</p>
                </div>
            </div>

        <?php endforeach; endif; unset($_from); ?>
    </div>
</div>