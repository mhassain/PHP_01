
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "db_batch_19";

$connection = mysqli_connect($hostname, $username, $password);


if ($connection) {
    
    $db_select = mysqli_select_db($connection, $db_name);
    if ($db_select) {
        //echo 'Database Selected';
    } else {
        die('Database failed' . mysqli_error($connection));
    }
} else {
    die('Connection Fail' . mysqli_error($connection));
}

#die('-x-');