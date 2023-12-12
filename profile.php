<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles for deposit monitoring system.css">
    <title>20BBS0180 - Nilayan Deb</title>
</head>
<body>
    <header>
    <h1 style="color: #ff6600;">Deposit Track Hub</h1>
        <h2>20BBS0095 - ATUL ANURAG</h2>
        <br>
        <nav>
            <ul>
                <li><a href="deposit monitoring system.html" style="text-decoration: underline;">Home</a></li>
                <li><a href="#" style="text-decoration: underline;">Categories</a></li>
                <li><a href="./contact.html" style="text-decoration: underline;">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <center>
        <section class="profile-display">
            <h2>Profile Details</h2>
            <div id="profileData">
                <?php
                session_start();
                if (isset($_SESSION["profileData"])) {
                    $profileData = $_SESSION["profileData"];
                    echo '<p>Name: ' . $profileData["firstName"] ." ".$profileData["lastName"] .'</p>';
                    echo '<p>Email: ' . $profileData["email"] . '</p>';
                } else {
                    echo '<p>No profile data available.</p>';
                }
                ?>
            </div>
        </section>
        </center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </main>

    <footer class="footer">
        <p>&copy; 2023 DepositTrackHub.com</p>
        <p>20BBS0180 - Nilayan Deb</p>
    </footer>
</body>
</html>