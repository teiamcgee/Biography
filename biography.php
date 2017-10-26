<!DOCTYPE HTML>
<html>
<head lang="en">
  <?php include "header.php" ?>
  <title>Biography page</title>
</head>
<body>
  <div class="banner">
    <!-- Banner includes the navbar -->
    <?php include "inc/navigation.php" ?>
  </div>
    <section>
    <div class="bio-pics">
      <div class="bio-pic1">
        <!--Images of myself  -->
        <img src="lib/img/TEIA.JPG" alt="Teia-Taylor McGee" class="myimage">
      </div>
      <div class="bio-pic">
        <img src="lib/img/TTRM.JPG" alt="Teia-Taylor McGee" class="myimage">
      </div>
      <div class="bio-pic1">
        <img src="lib/img/TM.JPG" alt="Teia-Taylor McGee" class="myimage1">
      </div>
    </div>
    </section>
  <section>
    <article>
      <div class="bio-content">
        <!-- Personal quotes -->
        <h1 id="bio-header">" The sky is the limit is only for people that believe in limits. My dreams will change the world starting with html tag at a time."</h1>
      </div>
      <div class="bio-info">
        <h2>Offical Information</h2>
        <h3>Known Languages</h3>
        <!-- Description of known languages -->
        <ul class="bio-list">
          <li>javascript</li>
          <li>PHP</li>
          <li>CSS</li>
          <li>HTML</li>
          <li>jQuery</li>
        </ul>
        <h3>Goals</h3>
        <!-- List of Goals -->
        <ol class="bio-list">
          <li>Spread Peace, Love, and Happiness</li>
          <li>Become a Master Front-End Developer</li>
          <li>To spread 50 bad dad jokes per hour</li>
          <li>Travel and explore different cultures</li>
        </ol>
      </div>
    </article>
</section>
<?php
// footer
  include "footer.php";
?>
