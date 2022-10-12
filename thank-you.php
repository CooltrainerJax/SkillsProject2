<?php
include 'header.php';
include 'navigation.php';
include 'connection.php';
include 'footer.php';
?>

<h6> Thank You </h6>

<hr style= "display:block; color: black; margin-top: -50px;">

<p class="thankyou"> Thank you: <?php echo $_GET["email"];?></p>

<p class = "thankyou" > We will contact you about the 
<?php echo $_GET["location"];?> trip on the <?php echo $_GET["date"]; ?></p>
