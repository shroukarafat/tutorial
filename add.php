<html>
<head>
	<title>Add Data</title>
</head>
<body>
<body>
    <h3>
        Add New Employees
</h3>

    <div class="container">
<form action="addac.php" method="post">
<div class="form_group">
<label for="start">NAME</label> <br>
 <input type="text" class="form_group" name="name" placeholder="name:" ><br>
 <label for="start">POSITION</label> <br>
  <input type="text" class="form_group" name="position" placeholder="position:" ><br>
  <label for="start">OFFICE</label> <br>
   <input type="text" class="form_group" name="office" placeholder="office:"><br>
   <label for="start">AGE</label> <br>
    <input type="text" class="form_group" name="age" placeholder="age:" ><br>
    <label for="start">START_DATE</label> <br>
    <input type="date" class="form_group" name="start_date" value="2023-07-22" min="2023-01-01" max="2023-12-31"><br>
    <label for="start">SALARY</label> <br>
     <input type="text" class="form_group" name="salary" placeholder=" salary:" ><br>
<input type="submit" name="add " value="add " >
<br>
<div>
<a href="index.php">back </a>
</div>

</div></form>


</div></body>
</body>
</html>
