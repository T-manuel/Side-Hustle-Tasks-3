<?php
    session_start();

    if (isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if (($username == $_SESSION["usernames"] or $username == $_SESSION["emails"]) && $password == $_SESSION["passwords"]) {
            if (isset($_POST["Remember"])) {
            setcookie("username", $username, time()+60*60*7);
            setcookie("password", $password, time()+60*60*7);
            }
            $_SESSION["username"] = $_SESSION["usernames"];
            $_SESSION["password"] = $password;
            header("location: landingpage.php");
        }
        else {
            $error = "username or password incorrect, please try again.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href ="login.css" type = "text/css" rel = "stylesheet" >
</head>
<body>

    <div class="container">
        <form class = "first-form" action = "login.php" method = "POST" autocomplete="off">
            <div class="form-group">
                <label for = "username"> Username </label>
                <input name = "username" class = "formControl" type = "text" placeholder = "username or email" required>
            </div>
            <div class="form-group">
                <label for = "password"> password </label>
                <input name = "password" class = "formControl" type = "password" placeholder = "************"required>
            </div>
            <span> <input type = "checkbox" name = "Remember"> Remember Me </span>
            <div class = "form-group"></div>
            <input type ="submit" name = "login" class = "btn" value = "Login" >
        </form>
    </div>
    <span> <?php echo " <br> <p class = 'echo'> $error </p>";?> </span>
</body>
</html>
