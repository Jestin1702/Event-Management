<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: adminlogin.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: adminlogin.php");
  }
  
$con = mysqli_connect("localhost","root","","year2project");



$title="";
$des="";
$sd="";
$ed="";
$cost="";
$loc="";
$errors=array();


$tr=array();
$td="";
$query="SELECT * FROM events";
$result =  mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)){
	$td = $td."//$row[0]:$row[1]:$row[2]:$row[3]:$row[4]:$row[5]:$row[6]";	
}
$tr=explode("//",$td);
$query="SELECT * FROM locations";
$result1 =  mysqli_query($con, $query);
$td="";
while($row = mysqli_fetch_array($result1)){
	$td = $td."//$row[0]:$row[1]:$row[2]:$row[3]:$row[4]:$row[5]:$row[6]:$row[7]";	
}
$tr1=explode("//",$td);
$query="SELECT * FROM users";
$result2 =  mysqli_query($con, $query);
$td="";
while($row = mysqli_fetch_array($result2)){
	$td = $td."//$row[0]:$row[1]:$row[2]:$row[3]";	
}
$tr2=explode("//",$td);






if(isset($_GET['usrid'])){
	$pass='1234';
	$usrid=$_GET['usrid'];
	$que="UPDATE users set password='$pass' where userid='$usrid'";
	$res =  mysqli_query($con, $que);
	
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
   <center><h1 style="font-family:Magneto;">
				 <span  class="multicolortext">RJ Event Management & Catering Services</span></h1>
				<marquee><h1 style="color:red"> Welcome Admin</h1></marquee></div>
	<p align="right">
	<a href='index.php?logout=1' class = 'btn btn-default'>Logout</a></p>
	
<div class="main-panel">        
        <div class="content-wrapper" >
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                    <h2 class="card-title">Event </h2>
                    <div class="table-responsive">
					
                    <?php 
                    $rows = mysqli_num_rows ($result);                      
                   
                    
                      echo "<table class='table table-striped'>
                        <thead>
                          <tr>
                            <th>
                              Event Id
                            </th>
                            <th>
                              Title
                            </th>
                            <th>
                             Description
                            </th>
                            <th>
                              Start Date
                            </th>
							<th>
                              End Date
                            </th>
							<th>
                              Cost
                            </th>
							<th>
                              Location Id
                            </th>
							<th>
                              Update
                            </th>
							<th>
                              Delete
                            </th>
                          </tr>
                        </thead>
                        <tbody>";
                                	 
                        
                        
                        
                        //$data = mysqli_fetch_array($result);
			
			
			$cols = 8; 
			$data=array();
			for($r=1;$r<=$rows;$r++){
				echo "<tr>";
				
					
					$data=explode(":",$tr[$r]);
					echo "<form method='post' action='update.php?eventid=$data[0]'>";
				
					echo "<td>".$data[0]."</td>";
					echo "<td><input type='text' name='title' value='$data[1]'></td>";
					echo "<td><input type='text' name='des' value='$data[2]'></td>";
					echo "<td><input type='text' name='sd' value='$data[3]'></td>";						
					echo "<td><input type='text' name='ed' value='$data[4]'></td>";
					echo "<td><input type='text' name='cost' value='$data[5]'></td>";
					echo "<td><input type='text' name='loc' value='$data[6]'></td>";
					echo "<td><input type='submit' class = 'btn btn-default name='update' value='Update' ></td>";		
					echo "<td><a class = 'btn btn-default' href='delete.php?eventid=$data[0]'>Delete</a></td>";
				echo "</form>";	
					
				echo "</tr>";
			}
			
			
    			
    			
    
                        echo "</tbody>";
                        //echo "<h5><center><font color='green'>".$cong."</font></center></h5>";
                        ?>
                        
                  </table>
				  
                </div>
              </div>
			  <div class="card-body">
                    <h2 class="card-title">LOCATION </h2>
                    <div class="table-responsive">
					
                    <?php 
                    $rows1 = mysqli_num_rows ($result1);                      
                   
                    
                      echo "<table class='table table-striped'>
                        <thead>
                          <tr>
                            <th>
                              LOCATIONID
                            </th>
                            <th>
                              Name
                            </th>
							<th>
                             Address
                            </th>
                            <th>
                             Manager First Name
                            </th>
                            <th>
                              Manager Last Name
                            </th>
							<th>
                              Manager Email
                            </th>
							<th>
                              Manager Contact
                            </th>
							<th>
                              Max Capacity
                            </th>
							<th>
                              Update
                            </th>
							<th>
                              Delete
                            </th>
                          </tr>
                        </thead>
                        <tbody>";
                                	 
                        
                        
                        
                        //$data = mysqli_fetch_array($result);
			
			
			$cols = 8; 
			$data=array();
			for($r=1;$r<=$rows1;$r++){
				echo "<tr>";
				
					
					$data=explode(":",$tr1[$r]);
					echo "<form method='post' action='updateloc.php?locid=$data[0]'>";
				
					echo "<td>".$data[0]."</td>";
					echo "<td><input type='text' name='name' value='$data[1]'></td>";
					echo "<td><input type='text' name='add' value='$data[2]'></td>";
					echo "<td><input type='text' name='mgrf' value='$data[3]'></td>";						
					echo "<td><input type='text' name='mgrl' value='$data[4]'></td>";
					echo "<td><input type='text' name='mgremail' value='$data[5]'></td>";
					echo "<td><input type='text' name='mgrcon' value='$data[6]'></td>";
					echo "<td><input type='text' name='max' value='$data[7]'></td>";
					echo "<td><input type='submit' class = 'btn btn-default name='update' value='Update' ></td>";		
					echo "<td><a class = 'btn btn-default' href='delete.php?locid=$data[0]'>Delete</a></td>";
				echo "</form>";	
					
				echo "</tr>";
			}
			
			
    			
    			
    
                        echo "</tbody>";
                        //echo "<h5><center><font color='green'>".$cong."</font></center></h5>";
                        ?>
                        
                  </table>
				  
                </div>
              </div>
			  <div class="card-body">
                    <h2 class="card-title">USER </h2>
                    <div class="table-responsive">
					
                    <?php 
                    $rows2 = mysqli_num_rows ($result2);                      
                   
                    
                      echo "<table class='table table-striped'>
                        <thead>
                          <tr>
						  <th>
                              Userid
                            </th>
                            <th>
                              Username
                            </th>
                            <th>
                              Password
                            </th>
							<th>
                             Role
                            </th>
							<th>
                             Update
                            </th>
							<th>
                             Delete
                            </th>
                            
                          </tr>
                        </thead>
                        <tbody>";
                                	 
                        
                        
                        
                        //$data = mysqli_fetch_array($result);
			
			
			 
			$data=array();
			for($r=1;$r<=$rows2;$r++){
				echo "<tr>";
				
					
					$data=explode(":",$tr2[$r]);
					echo "<form method='post' action='updateusr.php?usrid=$data[0]'>";
					echo "<td>$data[0]</td>";
					
					echo "<td><input type='text' name='uname' value='$data[1]'></td>";
					echo "<td><a href='adminhome.php?usrid=$data[0]' class = 'btn btn-default' value='Set Default' >Set Default</a></td>";
					echo "<td><input type='text' name='role' value='$data[3]'></td>";			
					echo "<td><input type='submit' class = 'btn btn-default name='update' value='Update' ></td>";		
					echo "<td><a class = 'btn btn-default' href='delete.php?usrid=$data[0]'>Delete</a></td>";
				echo "</form>";	
					
				echo "</tr>";
			}
			
			
    			
    			
    
                        echo "</tbody>";
                        //echo "<h5><center><font color='green'>".$cong."</font></center></h5>";
                        ?>
                        
                  </table>
				  
                </div>
              </div>
              </div>
           </div>
         </div>
		 <?php require 'utils/footer.php'; ?>
		 </body>
		 </html>