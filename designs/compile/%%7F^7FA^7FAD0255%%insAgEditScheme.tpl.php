<?php /* Smarty version 2.6.26, created on 2023-03-29 13:56:53
         compiled from insAgEditScheme.tpl */ ?>
<?php echo '
    <html>

    <head>
        <title>Edit Scheme</title>
    </head>

    <body>
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-0">Edit Scheme</h2>
                    </div>

                </div>
            </div>
        </header>
        <center>
            <form method="post" action="">
                <input type="hidden" name="hide" value="a">
                <table style="border-color: transparent;">
                '; ?>

                <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f']):
?>
                    <tr>
                        <td>Scheme Category</td>
                        <td>:</td>
                        <td><input type="text" name="schemeCat" class="form-control" value="<?php echo $this->_tpl_vars['f']['schemeCat']; ?>
"></td>
                    </tr>
                    <tr>
                        <td>Scheme Name</td>
                        <td>:</td>
                        <td><input type="text" name="schemeName" class="form-control" value="<?php echo $this->_tpl_vars['f']['schemeName']; ?>
"></td>
                    </tr>
                    <tr>
                        <td>Scheme Amount</td>
                        <td>:</td>
                        <td><input type="number" name="schemeAmnt" class="form-control" value="<?php echo $this->_tpl_vars['f']['schemeAmnt']; ?>
"></td>
                    </tr>
                    <tr>
                        <td>Validity (No. of Years)</td>
                        <td>:</td>
                        <td><input type="number" name="validity" class="form-control" value="<?php echo $this->_tpl_vars['f']['validity']; ?>
"></td>
                    </tr>
                    <tr>
                        <td>Scheme Details</td>
                        <td>:</td>
                        <td><textarea name="schemeDetails" class="form-control"><?php echo $this->_tpl_vars['f']['schemeDetails']; ?>
</textarea></td>
                    </tr>
                    <tr>
                        <td>Interest Rate</td>
                        <td>:</td>
                        <td><input type="text" name="interestRate" class="form-control" value="<?php echo $this->_tpl_vars['f']['interestRate']; ?>
"></td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
                <?php echo '

                </table>
                <br>
                <input type="submit" value="Edit" class="btn btn-primary"><br><br>
            </form>
        </center>
    </body>

    </html>
    <br>
    <br>
    <br>
    <br>
'; ?>