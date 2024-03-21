    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <style>
        
    </style>
    </head>
   
    <body>
    <?php
  
    $server="localhost";
    $username="tech";
    $password="password";
    $database = "project";
    $conn= mysqli_connect($server,$username,$password,$database);
    if (!$conn){
        echo "error";
    }
    session_start();
    ?>
    <div class="navbar">
    
            <img src="logo.png" class="logoo">
    
        <div class="nav-links">
            <a href="home.html">Home</a>
            <a href="accommodations.html">Accommodation</a>
            <a href="shop.html">Shop</a>
            <a href="cafe.html">Cafes</a>
            <a href="hospital.html">Hospitals</a>
        </div>
        <img src="blank.jpg" class="user-pic" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="userinfo">
                        <img src="IMG.png">
                        <?php
                        
                         echo "<h1> welcome </h1>";
                         echo $_SESSION['username'];
                        ?>
                    </div>
                    <hr>

                    <a href="Update.html" class="sunmenulink">
                        <p>Update Account details</p>
                        <span>></span>
                    </a>

                    <a href="deleteaccount.php" class="sunmenulink">
                        <p>Delete Account</p>
                        <span>></span>
                    </a>

                    <a href="logout.php" class="sunmenulink">
                        <p>Logout</p>
                        <span>></span>
                    </a>

                </div>
            </div>

    </div>
        <script>
            let subMenu = document.getElementById("subMenu");
    
            function toggleMenu() {
                subMenu.classList.toggle("open-menu");
            }
        </script>
    <div class="image-container">
        <img src="mainpic.jpg" class="mainpict">
        <div class="overlay">
            <h4>one stop solution to all pet needs    </h4>
            <h1 id ="why">Why Should Humans<br> Have All The Fun?</h1>
            <p id="what">we are currently mumbai based</p>
            <div class="overlaybtn">
                learn more
            </div>
        </div>
    </div>
    <div class="aboutuscontainer">
        <p class="aboutustitle">Why Choose Us?</p>
        <div class="aboutusmain">
            <div class="aboutusbox">
                <h3>Reliable Information</h3>
                <p>Get trustworthy and accurate information.</p>
            </div>
            <div class="aboutusbox">
                <h3>Non-Sponsored</h3>
                <p>No biased recommendations or sponsored content.</p>
            </div>
            <div class="aboutusbox">
                <h3>Latest Resources</h3>
                <p>Access the latest resources and updates.</p>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
    <div class="blog-title" id="blog">
        <h1>
            Read some blogs
        </h1>
    </div>  
    <br>
    <br> 
    <?php
$sqlblog="select * from blog ORDER by id DESC;";
$sqlblogg=mysqli_query($conn,$sqlblog);

echo '<div class="blog-container">';
for ($i = 0; $i < 4 && $row = mysqli_fetch_assoc($sqlblogg); $i++) {
    echo '
    <div class="blog-post">
        <img src="logo.png" alt="Example Image">
        <div class="blog-post-title">'. $row['blogtitle'] .'</div>
        <div class="blog-post-name">By '. $row['username'] .'</div>
        <div class="blog-post-text">'. $row['blogcontent'] .'</div>
    </div>';
}
echo '</div>';
?>


    <a href="writingblog.html" class="blog-newww" >
    <div class="blog-neww"><p>write your own blog</p></div>
    </a>
   
    <br><br><br>

    <div class="eventtitle">
        <h1>
        upcoming events
        </h1>
    </div>
    <div class="carouselevent-container">
        <div class="carouselevent-images">
            <img src="image/dogevent1.jpg"  onclick="redirect('page1.html')">
            <img src="image/dogevent2.avif" onclick="redirect('home.html')">
            <img src="profilepic.jpeg" onclick="redirect('page3.html')">
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>


    <br><br>
    <div class="v_container">
        <div class="v_title"><h1>Your daily dose of fun videos also dont forget to vote for your favourite one!</h1></div>
        <div class="v_image-wrapper">
            <img src="image\thumb1.png" alt="Image 1" class="v_image" onclick="openVideo('vid/funnyvid1.mp4')">
            <div class="v_radio-container">
                <input type="radio" id="radio1" name="videoSelection" class="v_radio-btn" onclick="updateVotes('video1', this)">
                <label for="radio1">A</label><br><span id="voteCount1" class="v_vote-count">Votes: 0</span>
            </div>
        </div>
        
        <div class="v_image-wrapper">
            <img src="image\thumb2.png" alt="Image 2" class="v_image" onclick="openVideo('vid/funnyvid2.mp4')">
            <div class="v_radio-container">
                <input type="radio" id="radio2" name="videoSelection" class="v_radio-btn" onclick="updateVotes('video2', this)">
                <label for="radio2">B</label><br><span id="voteCount2" class="v_vote-count">Votes: 0</span>
            </div>
        </div>
        
        <div class="v_image-wrapper">
            <img src="image\thumb3.png" alt="Image 3" class="v_image" onclick="openVideo('vid/funnyvideo3.mp4')">
            <div class="v_radio-container">
                <input type="radio" id="radio3" name="videoSelection" class="v_radio-btn" onclick="updateVotes('video3', this)">
                <label for="radio3">C</label><br><span id="voteCount3" class="v_vote-count">Votes: 0</span>
            </div>
        </div>
        
        <div class="v_image-wrapper">
            <img src="image\thumb4.png" alt="Image 4" class="v_image" onclick="openVideo('vid/funnyvid4.mp4')">
           
            <div class="v_radio-container">
                <input type="radio" id="radio4" name="videoSelection" class="v_radio-btn" onclick="updateVotes('video4', this)">
                <label for="radio4">D</label><br><span id="voteCount4" class="v_vote-count">Votes: 0</span>
            </div>
        </div>
        
        <div id="videoOverlay" class="v_video-overlay">
            <span class="v_close-btn" onclick="closeVideo()">×</span>
            <video id="video" class="v_video" controls autoplay>
                <source id="videoSource" src="" type="video/mp4"> 
            </video>
        </div>
    </div>
</div>






    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.carouselevent-images img');
    
   
        for (let i = 1; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
    
        function changeSlide(n) {
            slideIndex += n;
            showSlide(slideIndex);
        } 
   
        function showSlide(n) {
            if (n >= slides.length) {
                slideIndex = 0;
            }
            if (n < 0) {
                slideIndex = slides.length - 1;
            }
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
            slides[slideIndex].style.display = 'block';
        }
        function redirect(url) {
            window.location.href = url;
        }
    </script>
    
    <script>
var votes = {
    video1: 0,
    video2: 0,
    video3: 0,
    video4: 0
};

var radioButtons = document.querySelectorAll('.v_radio-btn');

function openVideo(videoSrc) {
    var videoOverlay = document.getElementById("videoOverlay");
    var videoSource = document.getElementById("videoSource");
    
    videoOverlay.style.display = "block";
    videoSource.src = videoSrc;
    document.getElementById("video").load();
}
function closeVideo() {
    var videoOverlay = document.getElementById("videoOverlay");
    videoOverlay.style.display = "none";

    var video = document.getElementById("video");
    video.pause();
}

function updateVotes(video, radioBtn) {
    if (radioBtn.disabled) return; 
    
    votes[video]++;
    document.getElementById("voteCount" + video.charAt(video.length - 1)).innerText = "Votes: " + votes[video];
    radioBtn.disabled = true; 
    radioButtons.forEach(function(btn) {
        if (btn !== radioBtn) {
            btn.disabled = true;
        }
    });
}
</script>

    
    
    </body>
    </html>




