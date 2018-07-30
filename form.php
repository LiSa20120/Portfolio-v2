 
<html>
<head>
    <title>Form</title>
    <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
    <form method="post" action="form.php"  style="text-align:center; font-size:20px">
    <p>Name: </p>
    <input name="name" type="text" placeholder="Name"  required>
    <p>Email: </p>
    <input name="email" type="text" placeholder="Email" required >
    <p>Contact: </p>
    <input name="contact" type="text" placeholder="Contact"  required>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
require_once 'db.php';
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact =$_POST['contact'];
    if($name='admin' && $email='aniroodh1998@gmail.com' && $contact='9444411601')
    {
        header("Location:list.php");
    }
    else{
    $query = "INSERT INTO users(Name,Email,Contact,Time) VALUES ('$name', '$email','$contact' ,now() )";
    $result= mysqli_query($con, $query);
    if($result){
        echo "Your form was submitted.";
        header("Location:index.php");
    }else{
        echo mysqli_error($con);
    }
}
}

?>
</body>
</html>
