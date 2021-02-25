<meta name="viewport" content="width=device-width, initial-scale=1">
<script data-ad-client="ca-pub-9035953982473206" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<header>
    <div class="headWrapper">
      <div class="navWrapper">
        <a  id="hotdogsKaren" href="/index.php">&#127789; Hotdogs for Karen</a> <!-- needs the slash in the beginning to work from various directories -->
        <nav>
          <?php
            //We need to show a different menu for users who are logged in.  We are going to use a function called userState() that returns an id if the user is logged in and false if the user is a guest.

            require_once('functions/userState.func.php');
            if (userState() === false ){
                ?>
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="faq.php">faq</a></li>
                    <li><a href="register.php">register</a></li>
                  <li><a href="login.php">login</a></li>
                </ul>
                <?php
            }else{
                ?>
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="howitworks.php">what...</a></li>
                    <li><a href="public.php">PubG</a></li>
                    <li><a href="private.php">MyDogs</a></li>
                    <li><a href="includes/logout.inc.php">logout</a></li>
                </ul>
                <?php
            }

           ?>

        </nav>
      </div>
    </div>
  </header>
