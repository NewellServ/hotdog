<?php session_start() ; ?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hotdogwife : Store</title>

    <meta name="description" content="My wife, Karen, loves hot dogs tremendously.  On this page you can purchase a hot dog for her and I will take a picture of her eating it and post it to the main page hot dog eating gallery.">
    <meta name="keywords" content="Karen, Newell, Karen Newell, Hot dog, I love hotdogs, hotdog, buy karen a hot dog, buy karen a hotdog">

  <?php require_once('header.php'); ?>
<body>
    <div class="wrapper">

      <h1>Hotdog Shop</h1>
      <br />
      <aside class="">
        "My I interest you in a hotdog? Or maybe a Wiener Ticket?"
      </aside>
      <br />

      <div class="shopContainer">
          <div class="shopLeft">
              <p><font size="10">🌭</font></p>
              <p>$4.50</p>
          </div>
          <div class="shopRight">
              <p>1</p>
          </div>
      </div>
      <div class="shopContainer">
          <div class="shopLeft">
              <p><font size="10">🎟</font></p>
              <p>$0.99</p>
          </div>
          <div class="shopRight">
              <p>0</p>
          </div>
      </div>
      <div class="shopBottomContainer">
          <p style="float: left ;">
             <small><small>Thank you for shopping at hotdog.newellserv.com.  <br />
                            We always need extra money and I like to think of<br />
                            this site as a toy for every one to play with.  <br />
                            Thanks for feeding her your hotdog and come back soon!<br />
                            As all purchases will be consumed, no refunds are<br />
                            currently available.  Purchase of any product from<br />
                            this website is agreeance to the <a href="promise.php" target="_blank">Hotdog Promise.</a></small></small>
          </p>
          <p style="text-align: right; padding-right: 20px ;">
              Total: $45.00<br />
              Tax: $3.00<br />
              <b>Due Now:</b>$48.00<br />
              <br />
              <button type="button" name="button">Paypal</button>
              <br />
              <br />
          </p>
      </div>
    </div>
    <br /><br />
  </body>
<?php require_once('footer.php'); ?>
