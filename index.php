<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="./style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>



<?php

include_once "./function.php";

/** 
 * Marriage Age Check form submit
*/

if( isset($_POST['check'])){
 # Get values
 echo $name = $_POST['name'];
 echo $byear = $_POST['byear'];
 echo $gender = $_POST['gender'] ?? '';

if (empty($name) || empty($byear) || empty($gender)){
 
  $msg = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
  <p>All fields are required!</p>
  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
  </div>" ;

}else{
  // $msg = "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  // <p>Data Stable</p>
  // <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
  // </div>" ;

  $msg = marriageAgeCal($name, $byear, $gender);
}

}

?>
 
<div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
      <div class="card shadow">
      <div class="card-body">
    <h2>Check Your Marriage Age</h2>
    <?php echo $msg ?? '';?> 
    <hr>
    <form action="" method="POST">

    <div class="my-3">
    <label for="">Name</label>
    <input name = "name" type="text"class="form-control">
    </div>

  <div class="my-3">
    <label for="">Birth Year</label>
    <input name = "byear" type="text"class="form-control">
  </div>

  <div class="my-3">
    <label for="">Gender</label>
    <input name = "gender" type="radio" value="male" id="male"> <label for="male">Male</label>
    <input name = "gender" type="radio" value="Female" id="Female"> <label for="Female">Female</label>
  </div>

  <div class="my-3">
  <input type="submit" name = "check" class="btn btn-primary" value="Check now">
  </div>

</form>
</div>
</div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>