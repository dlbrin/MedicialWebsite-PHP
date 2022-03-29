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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arina Center - ئارینا سەنتەر</title>
  <link rel="icon" href="assets/images/logo.png">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <script src="https://kit.fontawesome.com/cd3e50abb9.js" crossorigin="anonymous"></script>
</head>
<body class="<?php langstyle() ?>">
  <div class="CrossFade">
    <div class="intro">
        <div class="arina-text"><h1 data-aos="flip-left" data-aos-duration="2000"><?php echo $lang['arina-center'] ?></h1></div>
        <p data-aos="flip-left" data-aos-duration="2000"><?php echo sec($lang['hair-transplant']) ?></p>
    </div>
  </div>
  <div  class="p2">
    <p>Miracles happen here </p>
  </div>

  <div class="card-services-details" id="service">
    <center>
        <div class="card-title" data-aos="fade-up" data-aos-duration="3000">
          <h4><?php echo sec($lang['service']) ?></h4>
      </div>
    </center>
      <div class="cardservice">
        <?php
        $query = mysqli_query($db , "SELECT *
        FROM `services`
        WHERE `lang` = '".$_SESSION['lang']."'");
        while($row = mysqli_fetch_assoc($query)){ ?>
          <div class="cardcontent" data-aos="fade-up" data-aos-duration="3000">
            <img class="img1" src="assets/images/<?php echo sec($row['img']);?>" alt="">
            <h2><?php echo sec($row['name']);?></h2>
            <p><?php echo sec($row['details']);?></p>
            <button><a href="view-services.php?Services-Id=<?php echo sec($row['id']);?>"><?php echo $lang['service-more'] ?></a></button>
          </div>
        <?php } ?>
      </div>
    </div>
    
<!-- Examples -->
    <center>
        <div class="card-title" data-aos="fade-up" data-aos-duration="3000">
          <h4><?php echo sec($lang['examples-title']) ?></h4>
      </div>
    </center>
   <div data-aos="fade-up"
     data-aos-duration="3000">
     <?php 
     $query = mysqli_query($db , "SELECT * FROM `examples` WHERE `lang` = '".$_SESSION['lang']."'");
     while($row = mysqli_fetch_assoc($query)){ ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <article class="blog-card">
        <div class="blog-card__background">
          <div class="card__background--wrapper">
            <div class="card__background--main" style="background-image: url('assets/images/<?php echo sec($row['images']);?>');">
              <div class="card__background--layer"></div>
            </div>
          </div>
        </div>
        <div class="blog-card__head">
          <center><span class="date__box">
            <span class="date__day"><img src="assets/images/logo.png"></span>
          </span></center>
        </div>
        <div class="blog-card__info">
          <h5><?php echo sec($row['name']);?></h5>
          <p><?php echo sec($lang['examples-p']); ?></p>
          <a href="view-examples.php?Examples-Id=<?php echo sec($row['id']);?>" class="btn btn--with-icon"><i class="btn-icon fa fa-long-arrow-right"></i><?php echo sec($lang['service-more']); ?></a>
        </div>
      </article>
    </div>
  </div>
</div>
<?php } ?>
</div>
<!--- feedback -->
<div class="feedback">
  <div class="feedback-details">
    <div class="feedback-info">
      <div class="feedback-vid">
        <video  controls>
          <source src="assets/images/arina_feedback_kurdish.mp4" type="video/mp4">
          <source src="arina_feedback_kurdish.ogg" type="video/ogg">
            <source src="arina_feedback_kurdish.webm" type="video/webm"></source>
        </video>
      </div>
      <div class="feedback-text">
        <h1><?php echo sec($lang['feedback']); ?></h1>
        <center><hr style="color: teal;"></center>
        <p><?php echo sec($lang['feedback-text']); ?></p>
      </div>
    </div>
  </div>
</div>
<!--- contact -->
<div class="contact">
  <div data-aos="fade-right" data-aos-duration="3000">
    <center>
        <div class="card-title" data-aos="fade-up" data-aos-duration="3000">
          <h4><?php echo sec($lang['contact-title']); ?></h4>
      </div>
    </center>
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
          <form method="POST" action="index.php">
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
</div>
<?php include "includes/footer.php"  ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>