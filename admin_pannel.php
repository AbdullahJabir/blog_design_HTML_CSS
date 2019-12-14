<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('image/4.jpg'); height: 300px;background-size:cover;no-repeat;"></div>
<div class="container-fluid">
	<div class="row">
		
		 <div class="col-md-3">
		 	<div class="list-group">
		 		<a href="" class="list-group-item active" style=" background-color:#3498DB;color: #ffffff;border-color:#3498DB;"> Patients</a>
		 		<a href="patient_details.php" class="list-group-item">Patient Details </a>
		 		<a href="" class="list-group-item">Add New Patient</a>
		 		<a href="" class="list-group-item">Payment/Checkout</a>
		 	</div>
<hr>
		 	 	<div class="list-group">
		 		<a href="" class="list-group-item active" style=" background-color:#3498DB;color: #ffffff;border-color:#3498DB;"> Staff</a>
		 		<a href="" class="list-group-item">Staff Details </a>
		 		<a href="" class="list-group-item">Add New Staff</a>
		 		<a href="" class="list-group-item">Remove Staff Members</a>
		 	</div>
		 </div>
		 <div class="col-md-8">
		 	<div class="card">
		 		<div class="card-body"style=" background-color:#3498DB;color: #ffffff">
		 			Book an appointment
		 		</div>
		 		<div class="card-body">
		 				<form class="form-group" action="func.php" method="post">
		 					<label>First Name :</label>
		 					<input type="text" name="fname" class="form-control"><br>

		 					<label>FLast Name :</label>
		 					<input type="text" name="lname" class="form-control"><br>

		 					<label>Email id :</label>
		 					<input type="text" name="email" class="form-control"><br>

		 					<label>Contact :</label>
		 					<input type="text" name="contact" class="form-control"><br>

		 					<label>Doctor Appointment :</label>
		 					<select class="form-control" name="docapp">
		 						<option value="Dr Sharma From 6pm to 8pm ">
		 							Dr Sharma From 6pm to 8pm
		 						</option>

		 						<option value="Dr Shetty From 4pm to 6pm ">
		 							Dr Shetty From 4pm to 6pm  
		 						</option>
		 					</select>
<br> 
		 					<input type="submit" name="pat_submit" class="btn btn-primary" value="Enter Appointment">

		 				</form>




		 		</div>
		 	</div>
		 </div>
		 <div class="col-md-1"></div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>