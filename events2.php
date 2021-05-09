<?php
session_start();
if(isset($_SESSION['logged_in']))
{
	header|('Location:viewEvents.php');
	die();
}


$db = mysqli_connect('localhost', 'root','', 'year2project');
$que = 'SELECT*FROM events,locations where events.LocationID=locations.LocationID';
  $result = mysqli_query($db, $que);
  $ev="";
  $loc="";
  $evnt="";
  $noofEvent= mysqli_num_rows($result);
  while($event = mysqli_fetch_array($result)){
  	$evnt=$evnt.$event[0].":".$event[1].":".$event[2].":".$event[3].":".$event[4].":".$event[5].":".$event[6].$event[7].":".$event[8].":".$event[9]."/";
  }
  $evnt=explode("/",$evnt);
  

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Events</title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body  style="background-color:pink;">
        <?php require 'utils/header.php'; ?>
        <div class="content">
            <div class="container">
                <div class="col-md-12">
                    <h1>Upcoming Events</h1>
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            <?php echo $ev;?>
            </div>
            </div>
		<?php 
		$ev=array();
		for($i=1;$i<=$noofEvent;$i++){
		$ev=explode(":",$evnt[$i-1]);
		$date=explode("-",$ev[3]);
		$locn=explode(":",$evnt[$i-1]);
		$l="";
		if($ev[6]==$locn[0]){
			$l=$locn[1].$locn[2];
		}
		echo "
            <div class='row'><!--event content-->
                <section>
                    <div class='container'>
                        <div class='date col-md-1'><!--date holder with 1 grid column-->
                            <span class='month'>$date[2]</span><br><!--month-->
                            <hr class='line'><!--css modified horizontal line-->
                            <span class='day'>$date[1]</span><!--day-->
                        </div>
                        <div class='col-md-5'><!--image holder with 5 grid column-->
                            <img src='images/bdayevent.jpg' class='img-responsive'>
                        </div>
                        <div class='subcontent col-md-6'><!--event content holder with 6 grid column-->
                            <h1 class='title'> $ev[1] </h1><!--event content title-->
                            <p class='location'><!--event content location-->
                          	$ev[7],$ev[8]
                            </p>
                            <p class='definition'><!--event content definition-->
                            $ev[2]
                            </p>
                            <hr class='customline2'><!--css modified horizontal line-->
                            
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
		 <div class='container'>
            <div class='col-md-12'>
            <hr>
            </div>
            </div>";	
            }
            ?>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
