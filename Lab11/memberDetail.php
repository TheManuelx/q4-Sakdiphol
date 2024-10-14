<?php
// Connect to the database
$conn = mysql_connect("localhost:3306", "Tstd11", "h26s5qDY");
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

mysql_select_db("sec2_11");
mysql_query("SET NAMES utf8");

// Get the username from the URL
$username = $_GET['username'];

// Sanitize the input to prevent SQL injection
$username = mysql_real_escape_string($username);

// Query to get the member details
$sql = "SELECT * FROM member WHERE username = '$username'";
$objQuery = mysql_query($sql);
$row = mysql_fetch_array($objQuery);

// Check if the member exists
if ($row) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Member Details</title>
    </head>
    <body>
        <h1>Member Details</h1>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($row["username"]); ?></p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($row["address"]); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($row["email"]); ?></p>
        <img src="mphoto/<?php echo htmlspecialchars($row["username"]); ?>.jpg" width="200" alt="Profile Picture">
    </body>
    </html>
    <?php
} else {
    echo "Member not found.";
}

// Close the database connection
mysql_close($conn);
?>
