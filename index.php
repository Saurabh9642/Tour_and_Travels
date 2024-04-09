
        <link rel="stylesheet" href="login1.css">
        <style>
            .script{
                color:red;
                font-size: 20px;
                padding: 10px;
            }
        </style>
<form action="index.php" method="post">
    Enter the first name
    <input type="text" name="fname" id="fname"><br><br>
    <div><?php
                    if(isset($error))
                    {
                        foreach($error as $error)
                        {
                            echo '<p class="errmsg">&#x26A0'.$error.'</p>';
                        }
                    }
                    ?></div>
    Enter the Last name
    <input type="text" name="lname" id="lname"><br><br>
    <input type="submit" name="submit">
</form>
<?php
    error_reporting(0);
   $severname = 'localhost';
   $username = 'root';
   $password = "Mangal@2848";
   $dbname = 'login';

    $connection=new mysqli($severname,$username,$password,$dbname);

    if($connection->connect_error)
    {
        die("Connection Fail.....". $connection->connect_error);
    }

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    
    $sql="INSERT INTO `user` (`Sr.No`, `First_Name`, `Last_Name`) VALUES (NULL, '$fname', '$lname')";
    if(isset($_POST['submit'])){
    if($connection->query($sql)==True)
    {
        echo '<script>alert("Name Added Suessfully")</script>';
    }
    else{
        echo "Error...";
    }
}
    $connection->close();
?>
 <?php
                    if(isset($_POST['signup']))
                    {
                        extract($_POST);
                        if(strlen($fn)<5)
                        {
                            $error[]='please enter username using 5 characters atleast';
                        }
                    }
                    ?>
    