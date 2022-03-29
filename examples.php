<?php include 'includes/navbar.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>نموونە - Example</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <div class="exaples-body">
    <div class="exaples-back">
      <div class="examples-back-img">
        <h1 data-aos="flip-left" data-aos-duration="2000"><?php echo $lang['examples-page-cover'] ?></h1>
      </div>
    </div>
    <center>
      <h1 class="exaples-title" data-aos="fade-up" data-aos-duration="3000"><?php echo $lang['examples-page-title'] ?></h1>
    </center>
    <div class="blog-examples">
      <?php 
      $query = mysqli_query($db , "SELECT * FROM `examples` WHERE `lang` = '".$_SESSION['lang']."'");
      while($row = mysqli_fetch_assoc($query)){ ?>
      <div class="blog-card-exaples" data-aos="fade-up" data-aos-duration="3000">
        <div class="meta">
          <div class="photo" style="background-image: url('assets/images/<?php echo sec($row['images']);?>')"></div>
        </div>
        <div class="description">
          <h5><?php echo sec($row['name']);?></h5>
          <p><?php echo $lang['examples-page-p'] ?></p>
          <p class="read-more">
            <a href="view-examples.php?Examples-Id=<?php echo sec($row['id']);?>"><?php echo $lang['examples-more'] ?></a>
          </p>
        </div>
      </div>
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