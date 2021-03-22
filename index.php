<?php
if (isset ($_POST["register"])) {
    $name = $_POST["usernames"];
    $passID = $_POST["passwords"];
    $surname = $_POST["surname"];
    $firstname = $_POST["firstname"];
    $middleName = $_POST["middleName"];
    $email = $_POST["emails"];
    $confirmEmail = $_POST["confirmEmail"];

    if ($email == $confirmEmail){
        session_start();
        $_SESSION["usernames"] = $name;
        $_SESSION["passwords"] = $passID;
        $_SESSION["emails"] = $email;
        header("location: login.php");
    }
    else {
        $error = "your mail didn't match. Input again";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href ="styles/login.css?v=<?php echo time();?>" type = "text/css" rel = "stylesheet" >
</head>
<body>
    <div class="container">
        <form class = "first-form" action = "index.php" method = "POST" autocomplete="off">
            <div class="form-group-2">
                <label for = "usernames"> Username </label>
                <input name = "usernames" placeholder = "8 - 14 characters" class = "formControl" type = "text" required>
            </div>
            <div class="form-group-2">
                <label for = "surname"> Surname </label>
                <input name = "surname" class = "formControl" type = "text" required>
            </div>
            <div class="form-group-2">
                <label for = "firstname"> Firstname </label>
                <input name = "firstname" class = "formControl" type = "text" required>
            </div>
            <div class="form-group-2">
                <label for = "middleName"> Middle Name </label>
                <input name = "middleName" class = "formControl" type = "text">
            </div>
            <div class="form-group-2">
                <label for = "emails"> Email </label>
                <input name = "emails" placeholder = "123@gmail.com" class = "formControl" type = "email" placeholder = "123@example.com" required>
            </div>
            <div class="form-group-2">
                <label for = "confirm email"> Confirm Email </label>
                <input name = "confirmEmail" class = "formControl" type = "email" required>
            </div>
            <div class="form-group-2">
                <label for = "passwords"> password </label>
                <input name = "passwords" class = "formControl" type = "password" required>
            </div>
            <span> <input type = "checkbox" name = "T&amp;C" required> Accept Terms &amp; Conditions </span>
            <div class = "form-group-1">
                <input type ="submit" class = "btn" name = "register" value = "Register" >
            </div>
        </form>

        <span class = "echo"> <?php if (isset($error)) {echo "<br> $error";} ?> </span>
    </div>

</body>
</html>
