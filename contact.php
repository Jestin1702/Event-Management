<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contact</title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
		<script> 
		document.getElementById("myForm").addEventListener("submit",myFunction);
		 function myFunction()
		 {
			 alert("Feedback Sent");
		 }
		</script>
    </head>
    <body  style="background-color:pink;">
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "container">
                <div class = "col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Ronald Fredrick</h1><br>
					<h1><span class="glyphicon glyphicon-user"></span> Jestin Johnson</h1>

                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email:ronrodrixx@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/Ronald<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 08712345678<br>
						<span class="glyphicon glyphicon-envelope"></span> Email:jestinjohn@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/jestin<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 08713545678
                    </p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" class="form-control" required></textarea>
                        </div>
                        <button type="submit" value="submit" class="btn btn-default pull-right" onsubmit="myFunction()">SEND<span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
			
            
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
