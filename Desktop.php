<!DOCTYPE html>
<html>
<head>
    <title>Desktop</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
  #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  margin-top: -500px;
}


h1{
    margin-top: -600px;
}
h2{
    font-size: 70px;
    margin-top: 150px;
}
h3{
  font-size: 40px;
  text-shadow: 0px 0px 10px rgb(28, 49, 241);
  color: skyblue;
}
button{
    float: right;
    margin-top:-450px;
    margin-right: 50px;
    color: blue;
    background:linear-gradient(to right, #0983f5, #eeecf1);
    font-size: 20px;
    font-weight: bold;
    padding: 12px 55px;
    border-radius: 20px;
    border: 1px solid #0c0b0b;
    outline: none;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    cursor: pointer;
}
button:hover{
    box-shadow:10px 10px 20px #312e2e;
    border-color:#2691d9;
    transition:.5s;	
}
    </style>
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="video1.mp4" type="video/mp4">
      </video>
      <div class="content">
        <h1 class="logo"> GOLDEN <span style="color: rgb(144, 12, 231);">WINGS</span></h1>
        <h2>Explore The<span style="color: #92437e"> Beauty</span><br>Of The Beautiful<br><span style="color: #a6e70d">World.....</span></h2>
        <a href="http://localhost/jadhav/Login1.php"><button>LOGIN</button></a>
        <div class="abc">
        <h3>Please Login </h3>
        </div>   
      </div>
     
</body>
</html>
