<?php session_start() ; require_once('functions/forceLoggedIn.func.php'); forceLoggedIn(); ?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Karen loves hot dogs.</title>
    
    <meta name="description" content="My wife, Karen, loves hot dogs tremendously.  On this page you can purchase a hot dog for her and I will take a picture of her eating it and post it to the main page hot dog eating gallery.">
    <meta name="keywords" content="Karen, Newell, Karen Newell, Hot dog, I love hotdogs, hotdog, buy karen a hot dog, buy karen a hotdog">

  <?php require_once('header.php'); ?>
<body>
    <div class="wrapper">

      <h1>Founders Gallery</h1>
      <br />
      <aside class="">
        This is the original gallery before record keeping was implemented.  It largely remains the same slow <br />loading webpage it was before.  Your hotdog is in there... somewhere, Founder.
      </aside>
      <br />
      <!-- image gallery of karen eating hotdogs. -->

          <?php
            $files = glob("hotdog_selfie/*.*");
            if (count($files) < 1){
                ?>
                <br /><br />
                <b>Either no one has bought karen a hotdog yet or she hasn't eaten one yet.</b><br /><br />
                <?php
            }else{
                for ($i = 0; $i < count($files); $i++) {
                    $image = $files[$i];

                    //echo '<img src="' . $image . '" alt="Random image" />' . "<br /><br />";
                    ?>
                        <a href="<?php echo $image ; ?>" title="click here to see the full sized image"><img src="<?php echo $image ;?>" alt="Karen eating a hotdog." loading="lazy" ></a>
                    <?php

                }
            }
           ?>


    </div>
    <br /><br />
  </body>
<?php require_once('footer.php'); ?>
