<link rel="stylesheet" href="/css/style.css?v=1.011">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script data-ad-client="ca-pub-9035953982473206" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<header>
    <div class="headWrapper">
      <div class="navWrapper">
        <a  id="hotdogsKaren" href="/index.php">&#127789; HotdogWife</a> <!-- needs the slash in the beginning to work from various directories -->
        <nav>
          <?php
            //We need to show a different menu for users who are logged in.  We are going to use a function called userState() that returns an id if the user is logged in and false if the user is a guest.

            require_once('functions/userState.func.php');
            if (userState() === false ){
                ?>
                <ul>
                    <li><a href="faq.php">faq</a></li>
                    <li><a href="register.php">register</a></li>
                  <li><a href="login.php">login</a></li>
                </ul>
                <?php
            }else{
                ?>
                <ul>
                    <li><a href="public.php">PubG</a></li>
                    <li><a href="private.php">MyDogs</a></li>
                    <li><a href="mail.php">Letters</a></li>
                    <li><a href="includes/logout.inc.php">Logout</a></li>
                </ul>
                <?php
            }

           ?>

        </nav>
      </div>
    </div>
  </header>
