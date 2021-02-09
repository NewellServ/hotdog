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

      <h1>Doink!</h1>
      <br />
      <aside class="">
        "Let's get you fixed up."
      </aside>
      <br />

      <section>
          <article class="">
              <h3>Forgot Password</h3>
              <p>Wouldn't want to miss out on getting your hotdog gobbled.  Enter your email in the form below and we'll kick one out to your spam folder to reset your password.</p>

              <form action="includes/forgot.inc.php" method="post">
                  <input type="text" name="Email" placeholder="Whats your email?" />
                  <input type="submit" name="submit" value="Submit" />
              </form>
              <br /><br />
              <a href="register.php">register</a> - <a href="login.php">login</a>
              <br /><br />
          </article>
      </section>
    </div>
    <br /><br />
  </body>
<?php require_once('footer.php'); ?>
