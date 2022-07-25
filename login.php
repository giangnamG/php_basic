<?php
    require './config.php';
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username!="" && $password!=""){
            $sql="select * from `user-login` where username='$username' and password='$password'";
            if(mysqli_num_rows(mysqli_query($conn,$sql))){
                echo "<script>window.location='./mainpage.php'</script>";
            }else{
            echo "<script>alert('username or password is wrong !')</script>";
            echo "<script>window.location='./index.html'</script>";
            }
        }else{
            echo "<script>alert('empty info !')</script>";
            echo "<script>window.location='./index.html'</script>";
        }
    }
?>
