<?php 
if(isset($_POST['submit'])){
    $to = "bfwsharp@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $idea = $_POST['idea'];
    $subject = "Libratone Nightingale | 360 idea submission from " . $_POST['name'];
    $message = "A Nightingale 360 idea submission has been recieved." . "\n\n" . "From: " . $name . "\n\n" . "Age: " . $age . "\n\n" . "Their email: " . $from . "\n\n" . "Their idea: " . "\n\n" . $idea;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Libratone Nightingale - 360 Sign Up</title>
        <meta name="description" content="Submit your 360 degree idea to Libratone.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7608432/626348/css/fonts.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header>
      <div id="header-content">
        <div id="header-content--middle">
          <div id="header-content--inner">
            <img id="logo" src="img/logo.png">
            <h1>Welcome to Nightingale</h1>
            <p>Sigma &amp; Libratone have teamed up to create a new track 'Nightingale'. We're going to send out 360&deg; Libratone speakers and 360&deg; cameras to people around the World to capture the crazy, beautiful and amazing things you get up to while you listen to it. Game?</p>
          </div>
          <a class="page-scroll" href="#get-involved"><img class="chev bounce" src="img/chev-white.png"></a>
        </div>
      </div>
    </header>
    <section id="get-involved">
      <div class="container">
        <div id="get-involved__copy" class="row">
          <h2>How do I get involved?</h2>
          <div class="col-md-4">
            <div class="circ"><p>1.</p></div>
            <h3>Tell us your idea</h3>
            <p>In less than 500 characters we want you to tell us the awesome things you’ll get up to while listening to the track.</p>
          </div>
          <div class="col-md-4">
            <div class="circ"><p>2.</p></div>
            <h3>Make your 360&deg; scene</h3>
            <p>If we like your idea we'll send you a 360&deg; Libratone ZIPP Speaker and a 360&deg; camera to film the action.</p>
          </div>
          <div class="col-md-4">
            <div class="circ"><p>3.</p></div>
            <h3>Send us the footage</h3>
            <p>The best 360&deg; footage we get back will appear in the video and be beamed around the world. Nice.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a class="page-scroll" href="#submission"><img class="chev" src="img/chev-black.png"></a>
          </div>
        </div>
      </div>
    </section>
    <section id="submission">
      <div class="container">
        <div class="row">
          <h2>Send us your idea</h2>
          <form action="" method="post" id="nightingale-form">
            <div class="col-md-6">
              <label>Name</label>
              <div class="input-wrap">
                <input id="your-name" name="name" type="text">
              </div>
              <label>Age</label>
              <div class="input-wrap">
                <input id="your-age" name="age" type="number">
              </div>
              <label>Country</label>
              <div class="input-wrap">
                <input id="your-country" name="country" type="text">
              </div>
              <label>Email</label>
              <div class="input-wrap">
                <input id="your-email" name="email" type="email">
              </div>
            </div>
            <div class="col-md-6">
              <label>Your idea in 500 characters or less:</label>
              <div class="input-wrap">
                <textarea id="your-idea" name="idea"></textarea>
              </div>
            </div>
            <input id="submit" type="image" src="img/submit.png" border="0" name="submit" alt="Let's do this.">
          </form>
        </div>
      </div>
    </section>
    <footer>
      
    </footer>
    </div> <!-- /container --> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/happy.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
