<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Profile Page</title>
    </head>
    <body>
        <?php

        $name = '';
        if (isset($_COOKIE['name'])) {
            $name = $_COOKIE['name'];
        }

        if (!empty($name)) {
            include("index.php");
            
            echo "<br> " ;

            echo "<b>Welcome to Profile</b>";
            echo "<br>Welcome, " . $name;
        } else {
          //  echo "Please login first";
            include("login.php");
        }
        ?>
    </body>
    </html>
    <?php
}
?>
