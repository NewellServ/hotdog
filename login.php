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

      <h1>Hotdog!</h1>
      <br />
      <aside class="">
          <?php
          //This piece of code simply checks to see if there is an error or success message and displays it otherwise.
          if (isset($_GET['error'])){
              echo "<span><font color=\"red\"><b>" . $_GET['error'] . "</b></font></span>" ;
          }else if(isset($_GET['success'])){
              echo "<span><font color=\"green\"><b>" . $_GET['success'] . "</b></font></span>";
          }else{
                echo "<p>Logging into your account allows you to view the public gallery as well as your private gallery.</p>" ;
                ?>


                <?php
          }
           ?>

      </aside>
      <br />

      <section>
          <article class="">
              <h3>Login</h3>
              <form class="" action="includes/login.inc.php" method="post">
                  <input type="text" name="email" <?php if (isset($_GET['email'])){ echo "value =\"". $_GET['email'] ."\""; }?> placeholder="Email..."><br /><br />
                  <input type="password" name="password" placeholder="Password..."><br /><br />
                  <input type="submit" name="submit" value="Login"><br /><br />
              </form>
              <p>No account?  <a href="register.php">Register here.</a></p>
          </article>
      </section>
    </div>
    <br /><br />
  </body>
<?php require_once('footer.php'); ?>
