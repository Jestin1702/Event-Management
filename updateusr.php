<?php 
$con = mysqli_connect("localhost","root","","year2project");
$errors=array();

$usrid=$_GET['usrid'];
	
	$uname=$_POST['uname'];
	
	$role=$_POST['role'];
	
	if(count($errors)==0){
		$query="UPDATE users set username='$uname', role='$role' WHERE userid='$usrid'";
		$result =  mysqli_query($con, $query);
		if($result){
			$sucess="Sucessfully Updated";
			header('location:adminhome.php');
		}else{
			$sucess="Something Went Wrong";
		}	
	}




?>

<html>
<h3><?php echo $sucess;?></h3>
</html>