<?php session_start(); ?>
<?php
// Ensure you have a database connection and other necessary setup.

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform user authentication
    // Replace the following code with your authentication logic
    if ($username === 'GOLDEN WINGS' && $password === 'SPCreation') {
        // Authentication successful
        // You can redirect the user to a secure page
        $_SESSION["Adminlogin_sess"]="1";
        header('Location: Admin.php');
        exit;
    } else {
        // Authentication failed
        echo 'Invalid username or password. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body{
    align-items: center;
    display: flex;
    justify-content:center;
    flex-direction: column;
    background: #f6f5f7;
    font-family:'Times New Roman', Times, serif;
    min-height: 100%;
    margin: 10%;
    background-image: url(yikrkByMT.jpg);
    background-position: bottom center;
    background-repeat: no-repeat;
        

}
        .container{
            margin : 30px;
            text-align : center;
    position: relative;
    width: 500px;
    max-width: 100%;
    min-height: 300px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0,0,0,0.22);
}

input[type="text"],
input[type="password"]{
    width: 270px;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 15px;
    border: 1px solid rgb(101, 94, 223);
    outline: none;
    font-size: 17px;
    background: #eee;
}
button{
    color: #fff;
    background:linear-gradient(to right, #3c10ff, #68bff1);
    font-size: 12px;
    font-weight: bold;
    padding: 12px 55px;
    margin: 20px;
    border-radius: 20px;
    border: 1px solid #ff4b2b;
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
    <div class="container">
    <h1>Admin Login</h1>
    <form method="post" action="Admin_Login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit" name="login">Login</button>
    </form>
</div>
</body>
</html>
