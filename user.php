

<?php


include 'connect.php';

// agar submit ho gaya hai to main data enter karna chahta hu 
// database me 

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$mobile =$_POST['mobile'];
$password =$_POST['password'];

$sql = "INSERT INTO `crud` (name, email, mobile, password)  VALUES ('$name','$email','$mobile','$password ')";

// ye ek to database se connection establish karta hai aur dusra sql se ki jo query hai usko execute karta hai
$result = mysqli_query($con, $sql);

if($result){

    //echo "data inserted successfully";

    header('location:display.php');
}

else{

    die(mysqli_error($con));
}


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    
<div class="container my-5">

<form method="post">

<div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
    <div id="nameHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputmobile" class="form-label">Mobile</label>
    <input type="mobile" name="mobile" class="form-control" id="exampleInputmobile1" aria-describedby="mobileHelp">
    <div id="mobileHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>