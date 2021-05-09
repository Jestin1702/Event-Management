<?php
$con = mysqli_connect("localhost","root","","year2project");
$errors=array();

if(isset($_GET['eventid'])){
	$eventid=$_GET['eventid'];

	
	if(count($errors)==0){
		$query="DELETE FROM `events` WHERE `eventid`='$eventid'";
		$result =  mysqli_query($con, $query);
		if($result){
			$sucess="Sucessfully Deleted";
			header('location:adminhome.php');
		}else{
			$sucess="Something Went Wrong";
		}	
	}
}
if(isset($_GET['locid'])){
	$locid=$_GET['locid'];

	
	if(count($errors)==0){
		$query="DELETE FROM `locations` WHERE `locationid`='$locid'";
		$result =  mysqli_query($con, $query);
		if($result){
			$sucess="Sucessfully Deleted";
			header('location:adminhome.php');
		}else{
			$sucess="Something Went Wrong";
		}	
	}
}
if(isset($_GET['usrid'])){
	$usrid=$_GET['usrid'];

	
	if(count($errors)==0){
		$query="DELETE FROM users WHERE userid='$usrid'";
		$result =  mysqli_query($con, $query);
		if($result){
			$sucess="Sucessfully Deleted";
			header('location:adminhome.php');
		}else{
			$sucess="Something Went Wrong";
		}	
	}
}
?>

<html>
<h2><?php echo $sucess;?>
</html>
