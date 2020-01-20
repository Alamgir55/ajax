<?php 
 $user = $_REQUEST['username'];
// $user = "rico";

$connection = mysqli_connect('localhost', 'root', '') or die("Problem with connection");
mysqli_select_db($connection, "gallery_db");
if($user != null){
    $result = mysqli_query($connection, "SELECT count(*) FROM users WHERE username='" . $user . "'");
    $row = mysqli_fetch_row($result);
    $count = $row[0];
    if($count > 0){
        echo "Username Already Exists!";
    }
}


?>