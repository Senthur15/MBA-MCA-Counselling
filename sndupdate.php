<?php
 $co_id= $_POST['selectedcollegecode'];
 $email= $_POST['email'];
 $attr = $_POST['attr'];
 $conn = new mysqli("localhost","root","","counsold");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqlupdate = " UPDATE sndprefrence SET $attr = '$co_id' WHERE email='$email'";
if ($conn->query($sqlupdate) === TRUE) {
    echo "";
} else {
    echo "" . $sqlupdate . "<br>" . $conn->error;
}


$conn->close();
?>