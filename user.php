<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $doctor=$_POST['doctor'];
  $patient=$_POST['patient'];
  $gender=$_POST['gender'];
  $symptoms=$_POST['symptoms'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $releaseddate=$_POST['releaseddate'];
  $releasedtime=$_POST['releasedtime'];
  $billing=$_POST['billing'];
  $balance=$_POST['balance'];

  $sql="insert into `HMS` (doctor,patient,gender,symptoms,mobile,address,date,time,releaseddate,releasedtime,balance,balance)
  values('$doctor','$patient','$gender','$symptoms','$mobile','$address','$date','$time','$releaseddate','$releasedtime','$balance','$balance')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "Data inserted suscessfully";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }


}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hospital Management System</title>
    <img src="hospital-management-system.png">
  </head>
  <body>
    <div class="container my-5">
      <form>
  <div class="mb-3">
    <label>Doctor</label>
    <input type="text" class="form-control w-25" placeholder="Enter Doctor Name" name="doctor">
  </div>
  <div class="mb-3">
    <label>Patient Name</label>
    <input type="text" class="form-control w-25 " placeholder="Enter Patient Name" name="patient">
  </div>
</form>
<form>
  <div class="mb-3">
    <label>Gender</label>
    <input type="text" class="form-control w-25" placeholder="Enter gender" name="gender" >
  </div>
  <div class="mb-3">
    <label>Symptoms</label>
    <input type="text" class="form-control w-75" placeholder="Enter symptoms" name="symptoms">
  </div>
  <div class="mb-3">
    <label>Mobile Number</label>
    <input type="text" class="form-control w-25" placeholder="Mobile Number" name="mobile">
  </div>
  <div class="mb-3">
    <label>Address</label>
    <input type="text" class="form-control w-25 " placeholder="Enter address" name="address">
  </div>
  <div class="mb-3">
    <label>Date</label>
    <input type="date" class="form-control w-25" placeholder="Enter date" name="date" >
  </div><div class="mb-3">
    <label>Time</label>
    <input type="time" class="form-control w-25" placeholder="Enter time" name="time">
  </div>
  <div class="mb-3">
    <label>Date released</label>
    <input type="date" class="form-control w-25 " placeholder="Enter released date" name="releaseddate">
  </div>
</form>
<form>
  <div class="mb-3">
    <label>Time released</label>
    <input type="time" class="form-control w-25" placeholder="Enter released time" name="releasedtime" >
  </div><div class="mb-3">
    <label>Billing</label>
    <input type="text" class="form-control w-25" placeholder="Enter billing status" name="billing">
  </div>
  <div class="mb-3">
    <label>Balance</label>
    <input type="text" class="form-control w-25 " placeholder="Enter balance" name="balance">
  </div>
</form>
<form>
  <button type="submit" class="btn btn-primary " name="submit"><a href="display.php" class="text-light">Submit</a></button>
</form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>