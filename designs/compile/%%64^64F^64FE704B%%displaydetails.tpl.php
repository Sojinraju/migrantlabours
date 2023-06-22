<?php /* Smarty version 2.6.26, created on 2023-01-24 10:52:05
         compiled from displaydetails.tpl */ ?>
<html>

<head>
    <title>Display Details</title>
</head>

<body style="background: linear-gradient(to right, #103CE7,#64E9FF)">
    <center>
        <table border="1" style="border-collapse: collapse; border: 2px solid white">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Email</th>
            </tr>
            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                <tr>
                    <td><?php echo $this->_tpl_vars['d']['Name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['Address']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['Gender']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['d']['Email']; ?>
</td>
                    <td><a href="edit.php?id=<?php echo $this->_tpl_vars['d']['RegistrationID']; ?>
">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $this->_tpl_vars['d']['RegistrationID']; ?>
">Delete</a></td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
        <br>
        <br>
        <a href="logout.php">Logout</a>
    </center>
</body>

</html>