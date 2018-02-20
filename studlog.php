<?php
	include('config.php');
	session_start();
	if(isset($_POST)){
		if(isset($_POST['studlog_username']) && !empty($_POST['studlog_username']) && isset($_POST['studlog_password']) && !empty($_POST['studlog_password'])){
			$query = mysqli_query($con, "select count(id) from user where username= '".$_POST['studlog_username']."' and password= '".$_POST['studlog_password']."'");
			if(!empty($query)){
				if(mysqli_num_rows($query)>0) {
					print_r('if');
				}else{
					print_r('else');
					$_session['studlog_login_error'] = 'Invalid';
					header('location:login.html');
				}
			}
		}
	}
?>
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">dashboard</a>
	 <a class="navbar-brand" href="studpdfdetails.html">internal paper pdf</a>
    </div>
    <ul class="nav navbar-nav">
 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>attendance</h3>
</div>
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

<div class="container">           
  <table class="table">
    <thead>
      <tr>
	    <th>s.no</th>
        <th>semester</th>
        <th>total_hours</th>
        <th>total_absent</th>
		
      </tr>
</thead>
<?php
	$query = mysqli_query($con, "select * from student_home where status = 1");
	$i=1;
	while($res = mysqli_fetch_assoc($query)){ ?>
		
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $res['semester']; ?></td>
			<td><?php echo $res['total_hours']; ?></td>
			<td><?php echo $res['total_absent']; ?></td>
		 </tr>
	<?php $i++; } ?>
	
	 </table>
    </div>
</div>

</body>
</html>
