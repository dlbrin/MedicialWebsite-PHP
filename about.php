<?php include 'includes/navbar.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>دەربارە - About</title>
</head>
<body class="<?php langstyle() ?>">
  <div class="about-cover" >
    <h1 data-aos="flip-left" data-aos-duration="2000"><?php echo sec($lang['about-cover-title']); ?></h1>
  </div>
  <div class="about-content">
    <div class="about">
      <div class="about-title" data-aos="fade-up" data-aos-duration="3000">
        <h1><?php echo sec($lang['about-title']); ?></h1>
      </div>
      <p>
        <?php echo sec($lang['about-content']); ?>
      </p>
      <div class="about-video">
        <video  controls>
          <source src="assets/images/RASTY.mp4" type="video/mp4">
          <source src="RASTY.ogg" type="video/ogg">
        </video>
      </div>
      <div class="about-title" data-aos="fade-up" data-aos-duration="3000">
        <h1><?php echo sec($lang['about-where-title']); ?></h1>
      </div>
      <p>
        <?php echo sec($lang['about-content_2']); ?>
      </p>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.234544258036!2d45.4542429143583!3d35.572602343531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40002d48897e32b3%3A0x6a7740025fb6573a!2sArina%20Center!5e0!3m2!1sen!2siq!4v1621436428156!5m2!1sen!2siq" allowfullscreen="" loading="lazy"></iframe>
<br>
</div>
</div>

<?php include "includes/footer.php"  ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>