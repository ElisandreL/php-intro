<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php 
      $name = 'Elisandre';
      $age = 24;
      $eye_color = 'brown';
      $family = array (
        0 => "Dominique",
        1 => "Arian",
        2 => "Iris",
        3 => "Ethan"
      );
      $hungry = false;
    ?>
    	<p>Hi ! My name is <?php echo $name; ?>.</p>
      <p>I am <?php echo $age; ?> years old.</p>
      <p>My eyes are <?php echo $eye_color; ?>.</p>
      <p>The first person in my family is <?php echo $family[0]; ?>.</p>
  </body>
</html>