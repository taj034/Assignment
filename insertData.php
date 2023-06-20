
<?php
include "dbconnect.php";

$name=$_POST['f_name'];
$des=$_POST['f_des'];
$phon=$_POST['f_phon'];
$dob=$_POST['f_dob'];

$sql = "INSERT INTO teacher (id, name,designation,phone,date_of_birth) 
		VALUES (NULL, '$name', '$des', '$phon' , '$dob')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

