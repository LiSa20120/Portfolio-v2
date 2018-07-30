<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<?php
require_once "db.php";


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT Name,Email,Contact,Time FROM users WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        if($row){
            $name = $row['Name'];
            $email = $row['Email'];
            $contact = $row['Contact'];
            $date = $row['Time'];
            echo "
            <h2>$name</h2>
            
            <p>$email</p><br>
            <p>$contact</p>
            <small>$date</small>
            ";
        }
    }else{
        echo 'No requests so far';
    }
}
?>
</html>





