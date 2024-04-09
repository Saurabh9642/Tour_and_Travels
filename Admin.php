<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title> 
    <?php require_once("Connection.php");?>
    <link rel="stylesheet" href="Admin.css">
    <style>
        /* CSS for tabs */
        body{
            background-image: url(yikrkByMT.jpg);
            width: 100%;
            }
        .tabs-section {
            text-align: center;
        }

        .tabs {
            display: inline-block;
        }

        .tab {
            display: inline-block;
            padding: 10px 20px;
            cursor: pointer;
        }

        .tab.active {
            background:linear-gradient(to right, #0983f5, #8dcbe7);
            border-radius: 40px;
            color: white;
            
        }

        /* CSS for tab content */
        .content {
            display: none;
            padding: 20px;
        }

        .content.active {
            display: block;
        }
        h3{
            color:black;
            font-size: 28px;
        }
        th,td{
            font-size:20px;
        }
        h2{
            text-align: center;
        }
        p{
            margin-top: 20px;
            margin-left: 990px;
            color: red;
            font-size: 20px;
        }

        button {
            float: right;
    background-color: #007BFF;
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    margin-left: 40px;
    background-image:linear-gradient(to right, #ff105f, #ffad06);
}

button:hover {
    box-shadow:10px 10px 20px #312e2e;
    border-color:#2691d9;
    transition:.5s;	
}

    </style>
</head>
<body >
<h1 class="logo"> GOLDEN <span style="color: rgb(20, 194, 238);">WINGS</span></h1>
    <a href="Admin_logout.php"><p>Logout</p></a>

    <!-- Tabs -->
    <h2><span style=" background:linear-gradient(to right, #5adf96, #e46d36); padding:20px; border-radius: 30px;">Admin Panel</span></h2>
    <br><br>
    <section class="tabs-section">
        <div class="container">
            <div class="tabs">
                <div class="tab active">
                    <h3>Register</h3>
                </div>
                <div class="tab">
                    <h3>Tour Register</h3>
                </div>
                <div class="tab">
                    <h3>Offer Register</h3>
                </div>
                <div class="tab">
                    <h3>Hotel Booking</h3>
                </div>
                <div class="tab">
                    <h3>Payment</h3>
                </div>
                <div class="tab">
                    <h3>Feedback</h3>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div class="content dashboard active">
                <header style="margin-left: 200px;">
                    <?php
                $sql = "SELECT * FROM `register`";

                // Execute the query
                $result = mysqli_query($connection, $sql);

                // Check if there are results
                if (mysqli_num_rows($result) > 0) {
                echo '<table border="1">';
                echo '<tr><th>ID</th><th>User_Name</th><th>Email</th><th>Image</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['Sr_No'] . '</td>';
                echo '<td>' . $row['Username'] . '</td>';
                echo '<td>' . $row['Email_Id'] . '</td>';
                echo '<td>' . $row['image'] . '</td>';
                echo '</tr>';
                }
                echo '</table>';
                } else {
                echo "No data found.";
                }
                ?>
                </header>
                <main></main>
            </div>
            <div class="content ">
                <header  style="margin-left: 50px;">
                <?php
                $sql = "SELECT * FROM `tour_register`";

                // Execute the query
                $result = mysqli_query($connection, $sql);

                // Check if there are results
                if (mysqli_num_rows($result) > 0) {
                echo '<table border="1">';
                echo '<tr><th>ID</th><th>Full_Name</th><th>Aadhar_No</th><th>Email</th><th>Phone</th><th>From</th><th>Destination</th>
                <th>Address</th><th>DeparturDate</th><th>ReturnDate</th><th>Person</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['ID'] . '</td>';
                echo '<td>' . $row['FullName'] . '</td>';
                echo '<td>' . $row['AadharNo'] . '</td>';
                echo '<td>' . $row['Email'] . '</td>';
                echo '<td>' . $row['PhoneNo'] . '</td>';
                echo '<td>' . $row['From/To'] . '</td>';
                echo '<td>' . $row['DestinationName'] . '</td>';
                echo '<td>' . $row['Address'] . '</td>';
                echo '<td>' . $row['DepartureDate'] . '</td>';
                echo '<td>' . $row['ReturnDate'] . '</td>';
                echo '<td>' . $row['Person'] . '</td>';
                echo '</tr>';
                }
                echo '</table>';
                } else {
                echo "No data found.";
                }
                ?>
                </header>
                <main></main>
            </div>
            <div class="content product_details">
                <header  style="margin-left: 80px;">
                <?php
                $sql = "SELECT * FROM `offer_register`";

                // Execute the query
                $result = mysqli_query($connection, $sql);

                // Check if there are results
                if (mysqli_num_rows($result) > 0) {
                echo '<table border="1">';
                echo '<tr><th>ID</th><th>Full_Name</th><th>Aadhar_No</th><th>Email</th><th>Phone</th><th>From</th><th>Destination</th>
                <th>Address</th><th>DeparturDate</th><th>ReturnDate</th><th>Person</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['ID'] . '</td>';
                echo '<td>' . $row['Fullname'] . '</td>';
                echo '<td>' . $row['Aadharno'] . '</td>';
                echo '<td>' . $row['Email'] . '</td>';
                echo '<td>' . $row['Phoneno'] . '</td>';
                echo '<td>' . $row['From_to'] . '</td>';
                echo '<td>' . $row['Destination'] . '</td>';
                echo '<td>' . $row['Address'] . '</td>';
                echo '<td>' . $row['DepartureDate'] . '</td>';
                echo '<td>' . $row['ReturnDate'] . '</td>';
                echo '<td>' . $row['person'] . '</td>';
                echo '</tr>';
                }
                echo '</table>';
                } else {
                echo "No data found.";
                }
                ?>
                </header>
                <main></main>
            </div>
            <div class="content product_details">
                <header  style="margin-left: 200px;">
                <?php
                $sql = "SELECT * FROM `hotel_booking`";

                // Execute the query
                $result = mysqli_query($connection, $sql);

                // Check if there are results
                if (mysqli_num_rows($result) > 0) {
                echo '<table border="1">';
                echo '<tr><th>ID</th><th>Full_Name</th><th>Email</th><th>Phone</th><th>Check_Date</th><th>Check_Out</th>
                <th>Room_Type</th><th>Guest</th><th>Request</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['Sr.No'] . '</td>';
                echo '<td>' . $row['FullName'] . '</td>';
                echo '<td>' . $row['Email'] . '</td>';
                echo '<td>' . $row['Phoneno'] . '</td>';
                echo '<td>' . $row['Check-In'] . '</td>';
                echo '<td>' . $row['Check-Out'] . '</td>';
                echo '<td>' . $row['Room-Type'] . '</td>';
                echo '<td>' . $row['GuestNo'] . '</td>';
                echo '<td>' . $row['Speical-Request'] . '</td>';
                echo '</tr>';
                }
                echo '</table>';
                } else {
                echo "No data found.";
                }
                ?>
                </header>
                <main></main>
            </div>
            <div class="content product_details">
                <header style="margin-left: 200px;">
                <?php
                echo'<h2>Tour Payment Details</h2>';
                $sql = "SELECT * FROM `tour_payment`";

                // Execute the query
                $result = mysqli_query($connection, $sql);

                // Check if there are results
                if (mysqli_num_rows($result) > 0) {
                echo '<table border="1">';
                echo '<tr><th>ID</th><th>Full_Name</th><th>Phone</th><th>Payment_Date</th><th>Card_Number</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['Sr.No'] . '</td>';
                echo '<td>' . $row['Fullname'] . '</td>';
                echo '<td>' . $row['Phoneno'] . '</td>';
                echo '<td>' . $row['PaymentDate'] . '</td>';
                echo '<td>' . $row['Cardnumber'] . '</td>';
                echo '</tr>';
                }
                echo '</table>';
                } else {
                echo "No data found.";
                }

                echo'<br>';

                echo'<h2>Offer Payment Details</h2>';

                $sql = "SELECT * FROM `offer_payment`";

                // Execute the query
                $result = mysqli_query($connection, $sql);

                // Check if there are results
                if (mysqli_num_rows($result) > 0) {
                echo '<table border="1">';
                echo '<tr><th>ID</th><th>Full_Name</th><th>Phone</th><th>Payment_Date</th><th>Card_Number</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['Sr.No'] . '</td>';
                echo '<td>' . $row['Fullname'] . '</td>';
                echo '<td>' . $row['PhoneNo'] . '</td>';
                echo '<td>' . $row['PaymentDate'] . '</td>';
                echo '<td>' . $row['CardNumber'] . '</td>';
                echo '</tr>';
                }
                echo '</table>';
                } else {
                echo "No data found.";
                }
                ?>

                </header>
                <main></main>
            </div>
            
            <div class="content product_details">
                <header style="margin-left: 200px;">
                <?php
                $sql = "SELECT * FROM `feedback`";

                // Execute the query
                $result = mysqli_query($connection, $sql);

                // Check if there are results
                if (mysqli_num_rows($result) > 0) {
                echo '<table border="1">';
                echo '<tr><th>ID</th><th>Tour Name</th><th>Tour Guide</th><th>Full Name</th><th>Email</th><th>Phone</th>
                <th>Positive</th><th>Comments</th><th>Permission</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['sr.no'] . '</td>';
                echo '<td>' . $row['TourName'] . '</td>';
                echo '<td>' . $row['TourGuide'] . '</td>';
                echo '<td>' . $row['fullname'] . '</td>';
                echo '<td>' . $row['Email'] . '</td>';
                echo '<td>' . $row['Phone'] . '</td>';
                echo '<td>' . $row['you to recommend our services to others'] . '</td>';
                echo '<td>' . $row['Additional Comments:'] . '</td>';
                echo '<td>' . $row['Permission to Use Feedback'] . '</td>';
                echo '</tr>';
                }
                echo '</table>';
                } else {
                echo "No data found.";
                }
                ?>
                </header>
                <main></main>
            </div>












        </div>
    </section>
<a href="Admin_Report.php"><button>Reports</button></a>

    <script>
        // JavaScript for tab functionality (same as in the previous response)
        const tabs = document.querySelectorAll(".tabs .tab");
        const tabContents = document.querySelectorAll(".tab-content .content");

        tabs.forEach((tab, index) => {
            tab.addEventListener("click", () => {
                tabContents.forEach((content) => {
                    content.classList.remove("active");
                });
                tabs.forEach((tab) => {
                    tab.classList.remove("active");
                });
                tabContents[index].classList.add("active");
                tabs[index].classList.add("active");
            });
        });
    </script>
</body>
</html>
