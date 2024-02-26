<?php


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$heard = $_POST['heard'];
$comments = $_POST['comments'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign up</title>
</head>
<body>
  <div>
    <h1>Thank you for sign up!</h1>
  </div>
  <div>
    <h3>You've entered the following information:</h3>
  </div>
  <div>
    <p>Name: <?php echo $name ?></p>
    <p>Email: <?php echo $email?></p>
    <p>Phone: <?php echo $phone?></p>
    <p>How you heard about us: <?php echo $heard?></p>
    <p>comments: <?php echo $comments?></p>
  </div>
</body>
</html>
