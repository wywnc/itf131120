<!DOCTYPE html>
<html>
  <head>
    <title>Deleted</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> <!-- Datatable -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!-- Edit Icon -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php

    $conn = mysqli_init();
    mysqli_real_connect($conn, 'itfsqlserver.mysql.database.azure.com', 'itfsqlserver@itfsqlserver', 'ITF131120!', 'itflab', 3306);
    if (mysqli_connect_errno($conn))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }

    $id = $_REQUEST['delete_id'];
    $sql = "DELETE FROM guestbook WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        ?><meta http-equiv="refresh" content="0; URL=https://itflab131120.azurewebsites.net" /><?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>
  </body>
</html>
