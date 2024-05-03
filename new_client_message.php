<html>
<body>
<?php
$servername = "apollo.anselm.edu";
$username = "team5";
$password = "team5pass";
$database = "DBteam5";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    $message = $conn->connect_error;
    die('<script>alert("Connection Failed: '.$message.'")</script>');
  }

$fname = $_POST['name'];
$lname = $_POST['surname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql="INSERT INTO messages (fname, lname, email, subject, message) VALUES ('$fname','$lname', '$email', '$subject', '$message')";

if ($conn->query($sql) == TRUE) {
    echo '<script>alert("Record added successfully")</script>';
} else {
    echo '<script>alert("Error adding record: '. $conn->error.'")</script>';
}

$conn->close();
?>

</body>
</html>