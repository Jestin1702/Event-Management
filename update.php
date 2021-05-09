<?php
$con = mysqli_connect("localhost","root","","year2project");
$errors=array();
if(isset($_GET['eventid'])){
	$eventid=$_GET['eventid'];
	
	$title=$_POST['title'];
	$des=$_POST['des'];
	$sd=$_POST['sd'];
	$ed=$_POST['ed'];
	$cost=$_POST['cost'];
	$loc=$_POST['loc'];
	
	if(count($errors)==0){
		$query="UPDATE `events` SET `Title`='$title',`Description`='$des',`StartDate`='$sd',`EndDate`='$ed',`Cost`='$cost',`LocationID`='$loc' where `eventid`='$eventid'";
		$result =  mysqli_query($con, $query);
		if($result){
			$sucess="Sucessfully Updated";
			header('location:adminhome.php');
		}else{
			$sucess="Something Went Wrong";
		}	
	}
}


?>