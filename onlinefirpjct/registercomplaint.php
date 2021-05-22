<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login/css/firstat.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register your complaint</title>
    <style type="text/css">
        .registerform{
            margin-top: 5%;
            width:50vw;
            max-width: 90vw;
        }
        .form-group{
            margin: 2vw;
        }
	label{
		text-align:left;
		float:left;
	      }
    </style>
  </head>
  <body>
    <div class=" card registerform">
                      <div class="section-title">
          <h2><strong>Register your complaint</strong></h2><br><br>
        </div>
	<h3>Complainant\Victim Details</h3>
       
	 <form  method="POST" name = "myForm"  enctype="multipart/form-data"  onsubmit = "return(validate());">
          <div class="form-group">
            <label for="inputName" >Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Complainant name" name="name"  required>
          </div>
          <div class="form-group">
            <label for="inputAge">Age</label>
            <input type="number" class="form-control" id="inputAge" placeholder="Enter Age" name="age" required>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <textarea class="form-control" id="inputAddress" rows="3" placeholder="Enter Address" name="address" required></textarea>
          </div>
	<div class="form-group">
            <label for="zip">Pin Code</label>
            <input type="text" class="form-control" id="zip" placeholder="Enter postal code" name="zip">
          </div>
	<div class="form-group">
            <label for="phno">Phone No.</label>
            <input type="text" class="form-control" id="phno" placeholder="Enter phone number" name="phno">
          </div>
	<div class="form-group">
            <label for="aadhar">Aadhar Number</label>
            <input type="text" class="form-control" id="aadhar" placeholder=" Enter Aadhar Number" name="aadhar">
          </div>
	<br><br>
	 <h3>Incident Details</h3>
          <div class="form-group">
            <label for="inputIncDT">Date & Time of Incidence</label>
            <input type="datetime-local" class="form-control" id="inputIncDT" placeholder="Enter Age" name="incDT" required>
          </div>
	
	 
          <div class="form-group">
            <label for="inputComplaint">Select Complaint Type</label>
            <select class="form-control" id="inputComplaint" name="typeComplaint">
	      <option value = "-1" selected>Crime Committed</option>
              <option value="0">ATTEMPT TO MURDER</option>
              <option value="1">PERSON MISSING</option>
	      <option value="2">VEHICLE MISSING / THEFT</option>
	      <option value="3">CELL PHONE MISSING / THEFT</option>
	      <option value="4">JEWEL SNATCHING / THEFT </option>
	      <option value="5">BAG LIFTING / THEFT </option>
	      <option value="6">OTHER THEFT</option>
              <option value="7">RECEIVING STOLEN PROPERTY</option>
	      <option value="8">DOCUMENT MISSING</option>
	      <option value="9">CHEATING / EMBEZZLEMENT / LAND GRABBING </option>
	      <option value="10">MAKING COUNTERFEIT NOTES / COINS</option>
	      <option value="11">MURDER</option>
	      <option value="12">KIDNAPPING / WRONGFUL CONFINEMENT</option>
	      <option value="13">HURT</option>
	      <option value="14">DAMAGING PROPERTY</option>
	      <option value="15">WORDY QUERREL / THREATENING </option>
	      <option value="16">EXTORTION </option>
	      <option value="17">PUBLIC NUISANCE</option>
	      <option value="18">EVE TEASING </option>
	      <option value="19">OFFENCE RELATED TO MARRIAGE</option>
	      <option value="20">RAPE</option>
	      <option value="21">CYBER OFFENCES </option>
	      <option value="22">TRAFFIC VIOLATION</option>
	      <option value="23">DOMESTIC VIOLENCE</option>
	      <option value="24">OTHER OFFENCES </option>
              
              
            </select>
          </div>
	<div class="form-group">
	<label for="poc">Place Of Occurrence</label>
            <textarea class="form-control" id="poc" rows="2" name="poc"></textarea>
          </div>
	<div class="form-group">
	<label for="des">Description Of Incident</label>
            <textarea class="form-control" id="des" rows="5" name="des"></textarea>
          </div>
	<div class="form-group">
		<label for="myFile" style="text-align:left"><strong>Want to upload img/pdf/file</strong></label>
		<input type="file" name="upload[]" multiple>
    		
 	 	
          </div>  
          <button type="submit" class="btn btn-primary" style="background-color:#333" onclick="javascript: form.action='storecomplaint.php';">Submit</button>
        </form>
    </div>
   <script src="validation.js"></script>
  </body>
</html>
