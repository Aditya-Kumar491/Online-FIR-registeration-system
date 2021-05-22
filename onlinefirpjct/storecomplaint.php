<?php
include 'dbcon.php';
$statusMsg = '';
$fileName = basename($_FILES["upload"]["name"][0]);
if (isset($_FILES['upload']) === true) {
    $files = $_FILES['upload'];

    for ($x = 0; $x < count($files['name']); $x++) {
        $name = $files['name'][$x];
        $tmp_name = $files['tmp_name'][$x];
        move_uploaded_file($tmp_name, 'uploads/' . $name);
	$insert = $con->query("INSERT into images (firid,file_name, uploaded_on) VALUES (6,'".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
//file goes to uploads folder
    }
}


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		$name = $_POST['name'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$incDT = $_POST['incDT'];
		$typeComplaint = $_POST['typeComplaint'];
		$section = "";
		$category = "";
		switch ($typeComplaint) {
			case 'Attempt to Murder':
				$section = "344";
				$category = "Murder";
				break;

			case 'Theft':
				$section = "304";
				$category = "Theft & Robbery";
				break;

			case 'Domestic Violence':
				$section = "304";
				$category = "Domestic Affairs";
				break;

			case 'Others':
				$section = "999";
				$category = "Others";
				break;

			default:
				$section = "999";
				$category = "Others";
				break;
		}

		$sql = "insert into fir (Name,Age,Address,Inc_DateTime,Reg_DateTime,Complaint,Section,Category) VALUES ('$name','$age','$address','$incDT',now(),'$typeComplaint','$section','$category')";
		$result = $con->query($sql);
		
		$query = "SELECT * from fir ORDER BY SNo ASC";
		$res = mysqli_query($con,$query);
		$count = mysqli_num_rows($res);

		if($count>0)
		{
			while($row = mysqli_fetch_array($res))
			{
				$firid = $row['SNo'];
			}
		}
		$message = "Complaint Registered";

		$msg =" Your Unique ID for registered complaint is $firid. Please, NOTE IT DOWN to monitor the status of FIR online.";
		echo "<h2 class='btn btn-lg btn-secondary';>$message. Your Unique ID for registered complaint is $firid. Please, NOTE IT DOWN to monitor the status of FIR online. </h2>";
		echo $statusMsg;
	}
	else {
		echo '<script>
		window.location="registercomplaint.php";
		</script>';
	}


?>

<html>
<head>
    <script type='text/javascript' src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</head>
<body>
<script>
var str = "<?php echo $message ?>";
var msg = "<?php echo $msg ?>";
swal(str,msg,"sucess")
.then(function() {
    window.location = "index.html";
});

</script>
</body>    
</html>
<?php
?>

