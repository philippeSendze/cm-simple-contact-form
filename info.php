<?php
$name = $_POST['name'];
$email = $_POST['email'];
$issue= $_POST['issue'];
$comment= $_POST['comment'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information page</title>
</head>
<body>
    <p>
      <b>Name :</b>
      <?php echo $name; ?>
    </p>
    <p>
      <b>Email :</b>
      <?php echo $email; ?>
    </p>
    <p>
      <b>Type of comment :</b>
      <?php echo $issue; ?>
    </p>
    <p>
      <b>Your comment :</b>
      <?php echo $comment ?>
    </p>

    <input type="button" value="Edit" onclick="history.back(-1)" />

</body>
</html>