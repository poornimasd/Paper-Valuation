<!DOCTYPE html>
<html>
<title>Coimbatore Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>


<div class="container">
  <h2>Add Your Events</h2>
  <form class="form-horizontal" method="POST" action="test_process.php" enctype="multipart/form-data">
  <div class="form-group">
      <label class="control-label col-sm-2" for="Title">Subject Title:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Title" placeholder="Enter News Title" name="Title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Date">Reg no:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Date" placeholder="Enter Venue" name="Date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="NewsBan">Student PDF:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="NewsBan" name="NewsBan">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Title">mark:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Title" placeholder="Enter News Title" name="Mark">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>