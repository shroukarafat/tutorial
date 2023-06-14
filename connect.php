<?php
$dbHost= "localhost";
$dbUser ="root";
$dbPass="";
$dbName ="crud";
$mysqli=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$mysqli)
{
die ("something went wrong");
}
?>