<?php include 'includes/config.php';?>
<?php
if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "bs";
    else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "bs"){
            $_SESSION['lang'] = "bs";
            $lang = $_SESSION['lang'];
        }
        else if ($_GET['lang'] == "en" )
          $_SESSION['lang'] = "en";
        else if ($_GET['lang'] == "ar")
        $_SESSION['lang'] = "ar";
    }
      function langstyle(){
      global $lang;
      if($_SESSION['lang'] == "en"){
        echo "en";
      }else{
         echo "ku";
      }
    }

    include "languages/" . $_SESSION['lang'] . ".php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="<?php langstyle() ?>">

  <nav>
    <header class="header-pc">


      <div class="social">
        <a href="https://www.facebook.com/CenterArina"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/arinacenter/"><i class="fab fa-instagram"></i></a>
        <a href="viber://add?number=07703005005"><i class="fab fa-viber"></i></a>
        <a href="https://t.me/arinacenterr"><i class="fab fa-telegram-plane"></i></a>
        <a href="https://api.whatsapp.com/qr/WSIDSVOBWOKEO1"><i class="fab fa-whatsapp"></i></a>

      </div>

      <div class="lang">
        <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        <a href="index.php?lang=bs"><?php echo $lang['lang_bs'] ?></a>
        <a href="index.php?lang=ar"><?php echo $lang['lang_ar'] ?></a>
      </div>




    </header>
    <div class="logo">
      <a href="index.php"><img src="assets/images/arina.png"></a>
    </div>
    <div class="logoen">
      <a href="index.php"><img src="assets/images/arina.png"></a>
    </div>
    <div class="openMenu"><i class="fa fa-bars"></i></div>
    <ul class="mainMenu">
      <li><a href="index.php"><?php echo $lang['home'] ?></a></li>
      <li><a href="services.php"><?php echo $lang['service'] ?> </a></li>
      <li><a href="examples.php"> <?php echo $lang['examples'] ?> </a></li>
      <li><a href="contact.php"><?php echo $lang['contact'] ?></a></li>
      <li><a href="about.php"><?php echo $lang['about'] ?> </a></li>
      <li><a href="login.php">login </a></li>
      <header class="header-mob">

        <div class="lang">
          <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
          <a href="index.php?lang=bs"><?php echo $lang['lang_bs'] ?></a>
          <a href="index.php?lang=ar"><?php echo $lang['lang_ar'] ?></a>
        </div>
        <div class="social">
          <a href="https://www.facebook.com/CenterArina"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/arinacenter/"><i class="fab fa-instagram"></i></a>
          <a href="viber://add?number=07703005005"><i class="fab fa-viber"></i></a>
          <a href="https://t.me/arinacenterr"><i class="fab fa-telegram-plane"></i></a>
          <a href="https://api.whatsapp.com/qr/WSIDSVOBWOKEO1"><i class="fab fa-whatsapp"></i></a>
        </div>

      </header>


      <div class="closeMenu"><i class="fa fa-times"></i></div>



    </ul>

  </nav>
  <script src="assets/js/app.js"></script>
</body>

</html>