<?php
	include "dbconnect.php";
	
	$id=$_GET['d_id'];
	
	$name=$_POST['f_name'];
    $des=$_POST['f_des'];
    $phon=$_POST['f_phon'];
    $dob=$_POST['f_dob'];
	
	$sql="UPDATE teacher SET name='$name', designation='$des' , phone='$phon' , date_of_birth='$dob'where id='$id'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>