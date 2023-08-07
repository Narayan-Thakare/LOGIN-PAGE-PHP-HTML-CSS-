<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    $password = $_GET["password"];

    if ($name === "admin" && $password === "abc123") {
        include("index.php");

        echo "<br>";
        echo "You are successfully logged in!";
        echo "<br>Welcome, " . $name;

        setcookie("name", $name, time() + (86400 * 30), "/"); // Set cookie for 30 days
       // setcookie("password", $password, time() + (86400 * 30), "/"); // Set cookie for 30 days


    } else {
        // echo "<br>";
        // echo "Sorry, username or password error!";
        // include("login.php");


        echo '<script>';
        echo 'alert("Sorry, username or password error!");';
        echo '</script>';
        include("login.php");
    }
}
?>
