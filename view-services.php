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
        <div class="service-type">
            <?php
            $query = mysqli_query($db , "SELECT *
        FROM `services`
        WHERE `lang` = '".$_SESSION['lang']."'");
            while($row = mysqli_fetch_assoc($query)){ ?>
        <ul class="ul-service">
            <a href="view-services.php?Services-Id=<?php echo sec($row['id']);?>"><li><?php echo $row['name'];?></li></a>
        </ul>
            <?php } ?>
        </div>
        <div class="services-details">
            <?php
            $id = sec($_GET['Services-Id']);
            $query = mysqli_query($db , "SELECT * FROM `services` WHERE `id` = '$id'");
            while($row = mysqli_fetch_assoc($query)){?>
            <h1 data-aos="fade-up" data-aos-duration="3000"><?php echo sec($row['name']);?></h1>
            <hr>
            <p>
                <?php echo $row['content'];?>
            </p>
            <?php } ?>
        </div>
    </div>

<?php include "includes/footer.php"  ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>