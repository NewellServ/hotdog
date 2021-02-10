<?php session_start() ; ?><!DOCTYPE html>
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

      <h1>Buy Karen a hotdog<font style="font-size: 8px;">1.1</font></h1>
      <br />
      <aside class="">
        "Testing the limits of hotdog consumption."
      </aside>
      <br />
      <section class="Main">
          <a href="/hotdog_video/Video.mp4">
            <img src="hotdog_selfie/image0.jpeg" alt="A nice picture of Karen so you can see her before she gets fat." title="A nice picture of Karen so you can see her before she gets fat.">
        </a><br />
        <aside class="">
            <small>Click my photo to watch me eat the last raffle wieners hotdog!</small>
        </aside>
      </section>
      <section class="Main">
          <section class="buttons">
            <article>
                Buy Karen a hotdog and I'll give you a picture of her eating it.<br /><br />

                <!-- paypal button -->
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="NJCQEGECHU5QJ">
                    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>




                <br />


                <font color="green" size="16px">$4.50</font>

                <br /><br /><em><small>Rate of hotdog consumption varies greatly, expect your hotdog to be eaten within a couple of days.</b></small></em>
            </article>

          </section>



        <section class="buttons">
            <article>
                Buy a wiener ticket for the Hotdog Friday raffle!<br />
                <!-- paypal button -->

                <font color="green" size="16px">&cent;.99</font>

                <br /><br /><em><small>Hotdog Friday is when we video Karen eating the raffle wieners hotdog and put it on the home page.</b></small></em>
            </article>
        </section>
    </section>

        <br /><br />
    </div>
  </body>
<?php require_once('footer.php'); ?>
