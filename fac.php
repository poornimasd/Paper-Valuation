<?php
	include('config.php');
	session_start();
	if(isset($_POST)){
		if(isset($_POST['fac_username']) && !empty($_POST['fac_username']) && isset($_POST['fac_password']) && !empty($_POST['fac_password'])){
			$query = mysqli_query($con, "select count(id) from facultyuser where username= '".$_POST['fac_username']."' and password= '".$_POST['fac_password']."'");
			if(!empty($query)){
				if(mysqli_num_rows($query)>0) {
					print_r('if');
				}else{
					print_r('else');
					$_session['fac_login_error'] = 'Invalid';
					header('location:login.html');
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<h2>FACULTY LOGIN PORTAL</h2>



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="navbar-brand">&#9776;OPEN </span>
	 
	 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">PLANNER</a>
  <a href="#">Dashboard</a>
  <a href="#">TimeTable</a>
  <a href="#">AcademicProgress</a>
  <a href="#">Myclass</a>
  <a href="#">ChangePassword</a>
  <a href="#">Library</a>
</div>

	  
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
     
	</li>
      <li><a href="pdfdetails.html">EVALUATION</a></li>
	  
      
    </ul>
  </div>
</nav>
  

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<div class="container">           
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>serail no</th>
        <th>university sub code</th>
        <th>subject name</th>
        <th>class</th>
        <th>credit points</th>
      </tr>
    </thead>
	<tbody>
	<?php
	$query = mysqli_query($con, "select * from faculty_home where status = 1");
	$i=1;
	while($res = mysqli_fetch_assoc($query)){ ?>
		
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $res['subject_code']; ?></td>
			<td><?php echo $res['subject_name']; ?></td>
			<td><?php echo $res['class']; ?></td>
			<td><?php echo $res['credit_point']; ?></td>
		 </tr>
	<?php $i++; } ?>
	</table>
    
  </table>
</div>
</center>
</body>
</html>

</body>
</html> 
