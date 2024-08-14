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
$email = $_POST['email'];

// insert data into contact table 
$query = "insert into subscribe (email) values('$email')";

// executes the given query on selected database
mysqli_query($conn, $query);

// after successfully send the msg, go back to home page 
header('location:news.php');