
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class = "row">
	<div class="col-md-3">
		<header>Question Paper</header>
		<div id=parts>
			<div id="parta">
				<header>Part A</header>
			</div>
			<div id="partb">
				<header>Part B</header>
			</div>
		</div>
		<div id="ans">
			<header>Answer Key</header>
			
		</div>
		<div id="feedback">
			<header>Feedback</header>
			
		</div>
	</div>
	<div class="col-md-4">
		<header>14CSB01</header>
		<div id="pdf">
			
		</div>
		<div id="sub">
			<input type="submit" value="submit" style="width: 100%; height: 100%; background-color: lightblue;">
		</div>
		
	</div>
	<div class="col-md-5">
		<header>
			<div id="total">Total ques 15</div>
			<div id ="mark">Marks 100/100</div>
		</header>
		<div id="mark2">
			<header>2 Marks</header>
			1) <input type="text" name=""><br>
			2) <input type="text" name=""><br>
			3) <input type="text" name=""><br>
			4) <input type="text" name=""><br>
			5) <input type="text" name=""><br>
			6) <input type="text" name=""><br>
			7) <input type="text" name=""><br>
			8) <input type="text" name=""><br>
			9) <input type="text" name=""><br>
			10) <input type="text" name=""><br>
			
			
		</div>
		<div id="mark16">
			<header>16 Marks</header>
			11)a) <input type="text" name=""><br>
			11)b) <input type="text" name=""><br>
			12)a) <input type="text" name=""><br>
			12)b) <input type="text" name=""><br>
			13)a) <input type="text" name=""><br>
			13)b) <input type="text" name=""><br>
			14)a) <input type="text" name=""><br>
			14)b) <input type="text" name=""><br>
			15)a) <input type="text" name=""><br>
			15)b) <input type="text" name=""><br>
			
			
		</div>
		<div id="sub">
			<input type="submit" value="submit" style="width: 100%; height: 100%; background-color: lightblue;">
		</div>

	</div>
</div>



	<style type="text/css">
		.col-md-3 {
			border: 1px solid;
			height: 650px;
		}
		.col-md-4 {
			border: 1px solid;
			height: 650px;
		}
		.col-md-5 {
			border: 1px solid;
			height: 650px;
		}

		header {
			border-bottom: 2px solid;
			padding-bottom: 5px;
			padding-left: none;
			background-color: lightskyblue;
		}

		#parta {
			display: inline-block;
			width: 49%;
			border:1px solid;
			height: 250px;
		}

		#partb {
			display: inline-block;
			border:1px solid;
			width: 49%;
			height: 250px;
		}

		#parts {
			border : 2px solid;
			height: 250px;
		}
		#ans {
			height: 250px;
			border : 2px solid;
		}
		#feedback {
			height: 120px;
			border : 2px solid;
		}
		#pdf{
			height: 570px;
			border : 2px solid;
		}
		#sub{
			height: 40px;
			margin-top: 5px;
		}

		#mark2 {
			width: 50%;
			display: inline-block;
			border:2px solid;
			height: 530px;
			margin-top: 3px;
			margin-bottom: 3px;
		}
		#mark16 {
			width: 48%;
			display: inline-block;
			border:2px solid;
			height: 530px;
			margin-top: 3px;
			margin-bottom: 3px;
		}
		input[type="text"] {
			margin-top: 4px;
			width: 60px;
		}

	</style>
</body>
</html>