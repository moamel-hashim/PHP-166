<?php
// here we are using the ternary operator to check if the information we are receiving is set if it is then we trim it and get rid of any html special characters then we store it in a variable other wise we store an empty string.
$firstName = isset($_POST['fname']) ? htmlspecialchars(trim($_POST['fname'])) : '' ;
$lastName = isset($_POST['lname']) ? htmlspecialchars(trim($_POST['lname'])) : '';
$email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
$amount = isset($_POST['amount']) ? $_POST['amount'] : null ;
$subscription = isset($_POST['subscription']) && $_POST['subscription'] === 'no_subscription' ? 'You have chosen not to receive a free year subscription to our e-magazine.' : 'You will receive a free year subscription to our e-magazine';

//  then create a variable that will hold our error messages in it
$errors = "<p>please <a href='donation2.html'>GO BACK</a> and fill in the correct information for:";

// in this case we check if $firstName is empty then we repeat each if for each input value we receive and we concatenate it to the error variable
if(empty($firstName)) {
  $errors .= "<p>First Name</p>";
}

if(empty($lastName)) {
  $errors .= "<p>Last name</p>";
}

if(empty($email)) {
  $errors .= "<p>Email</p>";
}

if (empty($amount)) {
  $errors .= "<p>Amount</p>";
}
// we then check if they're not empty and if that check is true then we display the message to thank them for the donation
// we also create the full name and format the amount variable to a 2 digit dismal
if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($amount)) {
  $full_name = $firstName . ' ' . $lastName;
  $donation = '$' . number_format($amount, 2);
  $errors = "<p>Thank you $full_name for your donation of $donation</p>
              <p>We will email you a receipt at $email</p>
              <p>$subscription</p>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank you for contribution</title>

  <style>
    body {
      font-family: arial;
      font-size: 100%;
      background-image: url(https://cdn1.vectorstock.com/i/1000x1000/91/00/background-with-dog-paw-print-and-bone-vector-2669100.jpg);
      background-size: cover;
    }

    #outer {
      width: 960px;
      margin: 50px auto;
      padding: 10px;
      border: 1px solid #a8a8a8;
      box-shadow: 0px 0px 20px #a8a8a8;
      background-color: aliceblue;
    }

    h1,
    h2 {
      font-size: 1.5em;
      color: navy;
      text-align: center;
    }

    .info {
      text-align: left;
    }
  </style>

</head>

<body>
  <header>
    <h1>Humane Society Donations <br /> Help the Animals </h1>
  </header>
  <section id="outer">
    <?php echo "$errors";?>
  </section>
</body>

</html>
