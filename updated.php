
<!DOCTYPE html>
<html>
  <head>
    <title>Updated</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php

    $conn = mysqli_init();
    mysqli_real_connect($conn, 'itflab13.mysql.database.azure.com', 'it63070160@itflab13', 'ITFlab13', 'itflab', 3306);
    if (mysqli_connect_errno($conn))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }

    $edit_id = $_GET['edit_id'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];


    $sql = "UPDATE guestbook SET Name='$name', Comment='$comment' WHERE id='$edit_id'";


    if (mysqli_query($conn, $sql)) {
        ?><meta http-equiv="refresh" content="0; URL=https://itflab131120.azurewebsites.net" /><?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>
  </body>
</html>
