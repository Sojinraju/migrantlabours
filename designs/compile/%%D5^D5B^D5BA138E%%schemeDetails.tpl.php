<?php /* Smarty version 2.6.26, created on 2023-03-18 08:26:38
         compiled from schemeDetails.tpl */ ?>
<?php echo '
    <html>

    <head>
        <title>Scheme Details</title>
    </head>

    <body>
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-0">Scheme Details</h2>
                    </div>

                </div>
            </div>
        </header>
        <center>
            <div style="padding-left: 25px;padding-right: 25px;">
                <table class="table table-stripped table-bordered">
                    <tr>
                        <th>Scheme Category</th>
                        <th>Scheme Name</th>
                        <th>Scheme Amount</th>
                        <th>Validity</th>
                        <th>Scheme Details</th>
                        <th>Interest Rate</th>
                        <th colspan="2">Actions</th>
                    </tr>
                '; ?>

                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                    <tr>
                        <td><?php echo $this->_tpl_vars['d']['schemeCat']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['d']['schemeName']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['d']['schemeAmnt']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['d']['validity']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['d']['schemeDetails']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['d']['interestRate']; ?>
</td>
                        <td><a href="insAgEditScheme.php?id=<?php echo $this->_tpl_vars['d']['schemeId']; ?>
" class=" btn btn-success">Edit</a></td>
                        <td><a href="insAgencyDeleteScheme.php?id=<?php echo $this->_tpl_vars['d']['schemeId']; ?>
" class=" btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
                <?php echo '

                </table>
            </div>
            <br>
            <br>
            <input type="button" value="Go Back" onclick="window.location=\'insuranceAgencyHome.php\'">
        </center>
    </body>

    </html>
    <br>
    <br>
    <br>
    <br>
'; ?>