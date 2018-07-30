<html>
<head>
    <title>List</title>
    <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h3>Requests</h3>
    <br>
<?php
require_once "db.php";
$query  = "SELECT id,Name,Email,Contact,Time FROM users";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) >= 1){
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $name = $row['Name'];
        $time = $row['Time'];
        ?>
        <ul>
        <li>
        <a href="detail.php?id=<?php echo $id?>"><?php echo $name ?></a>
        </li>
         <?php echo "$time";?>
        </ul>
<?php
    }
}
?>
</body>
</html>