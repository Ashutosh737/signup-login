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
    <title>User Dashboard - Profile</title>
  
    <link rel="stylesheet" href="stylei.css">
    <style>
    .profile-picture img {
        width: 150px; 
        height: auto; 
        border-radius: 50%; 
    }
</style>
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
        <h1>User Profile</h1>
        <div class="profile-info">
            <div class="profile-picture">
                <img src="avatar.png" alt="Profile Picture">
                <input type="file" name="profile-picture" class="change-picture">
            </div>
            <div class="user-details">
                <div><strong>Name:</strong> John Doe</div>
                <div><strong>Email:</strong> johndoe@example.com</div>
                <div><strong>Gender:</strong> Male</div>
                <div><strong>Address:</strong> 123 Main St, Anytown, USA</div>
                <div><strong>Bio:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
        </div>
    </div>
</body>
</html>