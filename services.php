<?php include 'includes/navbar.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="services-cover">
        <h1 data-aos="flip-left" data-aos-duration="2000"><?php echo sec($lang['service-page-cover-title']) ?></h1>
    </div>
    <div class="services-content">
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
                    <img class="img1" src="assets/images/<?php echo $row['img'];?>" alt="">
                    <h2><?php echo sec($row['name']);?></h2>
                    <p><?php echo sec($row['details']);?></p>
                    <button><a href="view-services.php?Services-Id=<?php echo sec($row['id']);?>"><?php echo $lang['service-more'] ?>  </a></button>
                </div>
            <?php } ?>
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