<?php
if (isset ($_POST["register"])) {
    $name = $_POST["usernames"];
    $passID = $_POST["passwords"];

    session_start();
    $_SESSION["usernames"] = $name;
    $_SESSION["passwords"] = $passID;
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href ="login.css" type = "text/css" rel = "stylesheet" >
</head>
<body>
    <div class="container">
        <form class = "first-form" action = "registration.php" method = "POST" autocomplete="off">
            <div class="form-group">
                <label for = "usernames"> Username </label>
                <input name = "usernames" class = "formControl" type = "text" placeholder = "7-10 characters" required>
            </div>
            <div class="form-group">
                <label for = "passwords"> password </label>
                <input name = "passwords" class = "formControl" type = "password" placeholder = "8-12 charaters long"required>
            </div>
            <span> <input type = "checkbox" name = "T&amp;C" required> Accept Terms &amp; Conditions </span>
            <div class = "form-group"></div>
            <input type ="submit" class = "btn" name = "register" value = "Register" >
        </form>
    </div>

</body>
</html>
