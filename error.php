<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <h5 align='center' style="background-color:Tomato; color:white"><?php echo $error ?></h5>
  	<?php endforeach ?>
  </div>
<?php  endif ?>