<?php include 'includes/navbar.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>نموونە - Example</title>
</head>
<body>
  <div class="famous">
    <div class="exaples-back">
      <h1 data-aos="flip-left" data-aos-duration="2000"><?php echo $lang['examples-page-cover'] ?></h1>
    </div>
    <center>
    <div class="first-examples">
      <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FCenterArina%2Fposts%2F1053878175021026&show_text=true&width=500" width="500" height="677" style="border:2px solid teal;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

      <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FCenterArina%2Fposts%2F699604473781733&show_text=true&width=500" width="500" height="1077" style="border:2px solid teal;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>
  </center>
    <?php
    $id = sec($_GET['Examples-Id']);
    $query = mysqli_query($db , "SELECT * FROM `examples` WHERE `id` = '$id'");
    while($row = mysqli_fetch_assoc($query)){
     $id_examples = sec($row['examples_id']);
     echo $id_examples;
      ?>
    <center>
      <h1 class="exaples-title" data-aos="fade-up" data-aos-duration="3000"><?php echo sec($row['name']);?></h1>
    </center>
  <div class="all-example">
    <?php
      $query = mysqli_query($db , "SELECT * FROM `examples_img_hair` WHERE `example_id` = '$id_examples'");
      while($row = mysqli_fetch_assoc($query)){ 
        $example_id = sec($row['example_id'])?>
    <div class="images">
      <?php
      if($example_id == 3){
      } else {?>
      <img class="before" src="assets/images/<?php echo sec($row['img_before']);?>" alt="">
    <?php } ?>
      <img class="after"  src="assets/images/<?php echo sec($row['img_after']);?>" alt="">
    </div>
     <?php }?>
  </div>
<?php } ?>
 </div>


<?php include "includes/footer.php"  ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>