<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM teacher where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
    $des=$arr['designation'];
    $phon=$arr['phone'];
    $dob=$arr['date_of_birth'];
?>

<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_id=<?php echo $id?>">
			<label>Name</label>
			<input type="text" value="<?php echo $nam ?>" name="f_name"> <br> <br>
			<label>Designation</label>
			<input type="text" value="<?php echo $des ?>" name="f_des"> <br> <br>
			<label>Phone</label>
			<input type="text"  value="<?php echo $phon ?>" name="f_phon" > <br> <br>
            <label>DOB</label>
			<input type="date"  value="<?php echo $dob ?>" name="f_dob" > <br> <br>
			<input type="submit" value="update">
		</form>
	</center>	
	
</body>
