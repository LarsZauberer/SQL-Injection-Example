<?php
    $dbhost = 'db';
    $dbname='postgres';
    $dbuser = 'postgres';
    $dbpass = 'admin';

    $dbconn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");
    header("Location: http://localhost");
    die();
?>
