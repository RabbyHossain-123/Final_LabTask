<?php
require("../controller/login.php")
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login </title>
    <link rel="stylesheet" href="uedit.css">
    <script src="../Assets/JS/Log_form.js"></script>   
</head>

<body>
    <table align="center" width="700px" border="1">
        <tr>
            <td align="left" colspan="3">
                <img width=20% src=../Assets/logo.jpeg>
                <div align="right">
                    <a href="../View/home.html">Home &nbsp</a>
                    <a href="../View/Login.php">Login &nbsp</a>
                    <a href="../View/Registration.php">Registration &nbsp</a>
                    <a href="../View/Contact_us.html">Contact Us</a>
                </div>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3" height="300px">
                <fieldset>
                    <legend>Login</legend>
                    <form name="Log_form" method="post" action="" >
                        <table>
                            <tr>
                                <td>User Name</td>
                                <td><input type="text" name="username" value="<?php echo $username ?>" autocomplete="off"></td>
                                <td style="color:red"><?php echo $usernameErr ?></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" value="<?php echo $password ?>" autocomplete="off"></td>
                                <td style="color:red"><?php echo $passwordErr ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="Remember me">Remember Me</td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit" value="submit">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3" height="50px">
                <p> copyright@2022</p>
            </td>
        </tr>
    </table>
</body>

</html>