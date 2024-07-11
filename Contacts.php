
<?php
include 'includes/connection.php';

if (isset($_POST['send_message'])) {
    $fullname = $_POST['fullname'];
    $email_address = $_POST['email_address'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (fullname, email_address, phone_number, More_details)
            VALUES ('$fullname', '$email_address', '$phone_number', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Sentinel Security</title>
</head>
<body>
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
        
        <button type="submit" name="send_message">Submit</button>
    </form>
    <?php include_once("Templates/footer.php"); ?>
</body>
</html>
