<?php
require_once("Connect.php");

if (isset($_POST['edit'])) {
	
	$id =  $_POST['id'];
	$name =$_POST ["name"];
   $position =$_POST["position"];
   $office =$_POST["office"];
   $age =$_POST["age"];
   $start_date =$_POST["start_date"];
   $salary =$_POST["salary"];
   if (empty($name) || empty($age) || empty($position) || empty($office) || empty($start_date) || empty($salary)) {
    if (empty($name)) {
        echo "Name field is empty.<br/>";
    }
    
    if (empty($age)) {
        echo" age field is empty.<br/>";
    }
    
    if (empty($position)) {
        echo " field is empty.<br/>";
    }
    if (empty($office)) {
        echo " field is empty.<br/>";
    }
    if (empty($start_date)) {
        echo " field is empty.<br/>";
    }if (empty($salary)) {
        echo " field is empty.<br/>";
    }
	
	} else {
        $result = mysqli_query($mysqli ,"UPDATE employee  SET  name = '$name ' , position = '$position' , office ='$office' ,age ='$age' ,start_date = '$start_date' ,salary ='$salary' WHERE id='$id'");
        
		echo "Data updated successfully!";
		header("Location:index.php");
}}