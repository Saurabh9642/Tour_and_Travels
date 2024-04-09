<?php session_start(); ?>
<!DOCTYPE html>
<?php
require_once("Connection.php");
if(!isset($_SESSION["login_sess"]))
{
    header("location:login123.php");
}
$email=$_SESSION["login_email"];
$findresult = mysqli_query($connection, "SELECT * FROM `register` WHERE Email_Id='$email' ");
if($res = mysqli_fetch_array($findresult))
{
    $Username=$res['Username'];
    $Email_Id=$res['Email_Id'];
    $image=$res['image'];
    $oldusername=$res['Username'];
}
?>
<html>
    <title>My Account</title>
    <style>
        .container{
            width: 340px;
            height: 350px;
            font-size: 19px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px black;
        }
        h3{
            text-align:center;
        }
        button{
            margin-top: 50px;
            margin-right: 70px;
            float: right;
            padding: 10px;
            border-radius: 10px;
        }
        img{
            width: 100px;
            height: 100px;
            margin-top: 6px;
        }
        table{
            margin-left: 30px;
        }
        button {
            margin-right: 120px;
        }
        .errmsg{
    margin: 2px auto;
    border-radius: 5px;
    border: 1px solid red;
    background: #d6d3d2;
    text-align: right;
    color: black;
    padding: 1px;
}
    </style>
    <body>
    <form action="" method="POST" enctype='multipart/form-data'>
        <div class="login_form">
        <?php
        if(isset($_POST['Update_Profile']))
        {
            $Username=$_POST['Username'];
            $folder='images/';
            $file = $_FILES['image']['tmp_name'];
            $file_name=$_FILES['image']['name'];
            $file_name_array= explode(".", $file_name);
            $extension = end($file_name_array);
            $new_image_name ='profile_'.rand() . '.'.$extension;
            if($_FILES["image"]["size"]>1000000)
            {
                $error[]='Sorry,your image is too large. Upload less than 1 MB in size .';
            }
            if($file != "")
            {
                if($extension!="jpg" && $extension!= "png" && $extension!= "jpeg" && $extension!= "gif"
                && $extension!= "JPG" && $extension!= "PNG" && $extension!= "JPEG" && $extension!= "GIF")
                {
                    $error[]='Sorry, only JPG,PNG,JPEG & GIF File Allowed';
                } 
            }

            $sql="SELECT * FROM `register` WHERE Username='$Username'";
            $res=mysqli_query($connection,$sql);
            if(mysqli_num_row($res) > 0)
            {
                $row=mysqli_fetch_assoc($res);
                if($oldusername!=$Username)
                {
                    if($Username==$row['Username'])
                    {
                        $error[]='Username alredy Exists. create unique username';
                    }
                }
            }

            if(!isset($error))
            {
                if($file!="")
                {
                    $stmt=mysqli_query($connection,"SELECT image FROM register WHERE  Email_Id='$email' ");
                    $row = mysqli_fetch_array($stmt);
                    $deleteimage=$row['image'];
                    unlink($folder.$deleteimage);
                    move_uploaded_file($file , $folder . $new_image_name);
                    mysqli_query($connection,"UPDATE `register` SET `image`='$new_image_name' WHERE  Email_Id='$email' ");
                }
                $result= mysqli_query($connection,"UPDATE `register` SET `Username`='$Username' WHERE  Email_Id='$email' ");
                if($result)
                {
                    header("location:account.php?Update_Profile=1");
                }
                else
                {
                    $error[]='something went wrong';
                }
            }

            if(isset($error)){ 

                foreach($error as $error){ 
                  echo '<p class="errmsg">'.$error.'</p>'; 
                }
                }


        }
        ?>
    <form method="post" enctype='multipart/form-data' action="">
    <div class="container">
        <center>
        <?php
        if($image==NULL)
        {
            echo '<img src="user.png">';
        }
        else
        {
            echo '<img src="image/'.$image.'">';
        }
        ?>
        <label for="">Change Image &#8595;</label>
        <input class="form-control" type="file" name="image" style="width:100%;" >
        </center>
        <br>
        <table>
            <tr>
                <th>Username :</th>
                <td><input type="text" value="<?php echo $Username;?>" name="Username" class="form-control"></td>
            </tr>
        </table>
        <button name="Update_Profile">Update Profile</button>
    </div>
    </form>
    </body>
</html>