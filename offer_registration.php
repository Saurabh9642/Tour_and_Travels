<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet"href="registration (2).css">
		<?php require_once("Connection.php")?> 
	</head>
<body>
	<div class="container">
	<?php session_start(); ?>
		<?php
		$fullName = $_POST['FullName'];
		$aadharNo = $_POST['AdharNo'];
		$email = $_POST['Email'];

		$phoneNo = $_POST['PhoneNo'];
		$fromTo = $_POST['From/To'];
		$destinationName = $_POST['DestinationName'];

		$address = $_POST['Address'];
		$pinCode = $_POST['PinCode'];
		$departureDate = $_POST['DepartureDate'];

		$returnDate = $_POST['ReturnDate'];
		$noOfPerson = $_POST['Person'];
		$journeyType = $_POST['JourneyType'];

		$sql="INSERT INTO `offer_register`(`ID`, `Fullname`, `Aadharno`, `Email`, `Phoneno`, `From_to`, `Destination`, `Address`, `Pincode`, `DepartureDate`, `ReturnDate`, `person`, `Journeyname`) VALUES (NULL, '$fullName', '$aadharNo', '$email', '$phoneNo', '$fromTo', '$destinationName', '$address', '$pinCode', '$departureDate', '$returnDate', '$noOfPerson', '$journeyType')";
		if(isset($_POST['save']))
            {
                if($connection->query($sql)==TRUE)
                {
					$_SESSION["offer_register"]="1";
					header("location:offer.php");
                }
                else
                {
                    echo "Error: " . $sql . "<br>" . $connection->error;
                }
            }
		?>
		<form action="offer_registration.php" method="post">
			<h2>Booking Details</h2>
			<div class="content">
				<div class="input">
					<label>Full Name</label>
					<input type="text"placeholder="Enter Full Name" name="FullName" minlength="4" maxlength="30" required>
				</div>
				<div class="input">
					<label>Aadhar Card</label>
					<input type="number"placeholder="Aadhar Card no" name="AdharNo" min="100000000000" max="999999999999"required>
				</div>
				<div class="input">
					<label>Email Id</label>
					<input type="email"placeholder="Email Id" name="Email"required>
				</div>
				<div class="input">
					<label>Phone Number</label>
					<input type="number"placeholder=" Phone Number" name="PhoneNo" min="1000000000" max="9999999999" required>
				</div>
				<div class="input">
					<label>From</label>
					<input type="text"placeholder="City" name="From/To"required>
				</div>
				<div class="input">
					<label> To Destination Name</label>
					<input type="text"placeholder="Destination Name" name="DestinationName" required>
				</div>
				<div class="input">
					<label>Address</label>
					<input type="text"placeholder="Address" name="Address"required>
				</div>
				<div class="input">
					<label>Pin Code</label>
					<input type="number"placeholder="Pin Code" name="PinCode" min="100000" max="999999"required>
				</div>
				<div class="input">
					<label>Departure Date</label>
					<input type="date"placeholder="Departure Date" name="DepartureDate"required>
				</div>
				<div class="input">
					<label>Return date</label>
					<input type="date"placeholder="Return" name="ReturnDate"required>
				</div>
				<div class="input">
					<label>No of Person</label>
					<input type="number"placeholder="No of Person" name="Person"required>
				</div>
				<div class="input">
					<label>Journey Type</label>
					<input type="text"placeholder="Journey Type" name="JourneyType"required>
				</div>
				</div>
				<div class="button">
					<button name="save">Save</button>
				</div>
			</div>
		</form>	
</div>

</body>
</html>