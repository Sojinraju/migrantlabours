<?php /* Smarty version 2.6.26, created on 2023-01-24 07:40:12
         compiled from registration.tpl */ ?>
<html>

<head>
    <title>Registration</title>
</head>

<body style="background: linear-gradient(to right, #ff0000,#ffff00)">
    <center>
        <h2><u>Registration</u></h2>
        <form method="post" action="">
            <input type="hidden" name="hide" value="h">
            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td><textarea name="address"></textarea></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td> <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <br><br>
            <input type="submit" value="REGISTER">

        </form>
    </center>
</body>

</html>