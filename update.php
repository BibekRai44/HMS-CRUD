<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$doctor=$row['doctor'];
$patient=$row['patient'];
$gender=$row['gender'];
$symptoms=$row['symptoms'];
$mobile=$row['mobile'];
$date=$row['date'];
$time=$row['time'];
$releaseddate=$row['releaseddate'];
$releasedtime=$row['releasedtime'];
$billing=$row['billing'];
$balance=$row['balance'];


if(isset($_POST['submit'])){
  $doctor=$_POST['doctor'];
  $patient=$_POST['patient'];
  $gender=$_POST['gender'];
  $symptoms=$_POST['symptoms'];
  $mobile=$_POST['mobile'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $releaseddate=$_POST['releaseddate'];
  $releasedtime=$_POST['releasedtime'];
  $billing=$_POST['billing'];
  $balance=$_POST['balance'];




  $sql="update`crud` set id='$id',doctor='$doctor',patient='$patient',gender='$gender',symptoms='$symptoms',mobile='$symptoms',date='$date',time='$time',releaseddate='$releaseddate',releasedtime='$releasedtime',billing='$billing',balance='$balance' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
      //echo "Updated sucessfully";
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
  </head>
  <body>
  <div class="container my-5">
  <form method="post">
  <div class="mb-3">
    <label>Doctor</label>
    <input type="text" class="form-control" placeholder="Enter doctor name" name="doctor" value=<?php echo $doctor;?>>
  </div>
  <div class="mb-3">
    <label>Patient Name</label>
    <input type="text" class="form-control" placeholder="Enter patient name" name="patient" value=<?php echo $patient;?>>
  </div>
  <div class="mb-3">
    <label>Gender</label>
    <input type="text" class="form-control" placeholder="Enter gender" name="gender" value=<?php echo $gender;?>>
  </div>
  <div class="mb-3">
    <label>Symptoms</label>
    <input type="text" class="form-control" placeholder="Enter symptoms" name="symptoms" value=<?php echo $symptoms;?>>
  </div>
  <div class="mb-3">
    <label>Mobile Number</label>
    <input type="text" class="form-control" placeholder="Enter mobile number" name="mobile" value=<?php echo $mobile;?>>
  </div>
  <div class="mb-3">
    <label>Date</label>
    <input type="date" class="form-control" placeholder="Enter hospitalized date" name="date" value=<?php echo $date;?>>
  </div>
  <div class="mb-3">
    <label>Time</label>
    <input type="time" class="form-control" placeholder="Enter hospitalized time" name="time" value=<?php echo $time;?>>
  </div>
  <div class="mb-3">
    <label>Released Date</label>
    <input type="date" class="form-control" placeholder="Enter released date" name="releaseddate" value=<?php echo $releaseddate;?>>
  </div>
  <div class="mb-3">
    <label>Released Time</label>
    <input type="time" class="form-control" placeholder="Enter released time" name="releasedtime" value=<?php echo $releasedtime;?>>
  </div>
  <div class="mb-3">
    <label>Billing</label>
    <input type="text" class="form-control" placeholder="Enter billing status" name="billing" value=<?php echo $billing;?>>
  </div>
  <div class="mb-3">
    <label>Balance</label>
    <input type="text" class="form-control" placeholder="Enter total hospital balance" name="balance" value=<?php echo $balance;?>>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
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