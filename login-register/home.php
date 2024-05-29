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
    <title>User Dashboard - Home</title>
    <link rel="stylesheet" href="stylei.css">
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
        <h1>Welcome to the Home Page</h1>
        <p>This is the content of the home page.</p>
    </div>
</body>
</html>