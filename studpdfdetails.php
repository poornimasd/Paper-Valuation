<?php
$q = $_GET['q'];

$con = mysqli_connect("localhost","root","","internal");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT subjects FROM subject_name WHERE semester = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
	echo '<option value = "'.$row['subjects'].'">'.$row['subjects'].'</option>';
}
mysqli_close($con);
?>