<?php
session_start();
if(isset($_POST['book'])){
if(!isset($_SESSION['user'])){
header('location:login_form1.php');}
else{
	header('location:viewEvents.php');
}
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EMS</title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
		<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
		
    </head>
    <body  style="background-color:pink;">
	        <?php require 'utils/functions.php'; ?>

	
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "container">
                <div class = "col-md-12">
                    <h1>What we organize<div align="right"><form action="index.php" method="POST"><input type="submit" class="btn btn-default btn-lg" name="book" value="Book Events">
                        
                            </input></form></div></h1>
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/wedding2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
										
                            <h1>Wedding</h1>
                            <p>
                            The most important day in a couple's life.
                            Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                            location for your special day.
                            </p>
                            <hr class="customline">

                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/birthday2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1>Birthday</h1>
                            <p>
                            Whether an all-day or the ultimate extravaganza that
                            lasts well into the wee hours, our Urban Events team is here to make sure all your birthday
                            party wishes come true so you can kick back, drink up and enjoy your special day!
                            </p>
                            <hr class="customline">
                           
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/fashion2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1>Fashion</h1>
                            <p>
                            Fast becoming to go-to location for fashion events, PR gatherings and product launches, 
                            The Urban Purveyor Group venues provide you with choice and quality in premium locations 
                            for all your event needs.
                            </p>
                           <hr class="customline">
 
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/meeting2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1>Meeting</h1>
                            <p>
                            From formal, to not-so-formal, our flexible event
                            spaces can cater to your every need for meetings and conferences large or small, and our
                            dedicated event team can assist with all aspects of your event planning.
                            </p>
                            <hr class="customline">
                            
                        </div><br><br> <br><br>
						<hr class="customline">
                    </div>
                </section>
			</div>
	</div>
		<br> <br> <br> <br>
		<h1 style= "font-family:Gabriola;"><center> RJ Events Gallery</h1>
		<div class="demo">
  <div class="demo__help">
    Choose a photo
  </div>
  <div class="demo__gallery">
  </div>  
</div>


        <?php require 'utils/footer.php'; ?>
    </body>
</html>
