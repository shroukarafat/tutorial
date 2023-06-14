
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
<body>
    <h3>
        Edit Employees form
</h3>

    <div class="container">
    
        <?php 
        if (isset($_GET["id"]))
        {
            include("connect.php");

            $id=$_GET["id"]; 
        
            
            $sql="SELECT  * FROM employee  WHERE id =' $id' ";
            $result = mysqli_query($mysqli,$sql);
          $row = mysqli_fetch_array($result);
          
          
?>

<form action="editac.php" method="post">
            <div class="form_group">
            <label for="start">NAME</label> <br>
             <input type="text" class="form_group" name="name"  value = "<?php  echo $row ["name"];?>"placeholder="name:" ><br>
             <label for="start">POSITION</label> <br>
              <input type="text" class="form_group" name="position"value = "<?php  echo $row ["position"];?>" placeholder="position:" ><br>
              <label for="start">OFFICE</label> <br>
               <input type="text" class="form_group" name="office"value = "<?php  echo $row ["office"];?>" placeholder="office:"><br>
               <label for="start">AGE</label> <br>
                <input type="text" class="form_group" name="age"value = "<?php  echo $row ["age"];?>" placeholder="age:" ><br>
                <label for="start">START_DATE</label> <br>
                <input type="date" class="form_group" name="start_date"value = "<?php  echo $row ["start_date"];?>" value="2023-07-22" min="2023-01-01" max="2023-12-31"><br>
                <label for="start">SALARY</label> <br>
                 <input type="text" class="form_group" name="salary"value = "<?php  echo $row ["salary"];?>" placeholder=" salary:" ><br>
                 <input type="hidden" value="<?php echo $row ["id"]; ?>" name="id">
            <input type="submit" name="add" value="edit" >
            <br>
            <div>
            <a href="index.php">back </a>
            </div>
            
            </div></form>
<?php
        }
        
        ?>

</div></body>
</body>
</html>