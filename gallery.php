<!DOCTYPE HTML>
<html>
<head lang="en">
  <title>Gallery page</title>
  <?php include "header.php" ?>
  <!-- Heading information -->
</head>
<body>
  <div class="banner">
    <!-- Navbar -->
    <?php include "inc/navigation.php" ?>
    </div>
<section>
  <!--For the slick slideshow plugin chosen pictures  -->
  <h1 class="gallery-h1">The Adventure</h1>
  <div class="gallery-pics">
    <img src="lib/img/react.JPG" alt="React Problem">
    <img src="lib/img/clothingdrive.JPG" alt="R2Hire clothing drive">
    <img src="lib/img/ilios.JPG" alt="RV cafe">
    <img src="lib/img/Inclass.JPG" alt="In class">
    <img src="lib/img/rv.JPG" alt="RV building">
    <img src="lib/img/fusionconf.JPG" alt="Fusion Conference">

  </div>
  <div>
    <!--captions to the pictures placed around the page  -->
    <p class="Ilios">Ilios Cafe</p>
  </div>
  <div>
    <p class="classroom">Working Hard In Class</p>
  </div>
  <div>
    <p class="RV">RV Building</p>
  </div>
  <div>
    <p class="React">React</p>
  </div>
  <div>
    <p class="fusion">Fusion Conference</p>
  </div>
  <div>
    <p class="clothing">Clothing Drive</p>
  </div>
  <script src="lib/js/javascript.js"></script>
</section>
  <?php
  // footer
  include "footer.php";
  ?>
