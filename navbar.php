<!-- 
Within this file if it was to be a landing page or a random page in the website all we need to do
to include the nav bar would be to call the file using 
php include("linkToFile.php"); 

-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="nav-footer.css"> <!-- LINK THE CSS FILES -->
</head>

<!-- PHP NAVBAR LINK -->
<?php include("navigation-bar.php"); ?> 

<!-- MAIN CONTENT -->
<main>
<h1 class="text-center text-2xl p-10 font-bold">Welcome To My Dynamic Navigation & Footer</h1>
</main>

<footer>
  <?php include("footer-dynamic.php"); ?>
</footer>
  
</body>
</html>


