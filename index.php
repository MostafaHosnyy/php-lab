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
<h1 class="mb-4 text-black border-bottom border-black">Add User</h1>
<form action="#login"  method="post" enctype="multipart/form-data">
<div class="row">
      <div class="col-md-6">
        <div class="form-floating">
          <input type="name" value="<?php echo $old_id ?? ''; ?>"   name="name"
          class="form-control" placeholder="name" >
          <label for="floatingInputGrid">name</label>
      <p class="form-text"><?php echo $name ?? "" ?> </p>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-floating">
          <input type="email" value="<?php echo $old_id ?? ''; ?>"   name="email"
          class="form-control" placeholder="E-mail" >
          <label for="floatingInputGrid">Email</label>
       <p class="form-text"><?php echo $email ?? "" ?> </p>
        </div>
      </div>
    </div>
<div class="row">
<div class="col-md-6">
        <div class="form-floating">
          <input type="password" value="<?php echo $old_id ?? ''; ?>"   name="password"
          class="form-control" placeholder="Password">
          <label for="floatingInputGrid">Password</label>
          <div id="passwordHelpBlock" class="form-text">
          Must be 8-20 characters long</div>
       <p class="text-danger"><?php echo $pass ?? "" ?> </p>
        </div>
        </div>
      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" value="<?php echo $old_id ?? ''; ?>"   name="address"
          class="form-control" placeholder="address">
          <label for="floatingInputGrid">Address</label>
       <p class="text-danger"><?php echo $pass ?? "" ?> </p>
        </div>
      </div>
      <div class="col-md-12">
  <label for="formFileLg" class="form-label">Profile Picture</label>
  <input class="form-control form-control-lg" id="formFileLg" type="file">
</div>
    </div><br>
      <div class="row">
      <div class="col-md-2">
      <button type="submit" class="btn  p-2 btn-success">SIGN UP</button>
      </div>
      <div class="col-md-2">
      <button type="reset" onclick="clearBtn()" class="btn  p-2 btn-secondary">Rerest</button>
      </div>
      <br>

    </div> 

<?php
$name =  $email = $password = "";
$nameErr = $emailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "email is required.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "password is required.";
    } else {
        $password = htmlspecialchars($_POST["password"]);
    }

       if (empty($nameErr) && empty($emailErr) && empty($passwordErr)) {
        // $data = "Name: $name,";
        $data = $email;
        $data .= ",$password\n";

        // $data .= "-----------\n";

        // Save data to customer.txt file
        $file = 'customer.txt';
        file_put_contents($file, $data, FILE_APPEND);

    }
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr)) {
      echo "<br><h4>Welcome $name Your Sign Up successfully!</h4>" ;
       
  }


};
echo "<b>You have Account<a href='login.php'>Login</a></b>";

function clearBtn(){
    $name = "";
    $email = "";
    $password = "";
}
?>
    </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>