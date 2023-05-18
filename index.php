<!DOCTYPE html>
<html>
<head>
	<title>Program Find The Average</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="mar-top">
		<h5 class="mar-title">Program Find The Average</h5>
		<div class="col-md-6">
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<div class="text-right">
			  	<button type="button" class="btn btn-success" id="addHtml"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</button>
			  	</div>
			    <form method="POST" action="index.php">
			      <h5>Person A</h5>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Age of Death</label>
				    <input type="text" class="form-control" name="age[0]" id="exampleInputEmail1" placeholder="">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Year of Death</label>
				    <input type="text" class="form-control" name="year[0]" id="exampleInputPassword1" placeholder="">
				  </div>
				  <h5>Person B</h5>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Age of Death</label>
				    <input type="text" class="form-control" name="age[1]" id="exampleInputEmail1" placeholder="">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Year of Death</label>
				    <input type="text" class="form-control" name="year[1]" id="exampleInputPassword1" placeholder="">
				  </div>
				  <div id="formHtml"></div>
				  <button type="submit" id="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Submit</button>
				</form>
			  </div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
			  <div class="panel-body">
				<?php include 'process.php' ?>
			  </div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/add.js"></script>
</body>
</html>