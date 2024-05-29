<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylei.css">
    <title>User Dashboard</title>
</head>
<body> 
    <header>
        <div class="container">
            <nav>
                <ul class="nav-links">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="photos.php">Photos</a></li>
                    <li><a href="friends.php">Friends</a></li>
                    <li><a href="message.php">Message</a></li>
                    <li><a href="layout.php">Layout</a></li>
                </ul>
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                </div>
                <a href="logout.php" class="logout-button">Logout</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="main-content">
            <div class="profile-section">
                <div>
                    <img src="avatar.png" alt="User Picture" id="profile-pic">
                    <input type="file" name="profile-picture" class="change-picture" id="profile-picture-input">
                </div>
                <div class="info">
                    <div><strong>Name:</strong> John Doe</div>
                    <div><strong>Gender:</strong> Male</div>
                    <div><strong>Address:</strong> 123 Main St, Anytown, USA</div>
                    <div><strong>Personal Info:</strong></div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
                </div>
            </div>
            <div class="story-section">
                <textarea placeholder="Share your story here..." id="story-text"></textarea>
                <button type="button" id="share-button">Share</button>
            </div>
        </div>

        <div class="message-section">
            <img src="avatar.png" alt="User Picture">
            <div class="message-box">
                <textarea placeholder="Type your message here..." id="message-text"></textarea>
                <div class="message-actions">
                    <div class="timestamp">2024-05-26 12:34</div>
                    <button type="button" id="send-button">Send</button>
                    <div class="delete" id="delete-button">Delete</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('profile-picture-input').addEventListener('change', function(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const img = document.getElementById('profile-pic');
                img.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        });

        document.getElementById('share-button').addEventListener('click', function() {
            alert('Your story has been shared!');
        });

        document.getElementById('send-button').addEventListener('click', function() {
            alert('Your message has been sent!');
        });

        document.getElementById('delete-button').addEventListener('click', function() {
            document.getElementById('message-text').value = '';
        });
    </script> 
</body>
</html>
