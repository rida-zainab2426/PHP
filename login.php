<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "task");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main {
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .myform h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        .myform input[type="text"],
        .myform input[type="password"],
        .myform input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        .myform input[type="submit"] {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            border: none;
            transition: background 0.3s ease-in-out;
            cursor: pointer;
        }

        .myform input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="myform">
            <h2>Login Form</h2>
            <form method="POST">
                <input type="text" placeholder="Enter Username" name="txtusername" required>
                <input type="password" placeholder="Enter Password" name="txtpassword" required>
                <input type="submit" value="Login" name="btnlogin">
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['btnlogin'])) {
        $username = $_POST['txtusername'];
        $password = $_POST['txtpassword'];

        $query = "SELECT * FROM tbl_user WHERE user_name='$username' AND user_password='$password'";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result)) {
            $_SESSION['myuser'] = $username;
            header("location:index.php");
        } else {
            echo "<script>alert('Incorrect Username or Password');</script>";
        }
    }
    ?>
</body>
</html>
