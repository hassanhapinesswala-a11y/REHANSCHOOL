<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Rehan School</title>
    <style>
        body {font-family: Arial, sans-serif; margin:0; background:#eef2f7;}
        header {background:#004080; color:white; padding:15px; text-align:center;}
        nav a {color:white; margin:0 15px; text-decoration:none; font-weight:bold;}
        .container {padding:40px; max-width:800px; margin:auto;}
        form {background:white; padding:25px; border-radius:15px; box-shadow:0 4px 8px rgba(0,0,0,0.2);}
        input, textarea {width:100%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:8px;}
        button {background:#004080; color:white; border:none; padding:12px 20px; border-radius:8px; cursor:pointer;}
        button:hover {background:#0066cc;}
        .info {margin-bottom:20px;}
        footer {background:#004080; color:white; text-align:center; padding:15px; margin-top:20px;}
    </style>
</head>
<body>
<header>
    <h1>Contact Us</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="curriculum.php">Curriculum</a>
        <a href="facilitators.php">Facilitators</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>
<div class="container">
    <div class="info">
        <p><b>Address:</b> Karachi, Pakistan</p>
        <p><b>Phone:</b> +92-300-1234567</p>
        <p><b>Email:</b> info@rehanschool.net</p>
    </div>
    <form action="contact_submit.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>
<footer>© 2025 Rehan School Clone</footer>
</body>
</html>
 
