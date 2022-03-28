<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <table>
        <caption>Login</caption>
        <form action="loginprocess.php" method="post">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Password" required></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="save"></td>
            </tr>
        </form>
    </table>
    <a href="index.php">Back to home</a>
</body>
</html>