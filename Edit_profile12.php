<?php session_start(); ?>
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
 <!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
           
     <form action="" method="POST" enctype='multipart/form-data'>
  <div class="login_form">

  <?php 
        if(isset($_POST['update_profile'])){ 
            $Username=$_POST['Username']; 
            $folder='image/';
            $file = $_FILES['image']['tmp_name'];  
            $file_name = $_FILES['image']['name']; 
            $file_name_array = explode(".", $file_name); 
            $extension = end($file_name_array);
            $new_image_name ='profile_'.rand() . '.' . $extension;
            if ($_FILES["image"]["size"] >1000000) {
                $error[] = 'Sorry, your image is too large. Upload less than 1 MB in size .';
            }
            if($file != "")
            {
                if($extension!= "jpg" && $extension!= "png" && $extension!= "jpeg"
                    && $extension!= "gif" && $extension!= "PNG" && $extension!= "JPG" && $extension!= "GIF" && $extension!= "JPEG") {
    
                $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
                }
            }

            $sql="SELECT * FROM `register` WHERE Username='$Username'";
            $res=mysqli_query($connection,$sql);
            if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
                if($oldusername!=$Username){
                if($Username==$row['Username'])
                {
                     $error[] ='Username alredy Exists. Create Unique username';
                }  
            }
            }
            if(!isset($error)){ 
            if($file!= "")
            {
            $stmt=mysqli_query($connection,"SELECT image FROM register WHERE  Email_Id='$email' ");
            $row = mysqli_fetch_array($stmt); 
            $deleteimage=$row['image'];
            unlink($folder.$deleteimage);
            move_uploaded_file($file, $folder . $new_image_name); 
            $sql=mysqli_query($connection,"UPDATE `register` SET `image`='$new_image_name' WHERE  Email_Id='$email' ");
          }
          //$result = mysqli_query($connection, "UPDATE `register` SET `Username`='$Username' WHERE `Email_Id`='$email'");
          if($sql)
          {
              header("location:account.php?profile_updated=1");
          }
          else 
          {
              $error[] = 'Database error: ' . mysqli_error($connection);
          }
          

    }


        }    
        if(isset($error)){ 

foreach($error as $error){ 
  echo '<p class="errmsg">'.$error.'</p>'; 
}
}


        ?> 
     <form method="post" enctype='multipart/form-data' action="">
          <div class="row">
            <div class="col"></div>
           <div class="col-6"> 
           <div class="container">
            <center>
            <?php if($image==NULL)
                {
                 echo '<img src="user.png" style="height: 150px; width:140px;border-radius:50%;">';
                } else { echo '<img src="image/'.$image.'" style="height:150px; width:140px;border-radius:50%;">';}?> 
                <div class="form-group">
                <label>Change Image &#8595;</label>
                <input class="form-control" type="file" name="image" style="width:100%;" >
            </div>
            </div>

  </center>
           </div>
            <div class="col"><p><a href="logout.php"><span style="color:red;">Logout</span> </a></p>
         </div>
          </div>

          <div class="form-group">
          <div class="row"> 
            <div class="col-3">
            </div>
             <div class="col">
            </div>
          </div>
      </div>
      <div class="form-group">
 <div class="row"> 
            <div class="col-3">
            </div>
             <div class="col">
            </div>
          </div>
      </div>
      <div class="form-group">
 <div class="row"> 
            <div class="col-3">
                <label>Username</label>
            </div>
             <div class="col">
                <input type="text" name="username" value="<?php echo $Username;?>" class="form-control">
            </div>
          </div>
      </div>
           <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
<button  class="btn btn-success" name="update_profile">Save Profile</button>
            </div>
           </div>
       </form>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>