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
    <?php include_once ("Templates/nav.php"); ?>
  </header>
  <section class="contact">
    <div class = "contactp">
        <h1>Contact Sentinel Security</h1>
        <p>Get in touch with us to discuss your cybersecurity needs</p>
        <form action="contact_form_handler.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
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