<?php 
$db=mysqli_connect('localhost','root','','year2project');

$email="";
$pass="";
$errors=array();
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$que = "SELECT * FROM admin where email='$email' and pass='$pass' LIMIT 1";
	$result = mysqli_query($db, $que);  
	if(mysqli_num_rows($result)==1){
		session_start();
		$_SESSION['email']=$email;
		header('location:adminhome.php');
	}else{
		array_push($errors,"Wrong Email Password Combination");
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            span.error{
                color: red;
            }            
        </style>  
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php ?>
        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">                                
                                <h4 class="modal-title" id="myModalLabel">Admin Login</h4>
                            </div>
                            <div class="row">
							
                                <div class="modal-body">
                                    <div class="col-md-6 col-md-offset-3">
									<?php include('error.php');?>
                                        <form action="adminlogin.php" method="POST">
                                            <div class="form-group">
                                                <label for="Email">Email:</label>
                                                <input type="email" name="email" class="form-control" value="" required>
                                                <span class="error">
                                                                                                    </span>
                                            </div>
											
                                            <div class="form-group">
                                                <label for="password">Password:</label>
                                                <input type="password" name="password" class="form-control" value="" required>
                                                <span class="error">
                                                                                                    </span>
                                            </div>
                                            <button type="submit" class="btn btn-default loginbtn" name="submit">Login</button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
							
                            <div class="modal-footer">
                            
                            </p></div>
                        </div>
                    </div>
        
    </body>
</html>
