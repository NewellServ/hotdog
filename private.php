<?php session_start() ; require_once('functions/forceLoggedIn.func.php'); forceLoggedIn(); ?><!DOCTYPE html>
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

      <h1>My Gallery</h1>
      <br />
      <aside class="">
        "Behold, Karen eating your hotdog."
      </aside>
      <br />

      <section>
          <article class="">
              <h3>Gallery</h3>
              <p>You haven't bought her a hotdog yet!</p>
              <p>If you are a founder and are looking for your pre record keeping hotdog photos <a href="founders.php">click here.</a></p>
          </article>
      </section>
    </div>
    <br /><br />
  </body>
<?php require_once('footer.php'); ?>
