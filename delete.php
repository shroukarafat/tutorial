
<?php
require_once("Connect.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM employee  WHERE id = $id");
header("Location:index.php");
?>