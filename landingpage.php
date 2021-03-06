<?php
        session_start();
        echo " <strong> Welcome to Side Hustle </strong>" . $_SESSION["username"] . "<br>";
        echo "<a href = 'login.php'> Logout </a>";
    ?>