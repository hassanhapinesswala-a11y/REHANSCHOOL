?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Rehan School - Home</title>
    <style>
        body {margin:0; font-family:Arial, sans-serif; background:#f5f7fa;}
        header {background:#004080; color:white; padding:20px; text-align:center;}
        nav a {color:white; margin:0 15px; text-decoration:none; font-weight:bold;}
        .hero {padding:80px; text-align:center; background:linear-gradient(120deg,#004080,#0073e6); color:white;}
        .section {padding:50px; max-width:1000px; margin:auto;}
        .features {display:flex; gap:20px; justify-content:center;}
        .feature {background:white; padding:20px; border-radius:15px; flex:1; box-shadow:0 4px 8px rgba(0,0,0,0.2);}
        .stats {display:flex; justify-content:space-around; background:#004080; color:white; padding:40px;}
        .testimonials, .articles {display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px;}
        .card {background:white; padding:20px; border-radius:15px; box-shadow:0 4px 8px rgba(0,0,0,0.2);}
        footer {background:#004080; color:white; text-align:center; padding:20px; margin-top:20px;}
    </style>
</head>
<body>
<header>
    <h1>Rehan School Clone</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="curriculum.php">Curriculum</a>
        <a href="facilitators.php">Facilitators</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>
 
<div class="hero">
    <h2>AI-Enabled Education for Future Leaders</h2>
    <p>Innovative curriculum & entrepreneurial skills to empower the youth.</p>
</div>
 
<div class="section">
    <h2>Unique Features</h2>
    <div class="features">
        <div class="feature"><h3>AI-Enabled Learning</h3><p>Integrating AI in classrooms for smarter education.</p></div>
        <div class="feature"><h3>Holistic Development</h3><p>Focus on academics, skills & character building.</p></div>
        <div class="feature"><h3>Entrepreneurial Focus</h3><p>Preparing students for business & leadership.</p></div>
    </div>
</div>
 
<div class="stats">
    <div><h2>50+</h2><p>Team Members</p></div>
    <div><h2>2000+</h2><p>Students</p></div>
    <div><h2>15+</h2><p>Campuses</p></div>
</div>
 
<div class="section">
    <h2>Testimonials</h2>
    <div class="testimonials">
        <div class="card"><p>"Amazing initiative!"</p><b>- Visitor A</b></div>
        <div class="card"><p>"Future of education."</p><b>- Visitor B</b></div>
    </div>
</div>
 
<div class="section">
    <h2>Latest Articles</h2>
    <div class="articles">
        <div class="card"><h3>Rehan School Wins Award</h3><p>Recognized for innovation in education.</p></div>
        <div class="card"><h3>AI in Classrooms</h3><p>How AI is transforming learning.</p></div>
    </div>
</div>
 
<footer>© 2025 Rehan School Clone</footer>
</body>
</html
