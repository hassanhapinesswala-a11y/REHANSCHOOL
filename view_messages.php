<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - View Messages</title>
    <style>
        body {font-family: Arial; background:#f5f7fa; padding:20px;}
        table {width:100%; border-collapse:collapse; background:white; box-shadow:0 4px 8px rgba(0,0,0,0.2);}
        th, td {padding:12px; border:1px solid #ccc; text-align:left;}
        th {background:#004080; color:white;}
        h1 {color:#004080;}
    </style>
</head>
<body>
<h1>Received Messages</h1>
<table>
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Date</th></tr>
    <?php
    $res = mysqli_query($conn, "SELECT * FROM messages ORDER BY created_at DESC");
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['message']."</td>
                <td>".$row['created_at']."</td>
              </tr>";
    }
    ?>
</table>
</body>
</html>
