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

      <h1>Register Account</h1>
      <br />
      <aside class="">
          <?php
          if (isset($_GET['error'])){
              echo "<span><font color=\"red\"><b>" . $_GET['error'] . "</b></font></span>" ;
          }else{
                echo "<p>Registering an account is free and sets you up for attribution and notification.</p>" ;
                ?>


                <?php
          }
           ?>

      </aside>
      <br />

      <section>
          <article class="register">

              <form class="" action="includes/register.inc.php" method="post">
                  <input type="text" name="email" <?php if (isset($_GET['email'])){ echo "value =\"". $_GET['email'] ."\""; }?> placeholder="Email..."><br /><br />
                  <input type="password" name="password" placeholder="Password..."><br /><br />
                  <input type="password" name="password2" placeholder="Retype Password..."><br /><br />
                  <input type="submit" name="register" value="Register">
              </form><br />
              <small> <aside class="">
                  As always, you should use a <b>unique password</b> for this website.
              </aside> </small>
          </article>
      </section>
      <br /><br />
      <h2>Register for the site if you want to:</h2><br />
      <ol>
          <li>View the public gallery.</li>
          <li>Have a personal gallery of <b>YOUR</b> hotdogs.</li>
          <li>Claim attribution of your eaten hotdog.</li>
          <li>Receive updates about Karen and her hotdog eating excursions.</li>
          <li>Receive updates about new features of this website.</li>
          <li>Receive updates about new projects from the maker of this website.</li>
      </ol>
    </div>
    <br /><br />
  </body>
<?php require_once('footer.php'); ?>
