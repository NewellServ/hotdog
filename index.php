<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Karen loves hot dogs.</title>
    <link rel="stylesheet" href="/css/style.css">
    <meta name="description" content="My wife, Karen, loves hot dogs tremendously.  On this page you can purchase a hot dog for her and I will take a picture of her eating it and post it to the main page hot dog eating gallery.">
    <meta name="keywords" content="Karen, Hot dog, I love hotdogs, hotdog, buy karen a hot dog, buy karen a hotdog">

  <?php require_once('header.php'); ?>
<body>
    <div class="wrapper">

      <h1>Buy Karen a hotdog</h1>
      <br />
      <aside class="">
        "You can help aggravate an irrational addiction to hotdogs."
      </aside>
      <br />
      <img src="images/karen.png" alt="A nice picture of Karen so you can see her before she gets fat." title="A nice picture of Karen so you can see her before she gets fat.">
      <section class="Main">
        <article>
            Buy Karen a hotdog and an image of her eating it will be posted here.<br /><br />
            

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="AG2D5EPVGNZ6A">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>


            <br />


            <font color="green" size="16px">$4.50</font>
            
            <br /><br /><em><small>We are currently experiencing high latency.  All purchases <b>will be honored</b>, and reserves your spot in line.</b></small></em>
        </article><br />

      </section>
      
        
    <section class="Main">
        <article>
            Buy a raffle ticket for the feb 12th Hotdog Friday raffle!
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2SSP3DQZWQZME">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            
            <font color="green" size="16px">.99</font>
            
            <br /><br /><em><small>Raffles will be held every friday night and the hotdog eating video in the gallery will be replaced with your hotdog with attribution if you like.</b></small></em>
        </article>
    </section>

      <section class="blog">
        <article>
            <video width="320" height="240" controls>
                <source src="/hotdog_video/Video.mp4" type="video/mp4">
            
                Your browser does not support the video tag.
            </video>
        </article>
        </article>
        <article>
          <h3>Hotdog eating gallery</h3>

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
                        <a href="<?php echo $image ; ?>" title="click here to see the full sized image"><img src="<?php echo $image ;?>" alt="Karen eating a hotdog."></a>
                    <?php

                }
            }
           ?>




        </article>
      </section>

    </div>
  </body>
<?php require_once('footer.php'); ?>
