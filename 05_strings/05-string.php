<?php
// retrieving information from form and storing it into variables

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$amount = $_POST['amount'];

// validating the information we receive by trimming white spaces and removing special char

$validated_firstName = trim(htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8'));
$validated_lastName = trim(htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8'));
$validated_email = trim(htmlspecialchars($email, ENT_QUOTES, 'UTF-8'));

// adding customer first name and last name together in a variable to use later

$full_name = $validated_firstName . ' ' . $validated_lastName;

// the donation variable holds the formatted version of validated amount and adding a dollar sign to it

$donation = '$' . number_format($amount, 2);

// storing the length of the last name in a variable

$last_name_length = strlen($validated_lastName);

// storing the first character of the last name in a variable and upper casing it

$upper_cased_last_name = strtoupper(substr($validated_lastName, 0, 1));

// storing a generated number into a variable

$random_number = mt_rand(1000, 9999);

// we generate a random id for the user based on their first last name letter, the length of it, and some random numbers

$id = $last_name_length . $upper_cased_last_name . $random_number;

$thank_you_message = "<p>Thank you $full_name for your donation of $donation</p> <p>Your conformation number is $id. We will email your recept at $validated_email</p>";
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

    <h2 class="info">Your Contribution</h2>
    <?php echo $thank_you_message ?>

  </section>
</body>

</html>
