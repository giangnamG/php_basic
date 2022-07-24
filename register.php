<?php
    require './config.php';
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cf_pasWd = $_POST['cf-password'];
        $email    = $_POST['email'];
        if($username!=="" && $password!=="" && $cf_pasWd!=="" && $email!==""){
            if(!strpos($username,' ')&&!strpos($password,' ')&&!strpos($cf_pasWd,' ')&&!strpos($email,' ')){
                if($password===$cf_pasWd){
                    $sql = "select * from `user-login` where username='$username' or email='$email'";
                    if(mysqli_num_rows(mysqli_query($conn,$sql))>0)
                        echo "<script>alert('user already exited !')</script>";
                    else{
                        $sql = "insert into `user-login` (`username`,`password`,`email`) values ('$username','$password','$email'), ('',MD5('$password'),'')";
                        mysqli_query($conn,$sql);
                        unset($_POST['register']);
                        echo "<script>alert('success !')</script>";
                    }
                }
            }else
                echo "<script>alert('info not valid !')</script>";

        }else
            echo "<script>alert('empty info !')</script>";
        unset($_POST['register']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <div>
        <h3>register</h3>
        <form method="POST">
            <label>Email</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="email" placeholder="email">
            <br><br>
            <label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="username" placeholder="username">
            <br><br>
            <label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="password" placeholder="password"> 
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label>Confirm password</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="cf-password" placeholder="confirm password"> 
            <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="register" value="register"> 
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="./index.php">login?</a>
        </form>
</body>
</html>