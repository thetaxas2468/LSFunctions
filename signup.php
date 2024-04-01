<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$query = "insert into users (user_name,password) values ('$user_name','$password')";

			mysqli_query($con, $query);

			$_SESSION['user_id'] = $user_data['user_id'];
			header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #box {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 300px;
        }
        #box h2 {
            font-size: 24px;
            margin: 0 0 20px;
            color: #333;
            text-align: center;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
            text-align: center;
            display: block;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="box">
        <h2>Signup</h2>
        <form method="post">
            <input type="text" name="user_name" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" value="Signup"><br>
            <a href="login.php">Click to Login</a>
        </form>
    </div>
</body>
</html>