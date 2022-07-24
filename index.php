<?php
    require './config.php';
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username!="" && $password!=""){
            $sql="select * from `user-login` where username='$username' and password='$password'";
            if(mysqli_num_rows(mysqli_query($conn,$sql))){
                echo "<script>window.location='./mainpage.php'</script>";
            }else   
            echo "<script>alert('username or password is wrong !')</script>";
        }else
            echo "<script>alert('empty info !')</script>";

    }

?>



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
        <form method="POST" name="login">
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