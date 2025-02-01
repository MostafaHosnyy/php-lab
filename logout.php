<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-primary bg-opacity-50">
<div class="container my-1 p-5">
    <?php
        session_start();

        session_destroy();
    ?>
    <div class="alert alert-danger p-5" role="alert">
  <?php echo "<h1>You Logged Out Now </h1>"."<b>You Can Login Again <b/><a class='btn btn-primary' href='login.php'> Login</a>";?>
</div>
</div>
</body>
</html>
<?php


