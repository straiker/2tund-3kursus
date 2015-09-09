<?php
    if($_SERVER['REQUEST_METHOD'] == "post"){
        $error = "";

        if(empty($_POST['username']) || empty($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            echo $username;
            echo $password;
        }else{
            $error = "empty";
        }

        echo $error;
    }
?>

<html>
    <head></head>
    <body>
        <form action="login.php" method="post">
            <input type="email" name="username" id="username" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="password">
            <input type="submit" name="login" id="login" value="Login">
        </form>
    </body>
</html>
