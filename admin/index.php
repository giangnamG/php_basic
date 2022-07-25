
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div>
        <h3>login</h3>
        <form action="./login.php" method="POST" name="login">
            <label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="username" placeholder="username or email">
            &nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="password" placeholder="password"> 
            &nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="login" value="sign in"> 
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="./register.php">sign up?</a>
        </form>
</body>
</html>