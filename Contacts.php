<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us-Sentinel Security</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/1fa7f09028.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <?php
     include_once ("Templates/nav.php");
     require_once("includes/connection.php");
     if
     (isset($_POST["send_message"]))
     {
      $fullname = $_POST["fullname"];
      $mail = $_POST["email_address"];
      $phone = $_POST["phone_number"];
      $message = $_POST["message"];
  
  $insert_message = "INSERT INTO messages
  (sender_name, sender_email, subject_line, text_message)
  VALUES ('$fullname' ,'$mail', '$phone', '$message')";
  
  if ($conn->query( $insert_message) === TRUE) {
  echo "New record created successfully";
  } else {
  echo "Error: " . $insert_message . "<br>" . $conn->error;
  }
  }
     ?>
  </header>
  <section class="contact">
    <div class = "contactp">
        <h1>Contact Sentinel Security</h1>
        <p>Get in touch with us to discuss your cybersecurity needs</p>
        <form action="contact_form_handler.php" method="POST">
            <label for="fullname">Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            
            <label for="email_address">Email:</label>
            <input type="email" id="email_address" name="email_address" required>
            
            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Submit</button>
        </form>

    </div>
  </section>

</body>
<footer>
<?php include_once ("Templates/footer.php"); ?>
</footer>
</html>