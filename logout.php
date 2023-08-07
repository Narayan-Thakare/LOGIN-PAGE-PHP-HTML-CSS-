<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    include("index.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["logout"])) {
            setcookie("name", "", time() - 3600, "/"); // Expire the cookie to remove it
            echo "You are successfully logged out!";
        }
    }
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Logout Page</title>
    </head>
    <body>
        <form action="" method="GET">
            <input type="submit" name="logout" value="Logout">
        </form>
    </body>
    </html>
    <?php
}
        
?>
