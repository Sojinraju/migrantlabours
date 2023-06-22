<?php /* Smarty version 2.6.26, created on 2023-01-28 14:44:19
         compiled from edit.tpl */ ?>
<html>

<head>
    <title>
        Edit Screen</title>
</head>

<body style="background: linear-gradient(to right, #6157ff,#ee49fd)">
    <center>
        <h2><u>Edit Details</u></h2>
        <form action="" method="post">
            <input type="hidden" name="hide" value="i">
            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>

                <table>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><input type="text" name="name" value="<?php echo $this->_tpl_vars['d']['Name']; ?>
"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td><textarea name="address"><?php echo $this->_tpl_vars['d']['Address']; ?>
</textarea></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>
                            <?php if ($this->_tpl_vars['d']['Gender'] == 'male'): ?>
                                <input type="radio" name="gender" value="male" checked>Male
                                <input type="radio" name="gender" value="female">Female
                            <?php else: ?>
                                <input type="radio" name="gender" value="male">Male
                                <input type="radio" name="gender" value="female" checked>Female
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" value="<?php echo $this->_tpl_vars['d']['Email']; ?>
"></td>
                    </tr>
                </table>
            <?php endforeach; endif; unset($_from); ?>
            <br><br>
            <input type="submit" value="Edit">
        </form>
    </center>
</body>

</html>