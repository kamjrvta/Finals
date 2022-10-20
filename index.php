<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student ID Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
<body>
    <div class="header">
        <h2>Student ID Form</h2>
        <h5>FILL UP THE FORM WITH CORRECT VALUES<h5>
    </div>
    <form method="post" action="registration.html">
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lastname" value="" placeholder ="Jaravata">
        </div>

        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="firstname" value="" placeholder ="Kristine Adel Marie">
        </div>      

        <div class="input-group">
            <label>ID Number</label>
            <input type="text" name="id number"placeholder ="19-2518-829" maxlength="11" oninput ="this.value = this.value.replace(/[^0-9-]/g,'').replace(/(\..*)\./g,'$1');">
        </div>
 
<div class="input-group">
        <form action="/action_page.php">
        <label for="course">Course</label>
        <select name="courses" id="course">
         <option value="BSIT">Bachelor of Science In Information Technology</option>
         <option value="BSCS">Bachelor of Science In Computer Science</option>
        <option value="BAPS">Bachelor of Arts in Political Science</option>
        <option value="BSCPE">Bachelor of Science in Computer Engineering</option>
         <option value="BSAcc">Bachelor of Science in Accountancy</option>
        <option value="BSArchi">Bachelor of Science in Architecture</option>
       </select>
</div>

        <div class="input-group">
            <label>Address</label>
            <input type="text" name="Address" placeholder="Barangay, Town, Province">
        </div>

        <div class="input-group">
            <label>Phone Number</label>
            <input type="text" name="phonenumber" placeholder ="09203559953" maxlength="11" oninput ="this.value = this.value.replace(/[^0-9-]/g,'').replace(/(\..*)\./g,'$1');">
        </div>

        <div class="input-group">
        <label for="birthday">Birthday</label>
        <input type="date" id="birthday" name="birthday">
         </div>

        <div class="input-group">
            <label>In case of emergency, please contact:</label>
            <input type="text" name="EmergencyContact" placeholder="Park Seo Joon (spouse)">
        </div>
        
     
  <br>
  <div class="container">
  <button class="btn">Submit</button>

 
</body>
</html>