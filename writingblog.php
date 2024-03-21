<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Blog Post</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #ED5AB3;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
    }

    .container {
        max-width: 800px; 
        width: 90%; 
        background-color: #FFF; 
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.2s ease;
    }

    .container:hover {
        transform: scale(1.01);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
    }

    h1 {
        text-align: center;
        color: #001B79;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #001B79; 
        box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="file"] {
        margin-bottom: 20px;
    }

    input[type="submit"] {
        background-color: #1640D6; 
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #ED5AB3;
    }

    .success-message {
        text-align: center;
        margin-top: 20px;
        display: none;
        background-color: aquamarine;
        padding: 20px;
        border-radius: 8px;
        background-color: white;
    }
</style>
</head>
<body>

<div class="container">
   
    <form id="blogForm" method="post"  onsubmit="return showSuccessMessage()">
        <h1>Create Blog Post</h1>


        <label for="title">Blog Title:</label>
        <input type="text" id="title" name="blogtitle" required>

        <label for="content">Blog Content:</label>
        <textarea id="content" name="blogcontent" rows="6" required></textarea>
        <!-- ><label for="picture">Picture:</label>
        <input type="file" id="picture" name="blogpicture" accept="image/*" required>
-->
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
<?php
$server="localhost";
$usernam="tech";
$passwor="password";
$database = "project";
$conn= mysqli_connect($server,$usernam,$passwor,$database);
if (!$conn){
    echo "error";
}
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $blogtitle=$_POST['blogtitle'];
    $blogcontent=$_POST['blogcontent'];
    $username=$_SESSION['username'];
    $sql="INSERT INTO `blog` (`blogtitle`, `blogcontent`, `username`) VALUES ('$blogtitle', '$blogcontent', '$username')";
    $result = mysqli_query($conn,$sql);
    if (!$result){
        echo "hello";
    }
}
?>
    <div id="successMessage" class="success-message">
        <h2>Blog Successfully Uploaded!</h2>
        <img src="logo.png">
        <p>Redirecting...</p>
    </div>
</div>

<script>
    function howSuccessMessage() {
        document.getElementById('blogForm').style.display = 'none';
        document.getElementById('successMessage').style.display = 'block';
        setTimeout(function() {
            window.location.href = 'home.html'; 
        }, 2000);
        return false; 
    }
</script>

</body>
</html>






