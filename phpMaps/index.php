<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MAPS</title>

     <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="./assets/php.css">


        <!--FONT awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />


  <!-- BOOTSTRAP  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />


</head>
<body>

    <h3> GET CURRENT LOCATION</h3>

<?php include('_getCurrent.php'); ?>

<h3> FIND ME</h3>

<div class="map-card">

<?php include('_findMeMap.php'); ?>

</div>


<!--juqery-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

<!--Fotnawesome-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/fontawesome.min.js"></script>
    
</body>
</html>