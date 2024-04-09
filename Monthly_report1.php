<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title> 
    <?php require_once("Connection.php");
    ?>
    <link rel="stylesheet" href="Admin.css">
    <style>
        /* CSS for tabs */
        body{
            background-image: url(yikrkByMT.jpg);
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

        ul{
            font-size: 25px;
        }

        li{
            border: 1px solid black;
            width: 350px;
            padding: 30px;
            margin: 50px;
            display: block;
        }

        button {
            float: left;
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
   

    <!-- Tabs -->
    <h2><span style=" background:linear-gradient(to right, #5adf96, #e46d36); padding:20px; border-radius: 30px;">Monthly_Report</span></h2>
    <br><br>
    <a href="Admin.php"><button>Back</button></a>
    <br><br>
    <section class="tabs-section">
        <div class="container">
            <div class="tabs">
                <div class="tab active">
                    <h3>Tour Report</h3>
                </div>
                <div class="tab">
                    <h3>Offer Report</h3>
                </div>
                <div class="tab">
                    <h3>Hotel Report</h3>
                </div>
                <div class="tab">
                    <h3>Payment Report</h3>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div class="content dashboard active">
                <header style="margin-left: 100px; font-size: 25px;">
                <?php
                    $currentMonth= date('F');
                    echo '' .$currentMonth.$reportYear;
// Define the desired month and year for the report
                    $reportMonth = date('m'); // October
                    $reportYear = date('Y');

                    // Query the database for tour and travel data for the specified month and year
                    $sql = "SELECT * FROM `tour_register` WHERE MONTH(DepartureDate) = $reportMonth AND YEAR(DepartureDate) = $reportYear";

                    // Execute the query
                    $result = mysqli_query($connection, $sql);

                    // Check if there are results
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table border="1">';
                        echo '<tr><th>ID</th><th>Full_Name</th><th>Phone</th><th>From</th><th>Destination</th>
                        <th>Address</th><th>DeparturDate</th><th>ReturnDate</th><th>Person</th></tr>';
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['ID'] . '</td>';
                        echo '<td>' . $row['FullName'] . '</td>';
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
                        echo "No tour and travel data found for the specified month and year.";
                    }
                    ?>
                </header>
                <main></main>
            </div>
            <div class="content ">
                <header  style="margin-left: 50px; font-size: 25px;">
                <?php
                 $currentMonth= date('F');
                 echo '' .$currentMonth.$reportYear;
// Define the desired month and year for the report
                    $reportMonth =date('m'); // October
                    $reportYear = date('Y');

                    // Query the database for tour and travel data for the specified month and year
                    $sql = "SELECT * FROM `offer_register` WHERE MONTH(DepartureDate) = $reportMonth AND YEAR(DepartureDate) = $reportYear";
                    // Execute the query
                    $result = mysqli_query($connection, $sql);

                    // Check if there are results
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table border="1">';
                echo '<tr><th>ID</th><th>Full_Name</th><th>Phone</th><th>From</th><th>Destination</th>
                <th>Address</th><th>DeparturDate</th><th>ReturnDate</th><th>Person</th></tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['ID'] . '</td>';
                echo '<td>' . $row['Fullname'] . '</td>';
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
                        echo "No tour and travel data found for the specified month and year.";
                    }
                    ?>
                </header>
                <main></main>
            </div>
            <div class="content product_details">
                <header  style="margin-left: 80px;">
                    <h1>none</h1>
                </header>
                <main></main>
            </div>
            <div class="content product_details">
                <header  style="margin-left: 200px; font-size: 25px;">
               <?php
               echo'<h2 style="font-size: 25px;">Tour Payment Report</h2>';
               $currentMonth= date('F');
               echo '' .$currentMonth.$reportYear;
// Define the desired month and year for the report
                  $reportMonth =date('m'); // October
                  $reportYear = date('Y');

                  // Query the database for tour and travel data for the specified month and year
                  $sql = "SELECT * FROM `tour_payment` WHERE MONTH(PaymentDate) = $reportMonth AND YEAR(PaymentDate) = $reportYear";

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

               echo'<h2 style="font-size: 25px;">Offer Payment Report</h2>';
               $currentMonth= date('F');
               echo '' .$currentMonth.$reportYear;
// Define the desired month and year for the report
                  $reportMonth =date('m'); // October
                  $reportYear = date('Y');

                  // Query the database for tour and travel data for the specified month and year
                  $sql = "SELECT * FROM `offer_payment` WHERE MONTH(PaymentDate) = $reportMonth AND YEAR(PaymentDate) = $reportYear";

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

                </header>
                <main></main>
            </div>
        </div>
    </section>

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
