<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itfsqlserver.mysql.database.azure.com', 'itfsqlserver@itfsqlserver', 'ITF131120!', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


 $name = $_POST['name'];
 $comment = $_POST['comment'];


$sql = "INSERT INTO guestbook (Name, Comment) VALUES ('$name', '$comment')";


if (mysqli_query($conn, $sql)) {
    <meta http-equiv="refresh" content="0; URL=https://itflab131120.azurewebsites.net" />;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
