
<?php

// create connection with MySQL server
$conn = mysqli_connect('localhost', 'root');

// check connection
if ($conn) {
    echo "Connection successful";

} else {
    echo "No Connection";
}

// select database for the connection
mysqli_select_db($conn, 'travel_bliss');

// user input ids = POST attribute of contact
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

// insert data into contact table 
$query = "insert into contact (name, email, mobile, message) values('$name', '$email', '$mobile', '$message')";

// executes the given query on selected database
mysqli_query($conn, $query);

// after successfully send the msg, go back to home page 
header('location:contact.php');