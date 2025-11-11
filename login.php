<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="Login">
    </form>
    <?php
        if(isset($_GET['status'])&&$_GET['status']=='error'){
            echo 'username error and password error';
        } elseif(isset($_GET['status'])&&$_GET['status']=='errorr'){
            echo 'username error';
        }elseif(isset($_GET['status'])&&$_GET['status']=='errorrr'){
            echo 'password error';
        }
    
    ?>
</body>
</html>