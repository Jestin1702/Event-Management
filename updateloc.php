<?php 
$con = mysqli_connect("localhost","root","","year2project");
$errors=array();

$locid=$_GET['locid'];
	
	$name=$_POST['name'];
	$add=$_POST['add'];
	$mgrf=$_POST['mgrf'];
	$mgrl=$_POST['mgrl'];
	$mgremail=$_POST['mgremail'];
	$mgrcon=$_POST['mgrcon'];
	$max=$_POST['max'];
	
	if(count($errors)==0){
		$query="UPDATE `locations` SET `Name`='$name',`Address`='$add',`ManagerFName`='$mgrf',`ManagerLName`='$mgrl',`ManagerEmail`='$mgremail',`ManagerNumber`='$mgrcon',`MaxCapacity`='$max' WHERE locationid='$locid'";
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