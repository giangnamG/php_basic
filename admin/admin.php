<?php
    session_start();
    if(!isset($_SESSION['logged-admin'])){
        echo "<script>alert('you are not admin')</script>";
        echo "<script>window.location='./index.php'</script>";
    }
    function renderUsers(){
        $conn=mysqli_connect("localhost:3325","root","","php_web3");
        $sql = "select * from `user-login`";
        $result = mysqli_query($conn,$sql);
        $users = array();
        if(!empty($result)){
            while($row = mysqli_fetch_assoc($result)){
                $user_tmp = array('id'=>$row['id'],'username'=>$row['username'],'password'=>$row['password'],'email'=>$row['email']);
                array_push($users,$user_tmp);
            }
        }
        return $users;
    }
    function logout(){
        if(isset($_GET['logout'])){
            unset($_SESSION['logged-admin']);
            echo "<script>window.location='./index.php'</script>";
        }
    }

    $users = renderUsers();
    logout();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <script src="./render.js"></script>
    <title>manager</title>
</head>
<body>
    <div class="hi-admin">
        <h4>hi admin</h4>
        <form action="" method="get">
            <input type="submit" name="logout" value="logout">
        </form>
    </div>

    <div class="option">
        <center style="color: red;">admin option</center>
        <table id="table-option" border="1" width="95%">
            <tr>
                <td width="50%"><a href="#" onclick="user_user()"><center>edit users</center></a></td>
                <td width="50%"><a href="#" onclick="product()"><center>edit product</center></a></td>
            </tr>
        </table>
    </div>
    <br><br><br>
    <div id="renderUsers">
        <table border="1"width="90.5%" id="content-users"></table>
        <script>
            tab_content =`
            <tr>
                <td width="5%"><center>Id</center></td>
                <td width="25%"><center>Username</center></td>
                <td width="25%"><center>Password</center></td>
                <td width="30%"><center>Email</center></td>
                <td width="15%"><center>Hành Động</center></td>
            </tr>`
        </script>
        <?php foreach($users as $each_user): ?>
                <script>
                    tab_content += `
                    <tr>
                        <td width="5%"><center><?php echo $each_user['id']?></center></td>
                        <td width="25%"><center><?php echo $each_user['username']?></center></td>
                        <td width="25%"><center><?php echo $each_user['password']?></center></td>
                        <td width="30%"><center><?php echo $each_user['email']?></center></td>
                        <td width="15%"><center>
                            <a href="#">edit</a>
                            <a href="#">delete</a>
                        </center></td>
                    </tr>`
            </script>
        <?php endforeach?>
        <script>
                document.getElementById('content-users').innerHTML=tab_content;
        </script> 
        
    </div>
</body>
</html>