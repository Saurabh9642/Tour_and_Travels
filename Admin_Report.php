<!DOCTYPE html>
<html>
    <head>
        <title>Reports</title>
        <?php require_once("Connection.php");?>
        <style>
input[type="text"]{
    text-align: center;
    margin-left:200px;
    width: 340px;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 15px;
    border: 1px solid rgb(101, 94, 223);
    outline: none;
    font-size: 17px;
    background: #eee;
}
.input{
    width: 100px;
    padding: 10px;
    margin-left:20px;
    border: 1px solid rgb(101, 94, 223);
    border-radius: 15px;
    background:#5adf96;
    cursor: pointer;
}
table{
    margin-left: 120px;
    padding: 15px;
    margin-top: 20px;
    font-size:20px;
    border: 1px solid black;
}
th,td{
    padding-left: 30px;  
    border-bottom: 1px solid black;
}
.new{
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
        </style>
    </head>
    <body>
        <h1 class="logo"> GOLDEN <span style="color: rgb(20, 194, 238);">WINGS</span></h1>
    <!-- Tabs -->
    <h2><span style=" background:linear-gradient(to right, #5adf96, #e46d36); padding:15px; border-radius: 30px; margin-left:500px;">Monthly Report</span></h2>
    <br><br>
    <br><br>
    <a href="Admin.php"><button class="new">Back</button></a>
        <form method="post">
            <input type="text" placeholder="Month(MM)" name="search">
            <button name="submit" class="input">Search</button>
        </form>
        
    <div class="container">
        <div class="table">
        <?php
            if (isset($_POST['submit'])) {
                $search = $_POST['search'];

                require_once("Connection.php");
                //The Date format is `date_Name`='search'  the problem is OR condition is not exit 
                //`DepartureDate`='$search';  YEAR(DepartureDate)='$search';
                $sql = "SELECT * FROM `tour_register` WHERE  MONTH(DepartureDate) ='$search'";
                $result = mysqli_query($connection, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table>';
                        echo'<h2 style="text-align:center;">Tour Register & Payment</h2>';
                        echo '<thead>
                        <th colspan="8">Tour Register</th>
                            <tr>
                                <th>ID</th>
                                <th>Full_Name</th>
                                <th>Phone</th>
                                <th>From</th>
                                <th>Destination</th>
                                <th>Address</th>
                                <th>DepartureDate</th>
                                <th>ReturnDate</th>
                            </tr>
                        </thead>';
                        echo '<tbody>';
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
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                    } else {
                        echo '';
                    }
                } else {
                    
                }

                $sql = "SELECT * FROM `tour_payment` WHERE MONTH(PaymentDate) ='$search'";
                $result = mysqli_query($connection, $sql); 

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table>';
                        echo '<thead>
                        <th colspan="6">Tour Payment</th>
                            <tr>
                                <th>ID</th>
                                <th>Full_Name</th>
                                <th>Phone</th>
                                <th>Payment_Date</th>
                                <th>Card_Number</th>
                               <th>Payed Advance</th>
                            </tr>
                        </thead>';
                        echo '<tbody>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['Sr.No'] . '</td>';
                            echo '<td>' . $row['Fullname'] . '</td>';
                            echo '<td>' . $row['Phoneno'] . '</td>';
                            echo '<td>' . $row['PaymentDate'] . '</td>';
                            echo '<td>' . $row['Cardnumber'] . '</td>';
                            echo '<td>10,000 <span style="color:green">&#10004;</span></td>';
                            echo '</tr>';
                            
                        }
                        echo '</tbody>';
                        echo '</table>';
                    } else {
                        echo "";
                    }
                } else {
                    echo "Query error: " . mysqli_error($connection);
                }




                $sql = "SELECT * FROM `offer_register` WHERE MONTH(DepartureDate) ='$search'";
                $result = mysqli_query($connection, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table>';
                        echo'<h2 style="text-align:center;">Offer Register & Payment</h2>';
                        echo '<thead>
                        <th colspan="8">Offer Register</th>
                            <tr>
                                <th>ID</th>
                                <th>Full_Name</th>
                                <th>Phone</th>
                                <th>From</th>
                                <th>Destination</th>
                                <th>Address</th>
                                <th>DepartureDate</th>
                                <th>ReturnDate</th>
                            </tr>
                        </thead>';
                        echo '<tbody>';
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
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                    } else {
                        echo "";
                    }
                } else {
                    echo "Query error: " . mysqli_error($connection);
                }

                $sql = "SELECT * FROM `Offer_payment` WHERE MONTH(PaymentDate) ='$search'";
                $result = mysqli_query($connection, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table>';
                        echo '<thead>
                        <th colspan="6">Offer Payment</th>
                            <tr>
                                <th>ID</th>
                                <th>Full_Name</th>
                                <th>Phone</th>
                                <th>Payment_Date</th>
                                <th>Card_Number</th>
                                <th>Payed Advance</th>
                            </tr>
                        </thead>';
                        echo '<tbody>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['Sr.No'] . '</td>';
                            echo '<td>' . $row['Fullname'] . '</td>';
                            echo '<td>' . $row['PhoneNo'] . '</td>';
                            echo '<td>' . $row['PaymentDate'] . '</td>';
                            echo '<td>' . $row['CardNumber'] . '</td>';
                            echo '<td>5,000 <span style="color:green">&#10004;</span></td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                    } else {
                        echo "";
                    }
                } else {
                    echo "Query error: " . mysqli_error($connection);
                }
                
               
                mysqli_close($connection);
            }
            
            if (isset($_POST['submit'])){
            if (!empty($sql)) {
                echo'<h1>Record Not Found....!</h1>';
            }
            else{
                echo'<h1></h1>';
            }
        }
            ?>

        </div>
    </div>

        

    </body>
</html>