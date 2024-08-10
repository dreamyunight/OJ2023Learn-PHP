<?php

$localhost  = "db";
$username   = "root";
$password   = "030425";
$dbname     = "php";

$db         = mysqli_connect($localhost, $username, $password, $dbname);

if (!$db) {
  die('Fail to connect to Server');
}

// mysqli_set_charset($db, "utf8mb4");
