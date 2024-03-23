<?php
session_start();

if (!isset($_SESSION['vote'])) {
    $_SESSION['vote'] = false;
}

$server = "localhost";
$username = "tech";
$password = "password";
$database = "project";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "error";
}

if (isset($_POST['videoSelection1'])) {
    $videoSelection1 = $_POST['videoSelection1'];
    $_SESSION['vote'] = true;
    if ($videoSelection1 == 'on') {
        $sql = "SELECT vote FROM vid WHERE id = 1;";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $newVoteCount = $row['vote'] + 1;
            $sql = "UPDATE vid SET vote = $newVoteCount WHERE id = 1;";
            $result2 = mysqli_query($conn, $sql);
            if ($result2) {
                echo $newVoteCount;
            } else {
                echo "Error updating vote count: " . mysqli_error($conn);
            }
        } else {
            echo "Error in query: " . mysqli_error($conn);
        }
    }
}
header("location: home.php");
?>


    // Update vote count for videoSelection2
    if(isset($_POST['videoSelection2'])) {
        $videoSelection2=$_POST['videoSelection2'];

        if($videoSelection2 == 'on'){
            $sql2="SELECT vote FROM vid WHERE id = 2;";
            $result = mysqli_query($conn,$sql2);
            if($result) {
                $row = mysqli_fetch_assoc($result);
                $newVoteCount = $row['vote'] + 1;
                $sql="UPDATE vid SET vote = $newVoteCount WHERE id = 2;";
                $result2 = mysqli_query($conn,$sql);
                if($result2) {
                    echo $newVoteCount;
                } else {
                    echo "Error updating vote count: " . mysqli_error($conn);
                }
            } else {
                echo "Error in query: " . mysqli_error($conn);
            }
        }
    }

    // Update vote count for videoSelection3
    if(isset($_POST['videoSelection3'])) {
        $videoSelection3=$_POST['videoSelection3'];

        if($videoSelection3 == 'on'){
            $sql3="SELECT vote FROM vid WHERE id = 3;";
            $result = mysqli_query($conn,$sql3);
            if($result) {
                $row = mysqli_fetch_assoc($result);
                $newVoteCount = $row['vote'] + 1;
                $sql="UPDATE vid SET vote = $newVoteCount WHERE id = 3;";
                $result2 = mysqli_query($conn,$sql);
                if($result2) {
                    echo $newVoteCount;
                } else {
                    echo "Error updating vote count: " . mysqli_error($conn);
                }
            } else {
                echo "Error in query: " . mysqli_error($conn);
            }
        }
    }

    // Update vote count for videoSelection4
    if(isset($_POST['videoSelection4'])) {
        $videoSelection4=$_POST['videoSelection4'];

        if($videoSelection4 == 'on'){
            $sql4="SELECT vote FROM vid WHERE id = 4;";
            $result = mysqli_query($conn,$sql4);
            if($result) {
                $row = mysqli_fetch_assoc($result);
                $newVoteCount = $row['vote'] + 1;
                $sql="UPDATE vid SET vote = $newVoteCount WHERE id = 4;";
                $result2 = mysqli_query($conn,$sql);
                if($result2) {
                    echo $newVoteCount;
                } else {
                    echo "Error updating vote count: " . mysqli_error($conn);
                }
            } else {
                echo "Error in query: " . mysqli_error($conn);
            }
        }
    }
    $session_end();
    header("location: home.php");
?>
