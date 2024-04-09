<?php session_start(); ?>
<!DOCTYPE html>
<?php
require_once("Connection.php");
if(!isset($_SESSION["login_sess"]))
{
    header("location:login1.php");
}
$email=$_SESSION["login_email"];
$findresult = mysqli_query($connection, "SELECT * FROM `register` WHERE Email_Id='$email' ");
if($res = mysqli_fetch_array($findresult))
{
    $Username=$res['Username'];
    $Email_Id=$res['Email_Id'];
    $image=$res['image'];
}
?>
<html>
    <header>
        <title>Client_Report</title>
        <link rel="stylesheet" type="text/css" href="report.css">
        <style>
            button {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    font-size: 17px;
    font-weight: 100;
    border-radius: 10px;
    margin-top: 10px;
    margin-left: 50px;
    cursor: pointer;
    width: 100px;
    background:linear-gradient(120deg,#52aeeb,#028085);
}

button:hover {
    box-shadow:10px 10px 20px #312e2e;
    border-color:#2691d9;
    transition:.5s;	
}
h2{
    text-align: center;
    font-weight: bold;
    display: block;
    text-shadow: 0px 0px 10px rgb(28, 49, 241);
    font-size: 30px;
}

h1{
    font-size: 25px;
}
        </style>
    </header>
<body>
    <div class="container" style=" height: 1090px; width:800px; padding-left: 80px; border: 2px solid black;">
    <h1 class="logo"> GOLDEN <span style="color: rgb(20, 194, 238);">WINGS</span></h1>
    <h2>Ticket</h2>
                        <?php
                        if($image==NULL)
                            {
                                echo '<img src="user.png" style="width:100px;height:100px;margin-top:6px;">';
                            }
                        else
                            {
                                echo '<img src="image/'.$image.'"  style="width:150px;height:140px;margin-top:6px;">';
                            }
                            
                        ?>
                        </center>
                        <br>
                <div style="margin-left: 250px; margin-top: -150px;">
                        <h3>Hello, <?php echo $Username ; ?></h3>
                    <table>
                    <tr>
                        <th>Username :</th>
                        <td><?php echo $Username; ?></td>
                        </tr>
                        <br>
                    <tr>
                        <th>Email_Id  :</th>
                        <td><?php echo $Email_Id; ?></td>
                        </tr>
                    </table>
                </div>
                    
                <h3>Tour Details</h3>
                <div class="new">
                    <?php
                    // Use a parameterized query to retrieve full names based on the user's email
                    $sql = "SELECT `FullName`, `PhoneNo`,`From/To`, `DestinationName`, `Address`,`DepartureDate`, `ReturnDate`, `Person` FROM `tour_register` WHERE Email = ?";
                    
                    // Create a prepared statement
                    $stmt = mysqli_prepare($connection, $sql);
                    
                    // Bind the email address as a parameter using the actual email from the session variable
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    
                    // Execute the query
                    mysqli_stmt_execute($stmt);
                    
                    // Get the result
                    $result = mysqli_stmt_get_result($stmt);

                    // Check if there are results
                    if (mysqli_num_rows($result) > 0) {
                        echo '<ul>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li>';
                            echo '<strong>Full Name: </strong>'  . $row['FullName'];echo '<br>';
                            echo '<strong>Phone No : </strong>'. $row['PhoneNo'];echo '<br>';
                            echo '<strong>From : </strong>'. $row['From/To'];
                            echo '<strong style="margin-left:140px;">Destination : </strong>'. $row['DestinationName'];echo '<br>';
                            echo '<strong>Adderess : </strong>'. $row['Address'];echo '<br>';
                            echo '<strong>Day to Travel : </strong>'. $row['DepartureDate'];
                            echo '<strong style="margin-left:50px;">Return Date: </strong>'. $row['ReturnDate'];echo '<br>';
                            echo '<strong>Your Guest : </strong>'. $row['Person'];echo '<br>';
                            echo '<strong>Payed Advance :</strong>&#8377; 10,000<br>';
                            echo '</li>';
                        }
                        echo '</ul>';
                    } else {
                        echo '<a href="http://localhost/jadhav/tour%20book.html">&#9755; Please Book the Tour......</a>';
                    }

                    // Close the prepared statement
                    mysqli_stmt_close($stmt);
                    ?>
                </div>

                <h3>Offer Details</h3>
                <div class="new">
                    <?php
                    // Use a parameterized query to retrieve full names based on the user's email
                    $sql = "SELECT `Fullname`, `Phoneno`,`From_To`, `Destination`, `Address`,`DepartureDate`, `ReturnDate`, `person` FROM `offer_register` WHERE Email = ?";
                    
                    // Create a prepared statement
                    $stmt = mysqli_prepare($connection, $sql);
                    
                    // Bind the email address as a parameter using the actual email from the session variable
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    
                    // Execute the query
                    mysqli_stmt_execute($stmt);
                    
                    // Get the result
                    $result = mysqli_stmt_get_result($stmt);

                    // Check if there are results
                    if (mysqli_num_rows($result) > 0) {
                        echo '<ul>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li>';
                            echo '<strong>Full Name: </strong>'  . $row['Fullname'];echo '<br>';
                            echo '<strong>Phone No : </strong>'. $row['Phoneno'];echo '<br>';
                            echo '<strong>From : </strong>'. $row['From_To'];
                            echo '<strong style="margin-left:140px;">Destination : </strong>'. $row['Destination'];echo '<br>';
                            echo '<strong>Adderess : </strong>'. $row['Address'];echo '<br>';
                            echo '<strong>Day to Travel : </strong>'. $row['DepartureDate'];
                            echo '<strong style="margin-left:50px;">Return Date: </strong>'. $row['ReturnDate'];echo '<br>';
                            echo '<strong>Your Guest : </strong>'. $row['person'];echo '<br>';
                            echo '<strong>Payed Advance :</strong>&#8377; 5,000<br>';
                            echo '</li>';
                        }
                        echo '</ul>';
                        
                    } else {
                        echo "Golden Wings Special Offer is Expired.";
                    }

                    // Close the prepared statement
                    mysqli_stmt_close($stmt);
                    ?>
                </div>


                <h3>Room Reservation : </h3>
                <div class="new">
                    <?php
                    // Use a parameterized query to retrieve full names based on the user's email
                    $sql = "SELECT `FullName`, `Phoneno`, `Check-In`, `Check-Out`, `Room-Type`, `GuestNo` FROM `hotel_booking` WHERE Email = ?";
                    
                    // Create a prepared statement
                    $stmt = mysqli_prepare($connection, $sql);
                    
                    // Bind the email address as a parameter using the actual email from the session variable
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    
                    // Execute the query
                    mysqli_stmt_execute($stmt);
                    
                    // Get the result
                    $result = mysqli_stmt_get_result($stmt);

                    // Check if there are results
                    if (mysqli_num_rows($result) > 0) {
                        echo '<ul>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li>';
                            echo '<strong>Full Name: </strong>'  . $row['FullName'];echo '<br>';
                            echo '<strong>Phone No : </strong>'. $row['Phoneno'];echo '<br>';
                            echo '<strong>Check In : </strong>'. $row['Check-In'];
                            echo '<strong style="margin-left:50px;">Check Out : </strong>'. $row['Check-Out'];echo '<br>';
                            echo '<strong>Room : </strong>'. $row['Room-Type'];echo '<br>';
                            echo '<strong>Guest : </strong>'. $row['GuestNo'];
                            echo '</li>';
                        }
                        echo '</ul>';
                    } else {
                        echo "You don't have any Reservation .";
                    }

                    // Close the prepared statement
                    mysqli_stmt_close($stmt);
                    ?>
                </div>

                <div class="no-print">
                <a href="http://localhost/jadhav/account.php"><button>back</button></a>
                <button id="printButton">Print</button>
                <!-- Add this to your report.php file -->
                <form action="Client_Report.php" method="post" style="float: right; margin-right: 320px;">
                    <button type="submit" name="cancel_all">Cancel </button>
                </form>
                </div>
            <?php
                    if (isset($_POST["cancel_all"])) {
                        // Handle tour cancellation
                        $sql_tour = "DELETE FROM `tour_register` WHERE Email = ?";
                        $stmt_tour = mysqli_prepare($connection, $sql_tour);
                        mysqli_stmt_bind_param($stmt_tour, "s", $email);
                        mysqli_stmt_execute($stmt_tour);

                        // Handle offer cancellation
                        $sql_offer = "DELETE FROM `offer_register` WHERE Email = ?";
                        $stmt_offer = mysqli_prepare($connection, $sql_offer);
                        mysqli_stmt_bind_param($stmt_offer, "s", $email);
                        mysqli_stmt_execute($stmt_offer);

                        // Handle room reservation cancellation
                        $sql_reservation = "DELETE FROM `hotel_booking` WHERE Email = ?";
                        $stmt_reservation = mysqli_prepare($connection, $sql_reservation);
                        mysqli_stmt_bind_param($stmt_reservation, "s", $email);
                        mysqli_stmt_execute($stmt_reservation);

                        header("location: account.php"); // Redirect back to the report page
                        exit;
                    }

            ?>
                </form>

                <script>
    document.getElementById('printButton').addEventListener('click', function() {
        // Hide elements that you don't want to print
        var elementsToHide = document.querySelectorAll('.no-print');
        elementsToHide.forEach(function(element) {
            element.style.display = 'none';
        });

        // Trigger the print dialog
        window.print();

        // Restore the hidden elements after printing
        elementsToHide.forEach(function(element) {
            element.style.display = 'block';
        });
    });
</script>

    </div>

</body>
</html>