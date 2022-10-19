<!DOCTYPE html>
<html>
<head>
	<title> Student ID System Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<head>
		<body>

			<div>
				<?php
				if(isset($_POST['create'])){
					$lastname = $_POST['lastname'];
					$firstname = $_POST['firstname'];
					$middlename = $_POST['middlename'];
					$idnumber = $_POST['idnumber'];
					$course = $_POST['course'];
					$address= $_POST['address'];
					$birthdate = $_POST['birthdate'];
					$emergencycontact = $_POST['emergencycontact'];

					echo $lastname . " " . $firstname . " " . $middlename . " " . $idnumber . " " . $course . " " . $address . " " . $birthdate . " " . $emergencycontact;

				}
			?>
				<form action="idform.php" method="post">
					<div class="container">
						<div class="row">
							<div class="col-sm-3">
						<h1>Student ID Form</h1>
						<p>Fill up the form with correct values.</p>
						<hr class="mb-3">
						<!--lastname-->
						<label for="firstname"><b>Last Name</b></label>
						<input class="form-control" type="text" name="firstname" required>
                        <!--firstname-->
						<label for="lastname"><b>First Name</b></label>
						<input class="form-control" type="text" name="lastname" required>
						<!--middlename-->
					    <label for="middlename"><b>Middle Name</b></label>
						<input class="form-control" type="text" name="middlename" required>
						<!--idnumber-->
					    <label for="idnumber"><b>ID Number</b></label>
						<input class="form-control" type="text" name="idnumber" required>
						<!--couclass="form-control" rse-->
					    <label for="course"><b>Course</b></label>
						<input class="form-control" type="text" name="course" required>
                       <!--address-->
                        <label for="address"><b>Address</b></label>
						<input class="form-control" type="text" name="address" required>
                       <!--birthdate-->
                        <label for="birthdate"><b>Birthdate</b></label>
						<input class="form-control" type="text" name="birthdate" required>
                       <!--emergencycontact-->
                        <label for="emergencycontact"><b>Emergency Contact</b></label>
						<input class="form-control" type="text" name="emergencycontact" required>
                        <hr class="mb-3">
                       <input class="btn btn-primary" type="submit" value="Submit">
					</div>
				</div>
			</div>
				</form>
			</div>
		</body>
	
	</html>