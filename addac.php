<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
require_once("Connect.php");

if (isset($_POST['add'])) {
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
	
        $result = mysqli_query($mysqli,"INSERT INTO employee ( name , position , office ,age ,start_date ,salary ) VALUES ('$name','$position' ,'$office' , '$age' ,'$start_date', '$salary')");
	
    if(mysqli_query($mysqli,$sql)){
        echo "Book Added Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
         }}
		echo "Data added successfully!";
		
	}

?>
</body>
</html>