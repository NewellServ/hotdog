<?php session_start() ; ?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Karen loves hot dogs.</title>
    <link rel="stylesheet" href="/css/style.css">
    <meta name="description" content="My wife, Karen, loves hot dogs tremendously.  On this page you can purchase a hot dog for her and I will take a picture of her eating it and post it to the main page hot dog eating gallery.">
    <meta name="keywords" content="Karen, Newell, Karen Newell, Hot dog, I love hotdogs, hotdog, buy karen a hot dog, buy karen a hotdog">

  <?php require_once('header.php'); ?>
<body>
    <div class="wrapper">

      <h1>The store is currently closed.</h1>
      <br />
      <aside class="">
        "Karen is stuffed full."
      </aside>
      <br />

      <section>
          <article class="">
              <h3>See ya soon!</h3>
              <p>Karen got a little too full of all of your hotdogs and needed to take a break.  Make sure you are registered for the site and I'll let you know when she's ready to start taking hotdogs again.</p>
              <p>While we wait, please feel free to make a donation.  Donations keep the site going and there are many new features planned including the love letter feature.  Soon you will be able to send Karen a love letter with a tip.</p>
              <p>Karen will graciously accept your tip and read your letter.  She will even have the option to reply with her own letter and photos for your pleasure.  If you want to send a love letter please donate to help pay for development and encourage Karen to have some fun with us!</p>
              <p>All donations get your paypal email on the email list so you can be notified when updates have arrived.</p>
              <br /><br />
              <a href="register.php">register</a> - <a href="login.php">login</a>
              <br /><br />
              <form action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="FLDEP3NKA7LMG" />
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
              </form>

          </article>
      </section>
    </div>
    <br /><br />
  </body>
<?php require_once('footer.php'); ?>
