<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aesthetic Login Page</title>
<link rel="stylesheet" href="login.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  
    <div class="wrapper">
        <form  method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder=" Confirm Password" name="cpassword" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            
            <br>
            <button type="submit" class="btn">Login</button>
            <br><br>
            <div class="register-link">
                <p>Don't have an account? <a herf="#">Register</a></p>
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
        $showerror=false;
        $username=$_POST["username"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];
        $existsql = "SELECT * FROM `user` WHERE username='$username'";
        $existresult = mysqli_query($conn,$existsql);
        $numexistrow = mysqli_num_rows($existresult);
        if($numexistrow > 0){
            $exist = true;
            $show = "User already exists";
            $showerror=True;
            echo $show; 
        }
        else{
            $exist=false;
        }
        if ($password == $cpassword && $exist==false){
            $sql="INSERT INTO `user` (`username`, `password`) VALUES ( '$username', '$password');";
           $result = mysqli_query($conn,$sql);
        }
        else{
            $show = "Password doesnt match";
            echo $show;
            $showerror=True;
        }
        
    }
    ?>
</body>

</html>
