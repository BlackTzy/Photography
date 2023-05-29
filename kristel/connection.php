<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Kristel_login";

if(!$con = mysqLi_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect!");
}