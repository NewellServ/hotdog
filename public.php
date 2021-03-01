<?php session_start() ; require_once('functions/forceLoggedIn.func.php'); forceLoggedIn(); ?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hotdogwife : Public Gallery</title>

    <meta name="description" content="My wife, Karen, loves hot dogs tremendously.  On this page you can purchase a hot dog for her and I will take a picture of her eating it and post it to the main page hot dog eating gallery.">
    <meta name="keywords" content="Karen, Newell, Karen Newell, Hot dog, I love hotdogs, hotdog, buy karen a hot dog, buy karen a hotdog">

  <?php require_once('header.php'); ?>
<body>
    <div class="wrapper">

      <h1>Public Gallery</h1>
      <br />
      <aside class="">
        "Here you can find all public hotdog eating images."
      </aside>
      <br />

      <section>
          <article class="">
              <h3>Gallery</h3>
              <p>The public gallery hasn't had any photos posted yet, you can view the <a href="founders.php">founders gallery</a> if you like.</p>
          </article>
      </section>
    </div>
    <br /><br />
  </body>
<?php require_once('footer.php'); ?>
