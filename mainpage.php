<?php
    if(!isset($_SESSION['logged'])){
        echo "<script>alert('sign pls')</script>";
        echo "<script>window.location='./index.php'</script>";
    }
    function logout(){
        if(isset($_GET['logout'])){
            unset($_SESSION['logged']);
            echo "<script>window.location='./index.php'</script>";
        }
    }
    logout();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mani page</title>
</head>
<body>
    
    <div class="hi-admin">
        <h4>hi there</h4>
        <form action="" method="get">
            <input type="submit" name="logout" value="logout">
        </form>
    </div>
</body>
</html>