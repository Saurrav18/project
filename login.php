<<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aesthetic Login Page</title>
<link rel="stylesheet" href="login.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <video autoplay loop muted plays-inline class="backvideo"
    src="Puppies Playing in grass _ No copyright video.mp4"></video>
    <center>
        <div class="container">
        <p class="text"> WELCOME TO PETPAL</p>
    </div>
    <br><br><br>
    <div class="wrapper">
        <form action="login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" id="loginusername" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="loginpass" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <br>
            <button type="submit" class="btn">Login</button>
            <br><br>
            <div class="register-link">
                <p>Don't have an account? <a href="signup.php">Register</a></p>
            </div>

        </form>
    </div>
    <?php
    $server="localhost";
    $username="tech";
    $password="password";
    $database = "project";
    $conn= mysqli_connect($server,$username,$password,$database);
    if (!$conn){
        echo "error";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){  
        $username=$_POST["username"];
        $password=$_POST["password"];
        $sql="Select * from user where username='$username' AND password='$password'" ;
        $result = mysqli_query($conn,$sql);
        $num=0;
       
        $num = mysqli_num_rows($result); 
        if ($num==1){
            session_start();
            $_SESSION['loggedin']=false;
            $_SESSION['username']=$username;
            
            echo  $_SESSION['username'];
            header("location: home.php");

        }
        else{
            echo "wrong";   
        }
        }
        
    ?>
</body>
</html>
