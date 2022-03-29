<?php include 'includes/navbar.php';?>
<?php
if(isset($_POST['submit'])){
  $name = sec($_POST['name']);
    $email = sec($_POST['email']);
    $phone = sec($_POST['phone']);
    $message = sec($_POST['message']);

    $query = mysqli_query($db , "INSERT INTO `contact`(`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')");
    if($query){
      $success['result'] = "سۆپاس بۆ پەیوەندیەکەت !";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>پەیوەندی - Contact</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <div class="contact-cover" >
    <h1 data-aos="flip-left" data-aos-duration="2000"><?php echo sec($lang['contact-page-cover']); ?></h1>
  </div>
  <div class="contact-body">
  	<div class="contact-title" data-aos="fade-up" data-aos-duration="3000">
        <h1><?php echo sec($lang['contact-title']); ?></h1>
    </div>
    <?php if(isset($_POST['submit'])){?><div class="success"><h1><?php echo $success['result'];?></h1></div><?php } ?>
  <div class="contact-details">
    <div class="contact-social" data-aos="zoom-in" data-aos-duration="3000">
      <h1><?php echo sec($lang['contact-page-social']); ?></h1>
      <div class="email-phone-details">
        <div class="phone">
          <center><label><i class="fas fa-phone"></i></label></center>
          <h3><a href="callto:+96407703005005">+96407703005005</a></h3>
        </div>
        <div class="email">
          <center><label><i class="far fa-envelope"></i></label></center>
          <h3><a href="mailto:arinahairtransplant@gmail.com">arinahairtransplant@gmail.com</a></h3>
        </div>
      </div>
      <div class="social-media">
        <a href="https://www.facebook.com/CenterArina"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/arinacenter/"><i class="fab fa-instagram"></i></a>
        <a href="viber://add?number=07703005005"><i class="fab fa-viber"></i></a>
        <a href="https://t.me/arinacenterr"><i class="fab fa-telegram-plane"></i></a>
        <a href="https://api.whatsapp.com/qr/WSIDSVOBWOKEO1"><i class="fab fa-whatsapp"></i></a>
      </div>
      <br>
      <div class="location">
        <center><label><i class="fas fa-map-marker-alt"></i></label>
        <h3><a href="#">Twi Malik (170.55 mi), 46001</a></h3></center>
      </div>
    </div>
    <div class="contact-email" data-aos="zoom-in" data-aos-duration="3000">
      <h1><?php echo sec($lang['contact-register']); ?></h1>
      <center>
        <div class="contact-inputs">
          <form method="POST" action="contact.php">
            <input type="text" name="name" placeholder="<?php echo sec($lang['contact-register-name']); ?>">
            <br>
            <input type="email" name="email" placeholder="<?php echo sec($lang['contact-register-email']); ?>">
            <br>
            <input type="phone" name="phone" placeholder="<?php echo sec($lang['contact-register-phone']); ?>">
            <br>
            <textarea name="message" placeholder="<?php echo sec($lang['contact-register-message']); ?>"></textarea>
            <br>
            <button type="submit" name="submit"><?php echo sec($lang['contact-send']); ?></button>
          </form>
        </div>
      </center>
    </div>
  </div>
  <br>
  </div>
<?php include "includes/footer.php"  ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>