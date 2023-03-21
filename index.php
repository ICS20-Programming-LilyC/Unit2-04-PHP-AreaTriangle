<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data section-->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title -->
    <title>Area of a Triangle in PHP</title>
  </head>
  <body>

    <!--Php echo to print the html to the page-->
    <?php 
			echo "<h1>Area of a Triangle in PHP</h1>";
			echo "<h3>This program will calculate the area of a triangle.</h3>";
		?>

    <!--Form to get the base and height from the user-->
    <center>
      <form action="./results.php" method="post" target="answer">
        <label for=lblBase">Base (cm):</label>
        <input type="text" id="base" placeholder="Enter the base (cm)" name="base">
        <br><br>
        <label for="lblHeight">Height (cm):</label>
        <input type="text" id="height" placeholder="Enter the height (cm)" name="height">
        <br><br>
        <input type="submit" value="Calculate Area">
      </form>
    </center>

    <!--Iframe for the answer to display on web page.-->
    <iframe id="answer" name="answer">
      The area of the triangle is  " + $area + cm<sup>2</sup>
    </iframe>
  </body>
</html>