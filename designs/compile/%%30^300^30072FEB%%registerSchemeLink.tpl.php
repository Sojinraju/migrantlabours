<?php /* Smarty version 2.6.26, created on 2023-03-18 06:59:57
         compiled from registerSchemeLink.tpl */ ?>
<?php echo '
    <html>

    <head>
        <title>Register Scheme Link</title>
    </head>

    <body>
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-0">Register Scheme</h2>
                    </div>

                </div>
            </div>
        </header>
        <center>
            <form method="post" action="">
                <input type="hidden" name="hide" value="f">
                <table style="border-color: transparent;">
                    <tr>
                        <td>Scheme Category</td>
                        <td>:</td>
                        <td><input type="text" name="schemeCat" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Scheme Name</td>
                        <td>:</td>
                        <td><input type="text" name="schemeName" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Scheme Amount</td>
                        <td>:</td>
                        <td><input type="number" name="schemeAmnt" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Validity (No. of Years)</td>
                        <td>:</td>
                        <td><input type="number" name="validity" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Scheme Details</td>
                        <td>:</td>
                        <td><textarea name="schemeDetails" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>Interest Rate</td>
                        <td>:</td>
                        <td><input type="text" name="interestRate" class="form-control"></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Register" class="btn btn-primary"><br><br>
            </form>
        </center>
    </body>

    </html>
    <br>
    <br>
    <br>
    <br>
'; ?>