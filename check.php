<?php
    $password = $_POST['password'];
    $username = $_POST['username'];
    if($username == 'ali' && $password == '147258'){
        echo "ok" ;
    }else{
        if($username!='ali'&& $password!= '147258' ){
            header("location: login.php?status=error");
        }elseif ($username!='ali') {
            header("location: login.php?status=errorr");
        }else {
            header("location: login.php?status=errorrr");
        }
    }
?>