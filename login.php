<?php
    $dbhost = 'db';
    $dbname='postgres';
    $dbuser = 'postgres';
    $dbpass = 'admin';

    $dbconn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT username FROM accounts WHERE username='$username' AND password='$password'";
    $result = pg_query($query) or die("Error message: " . pg_last_error());

    $found = false;
    while ($row = pg_fetch_row($result)) {
        $found = true;
    }

    if ($found) {
        echo "You win! Flag found!";
    } else {
        header("Location: http://localhost");
        die();
    }
?>
