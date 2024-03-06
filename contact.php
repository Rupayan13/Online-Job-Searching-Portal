<?php include("./header.php"); ?>
<?php
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<div class="container">
<section id="contact">
            <h2>Contact Us</h2>
            <div class="contact-form">
                <form action="#" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    <input type="submit" value="Send Message">
                </form>
            </div>
        </section>
</div>
<?php include("./footer.php"); ?>