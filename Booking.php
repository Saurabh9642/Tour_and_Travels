<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking Form</title>
    <link rel="stylesheet" href="Booking.css">
    <?php require_once("Connection.php")?>  
</head>
<body>
    <div class="container">
        <img src="hotel-banner.63885da4032201.67905415.png">
        <h1>Hotel Booking Form</h1>
        <?php
            $fullName =$_POST['fullName'];
            $email =$_POST['email'];
            $phone =$_POST['phone'];
            $checkInDate =$_POST['checkInDate'];
            $checkOutDate =$_POST['checkOutDate'];
            $roomType =$_POST['roomType'];
            $numOfGuests =$_POST['numOfGuests'];
            $specialRequests =$_POST['specialRequests'];
            $sql="INSERT INTO `hotel_booking`(`Sr.No`, `FullName`, `Email`, `Phoneno`, `Check-In`, `Check-Out`, `Room-Type`, `GuestNo`, `Speical-Request`) VALUES (NULL,'$fullName','$email','$phone','$checkInDate','$checkOutDate',' $roomType','$numOfGuests','$specialRequests')";
            if(isset($_POST['submit']))
            {
                if($connection->query($sql)==TRUE)
                {
                    echo '<script>alert("Booking Successful");</script>';
               
                    echo '<script>window.location.href = "account.php";</script>';
                }
                else
                {
                   echo "Welcome....." . $sql . "<br>" . $connection->error;
                }
            }
        ?>
        <form action="Booking.php" method="post">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName"  minlength="5" maxlength="30"required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="number" id="phone" name="phone" min="1000000000" max="9999999999"required>

            <label for="checkInDate">Check-In Date:</label>
            <input type="date" id="checkInDate" name="checkInDate" required>

            <label for="checkOutDate">Check-Out Date:</label>
            <input type="date" id="checkOutDate" name="checkOutDate" required>

            <label for="roomType">Room Type:</label>
            <select id="roomType" name="roomType" required>
                <option value="single">Single Room</option>
                <option value="double">Double Room</option>
                <option value="suite">Suite</option> 
            </select>

            <label for="numOfGuests">Number of Guests:</label>
            <input type="number" id="numOfGuests" name="numOfGuests" min="1" required>

            <label for="specialRequests">Special Requests:</label>
            <textarea id="specialRequests" name="specialRequests" rows="4" minlength="10" maxlength="50" ></textarea>

            <button type="submit" name="submit">Submit Booking</button>
        </form>
    </div>
</body>
</html>
