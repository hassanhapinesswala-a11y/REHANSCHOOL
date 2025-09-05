<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Facilitators - Rehan School</title>
    <style>
        body {font-family: Arial, sans-serif; margin:0; background:#f5f7fa;}
        header {background:#004080; color:white; padding:15px; text-align:center;}
        nav a {color:white; margin:0 15px; text-decoration:none; font-weight:bold;}
        .container {padding:40px; display:grid; grid-template-columns: repeat(auto-fit,minmax(250px,1fr)); gap:20px;}
        .card {background:white; border-radius:15px; padding:20px; text-align:center; box-shadow:0 4px 8px rgba(0,0,0,0.2);}
        .card img {width:100px; height:100px; border-radius:50%; object-fit:cover;}
        .card h3 {margin:10px 0; color:#004080;}
        .card p {color:#333; font-size:14px;}
        footer {background:#004080; color:white; text-align:center; padding:15px; margin-top:20px;}
    </style>
</head>
<body>
<header>
    <h1>Meet Our Facilitators</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="curriculum.php">Curriculum</a>
        <a href="facilitators.php">Facilitators</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>
<div class="container">
    <?php
    $result = mysqli_query($conn, "SELECT * FROM facilitators");
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card'>
                <img src='".$row['photo']."' alt='Profile'>
                <h3>".$row['name']."</h3>
                <p>".$row['bio']."</p>
                <a href='".$row['facebook']."'>FB</a> | 
                <a href='".$row['twitter']."'>X</a> | 
                <a href='".$row['linkedin']."'>LinkedIn</a>
              </div>";
    }
    ?>
</div>
<footer>© 2025 Rehan School Clone</footer>
</body>
</html>
