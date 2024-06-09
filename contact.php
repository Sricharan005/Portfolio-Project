<?php
// Check if form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // Send email
    $to = 'your-email@example.com';
    $subject = 'Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    mail($to, $subject, $body);
    // Display success message
    echo '<p>Thank you for contacting me!</p>';
} else {
    // Display form
    ?>
    <form id="contact-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" value="Send">
    </form>
    <?php
}
?>
