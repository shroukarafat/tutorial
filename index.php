<?php
require_once("Connect.php");
$result = mysqli_query($mysqli, "SELECT * FROM employee ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
	<h2>Homepage</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	<table border=3>
		<tr >
			<td>Name</td>
			<td>position</td>
			<td>office</td>
            <td>age</td>
			<td>start_date</td>
			<td>salary</td>
            <td>action</td>
		</tr>
		<?php
	
		while ($row = mysqli_fetch_assoc($result)) 
            {
                ?>
          <tr>  
            <td><?php echo $row["id"]; ?>  </td> 
                <td><?php echo $row["name"]; ?></td>
                <td> <?php echo$row["position"]; ?></td>
                <td><?php echo $row["office"]; ?></td>
                <td><?php echo $row["age"]; ?></td>
                <td><?php echo $row["start_date"]; ?></td>
                <td><?php echo $row["salary"]; ?></td> 
                <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="">Delete</a>
            </td>
            </tr> 
            
           <?php 
            }
        ?>
	</table>
</body>
</html>