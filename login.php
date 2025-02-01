<?php
session_start();


if (isset($_GET['errors'])){
    $errors = json_decode($_GET['errors'], true);
    extract($errors);  
}
if(isset($_GET['old'])){
    $old_data = json_decode($_GET['old'], true);

    if(isset($old_data['name'])){
        $old_name = $old_data['name'];
    }
    if(isset($old_data['grade'])){
        $old_grade = $old_data['grade'];
    }
    if(isset($old_data['id'])){
        $old_id = $old_data['id'];
    }
}

if(isset($_GET['invalid'])){

    $email= "Email incorrect";
    $pass= "password incorrect";
}
?>

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
<h1 class="mb-4 text-black border-bottom border-black">Welcome Back</h1>
<form action="loginform.php"  method="post" enctype="multipart/form-data">

<div class="row">
      <div class="col-md-6">
        <div class="form-floating">
          <input type="email" value="<?php echo $old_id ?? ''; ?>"   name="email"
          class="form-control" placeholder="E-mail" >
          <label for="floatingInputGrid">Email</label>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       <p class="text-danger"><?php echo $email ?? "" ?> </p>

        </div>
      </div>
      <div class="col-md-6">
        <div class="form-floating">
          <input type="password" value="<?php echo $old_id ?? ''; ?>"   name="password"
          class="form-control" placeholder="Password">
          <label for="floatingInputGrid">Password</label>
       <p class="text-danger"><?php echo $pass ?? "" ?> </p>

        </div>
      </div>
      
      </div>
      <div class="col-md-2">
      <button type="submit" class="btn  p-3 btn-success">Login</button>
      </div>
      <br>
      <div class="formClick">
      <b>Create New Account</b>
      <a href="singUp.php">Sign Up</a>
    </div>

     
       
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>