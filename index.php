<html>
<head>
<title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itfsqlserver.mysql.database.azure.com', 'itfsqlserver@itfsqlserver', 'ITF131120!', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
<table class="table table-dark table-striped">
  <tr>
    <th width="200"> <div align="center">Name</div></th>
    <th width="200"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td width="200"><div align="center"><?php echo $Result['Name'];?></div></td>
    <td width="200"><div align="center"><?php echo $Result['Comment'];?></td>
    <td width="150"><div class="text-center"><a href="delete.php?delete_id=<?php echo $Result['ID']; ?>" class="btn btn-danger">Delete</a> <a href="update.php?edit_id=<?php echo $Result["ID"]; ?>" class="btn btn-warning" >Edit</a></div></td>
  </tr>
<?php
}
?>
</table>
<div class="text-center"><a href="form.html" class="btn btn-success">Add +</a></div>
<?php
mysqli_close($conn);
?>
</body>
</html>
