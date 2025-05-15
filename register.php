<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.main {
    width: 100%;
    max-width: 400px;
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.myform h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
}

.myform input[type="text"],
.myform input[type="email"],
.myform input[type="password"],
.myform input[type="submit"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 15px;
}

.myform input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
    cursor: pointer;
    border: none;
    transition: 0.3s ease-in-out;
}

.myform input[type="submit"]:hover {
    background-color: #45a049;
}
</style> 
</head>

<body>
    <div class="main">
        <div class="myform">
            <h2>Registration Form</h2>
            <form method="POST">
                <input type="text" placeholder="Enter Full Name" name="txtfullname">
                <input type="text" placeholder="Enter Email Address" name="txtemail">
                <input type="text" placeholder="Enter Username" name="txtusername">
                <input type="password" placeholder="Enter Password" name="txtpassword">
                <input type="submit" value="Register User" name="btnregister">
            </form>
        </div>
    </div>
    <?php
    // include("connection.php");
    $connection = mysqli_connect("localhost","root","","task");


   
if(isset($_POST['btnregister']))
{
$fullname = $_POST['txtfullname'];
$emailaddress = $_POST['txtemail'];
 $username = $_POST['txtusername'];
$password = $_POST['txtpassword'];
$query = "INSERT INTO tbl_user(full_name, email_address, user_name, user_password) VALUES ('$fullname', '$emailaddress', '$username', '$password')";
$result = mysqli_query($connection, $query);
if($result)
{
// echo "<script>alert('User Registered')</script>";
header ("location:./login.php");
}
}

 ?>
</body>

</html>


