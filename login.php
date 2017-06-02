<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
        .login{
            height: 180px;
            width: 230px;
            margin:0;
            padding: 10px;
            border: 1px #ffdd40 solid;
        }

        .login input{
            padding: 5px;
            margin: 5px;
        }

    </style>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="login">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="username" size="30">
            <input type="password" name="password" placeholder="password" size="30">
            <input type="submit" value="Sing in">
        </div>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];

            if($username == "admin" && $password == "admin"){
                echo "<h2>Welcome <span style='color:#ffdd40'>" .$username. "</span> to website</h2>";
            }else{
                echo "<h2><span style='color:red'> Login Error </span> </h2>";
            }
        }
    ?>
</body>
</html>