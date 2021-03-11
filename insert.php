<?php
 $co_id= $_POST['selectedcollegecode'];
 $email= $_POST['email'];
 $attr = $_POST['attr'];
 $conn = new mysqli("localhost","root","","counsold");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $query = "SELECT count(*) FROM prefrence WHERE email ='$email'";
// $result = mysqli_query($conn,"SELECT count(*) FROM prefrence WHERE email ='$email'");
// if($result == 0)

    $sqlinsert = "INSERT INTO prefrence (email) VALUES  ('$email')";
    if ($conn->query($sqlinsert) === TRUE) {
        echo "";
    } else {
        echo "" . $sqlinsert . "<br>" . $conn->error;
    }
 $sqlupdate = " UPDATE prefrence SET $attr = '$co_id' WHERE email='$email'";
if ($conn->query($sqlupdate) === TRUE) {
    echo "";
} else {
    echo "" . $sqlupdate . "<br>" . $conn->error;
}


$conn->close();
?>