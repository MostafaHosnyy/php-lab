<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-primary bg-opacity-50">


<div class="container my-5 p-5">
<h1 class="mb-4 text-success border-bottom border-black">Home</h1>
<?php

session_start();

if (! $_SESSION['login']){
    header('Location: login.php');
}


?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">You Login Successfully</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <?php 
echo "<b>Your Email : </b><u>{$_SESSION['email']}<u><br><br>";

echo "<a href='logout.php' class='btn btn-warning'>Logout</a>";
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>