<?php
include 'connect.php';


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hospital Management System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container">
<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add Patient details</a></button>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Doctor</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Symptoms</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Address</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Released Date</th>
      <th scope="col">Released Time</th>
      <th scope="col">Billing</th>
      <th scope="col">Balance</th>

    </tr>
  </thead>
  <tbody>

  <?php
 $sql="select * from `crud`";
 $result=mysqli_query($con,$sql);
 if($result){
 	while ($row=mysqli_fetch_assoc($result)) {
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
 		

 		echo '<tr>
	      <th scope="row">'.$id.'</th>
	      <td>'.$doctor.'</td>
	      <td>'.$patient.'</td>
	      <td>'.$gender.'</td>
	      <td>'.$symptoms.'</td>
	      <td>'.$mobile.'</td>
	      <td>'.$date.'</td>
	      <td>'.$time.'</td>
	      <td>'.$releaseddate.'</td>
	      <td>'.$releasedtime.'</td>
	      <td>'.$billing.'</td>
	      <td>'.$balance.'</td>
	      
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-white">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-white">Delete</a></button>
    </tr>';
 	}
 }
  ?>
  </tbody>
</table>	
</div>
</body>
</html>