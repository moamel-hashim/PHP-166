<?php

$msg = '';
$msg2 = '';
$cost = 7.95;


$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';

$phoneNumber = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';

if (isset($_POST['topping'])) {
  $toppings = $_POST['topping'];
  $toppingPrice = count($toppings);
  $cost += $toppingPrice;
  $total = '$' . $cost;
  foreach($toppings as $value) {
    $msg2 .= "<p>$value</p>";
    $msg = "<p>You have ordered the following $toppingPrice toppings:</p>
    <p>$msg2</p>
    <p>Your name $name. Your phone number is $phoneNumber. The total cost is $total</p>";
  }
} else {
  $cost = 7.95;
  $msg = "<p>You did not order any extra toppings so you will receive our traditional cheese pizza </p>
  <p>Your name $name. Your phone number is $phoneNumber. The total cost is $total</p>";
  echo $msg;
}





?>



<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pizza Order Form</title>

  <style>
    body {
      font-family: arial;
      font-size: 100%;
      background-color: #000;
      background-image: url(https://image.freepik.com/free-photo/crop-pizza-black_23-2147749510.jpg);
      background-repeat: no-repeat;

      background-size: 100%;
    }

    #outer {
      width: 60%;
      margin: 20px auto 50px 20px;
      padding: 10px;
      border: 1px solid #a8a8a8;
      box-shadow: 0px 0px 20px #a8a8a8;
      background-color: #f5f5f5;
    }

    h1,
    h2,
    h3 {
      text-align: center;
    }

    h2 {
      font-size: 2.5em;
    }

    h2 {
      font-size: 1.5em;
    }

    h3 {
      font-size: 1.25em;
    }

    .red {
      color: red;
    }

    div {
      margin-bottom: 25px;
    }

    .container {
      display: flex;
      justify-content: space-around;
    }

    .container div {
      flex-basis: 25%;
    }


    .textbox {
      width: 15em;
      margin-bottom: .2em;
    }

    input[type=submit],
    input[type=reset] {
      margin-top: 25px;
      margin-bottom: 25px;
      display: block;
    }
  </style>

</head>

<body>

  <section id="outer">

    <header>
      <h1 class="red">Pizza Express</h1>
      <h2>Ready for pick up in 15 minutes!</h2>
      <h3>One size (12") includes cheese $7.95</h3>
    </header>
    <?php echo $msg ?>
  </section>


</body>

</html>
