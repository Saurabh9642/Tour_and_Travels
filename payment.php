<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="payment.css">
        <?php require_once("Connection.php")?>  
    </head>
    <body>
        <div class="app-container">
            <div class="top-box">
                <p><span class="left-icon">&#x2190;</span>Golden Wings<span class="right-icon">&#xb7;&#xb7;&#xb7;</span></p>
            </div>
            <div class="middle-box">
                <h1>10,000<span>&#8377</span></h1>
                <p>Pay to Golden Wings Company Ltd</p>
            </div>
            <div class="bottom-box">
                <button type="button" class="payment-option-btn">Pay with Paypal</button>
                
            </div>
            <form action="payment.php" method="post">
            <div class="main">
                <label>Full Name</label>
                <input type="text" placeholder="Enter Full Name" name="fullname" minlength="5" maxlength="22" required>
                <label>Phone No</label>
				<input type="number" placeholder=" Phone Number" name="phonenumber" min="1000000000" max="9999999999"required>
                <label>Date of Payment</label>
				<input type="date" placeholder="Date" name="dateofpayment"required>
                <label>Card Number</label>
				<input type="number" placeholder="Card Number" name="cardnumber" min="100000000000" max="999999999999"required>
                <label>PIN</label>
				<input type="password" placeholder="PIN Number" name="pinnumber" minlength="4" maxlength="6"required>
                <br>
                <br>
                <input type="submit" name="submit" class="btn">
            </div>
            </form>
            <?php
             if(isset($_POST['submit']))
             {
           $fullname = $_POST['fullname'];
           $phonenumber = $_POST['phonenumber'];
           $dateofpayment = $_POST['dateofpayment'];

           $cardnumber = $_POST['cardnumber'];
           $pinnumber = $_POST['pinnumber'];

            $sql="INSERT INTO `tour_payment` (`Sr.No`, `Fullname`, `Phoneno`, `PaymentDate`, `Cardnumber`, `PIN`) VALUES (NULL, '$fullname', '$phonenumber', '$dateofpayment', '$cardnumber', '$pinnumber')";
                if($connection->query($sql)==TRUE)
                {
                    echo '<script>alert("Payment Successful");</script>';
               
                    echo '<script>window.location.href = "account.php";</script>';
                }
                else
                {
                   echo "Welcome.....";
                }
            }
        ?>
        </div>
    </body>
</html>