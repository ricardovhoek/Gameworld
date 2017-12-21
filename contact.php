<!DOCTYPE html>
<html>
  <head><meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
  </head>
  <body>
    <?php include("header.php")
    ?>
    <div id="contactform">
                <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <label class="required" for="name">Your name:</label><br />
                    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
                    <span id="name_validation" class="error_message"></span>
                  </div>
                  <div class="row">
                    <label class="required" for="email">Your email:</label><br />
                    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
                    <span id="email_validation" class="error_message"></span>
                  </div>
                  <div class="row">
                    <label class="required" for="message">Your message:</label><br />
                    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
                    <span id="message_validation" class="error_message"></span>
                    <input type="submit" name="mySubmit" value="Send"><br />
                  </div>
    </body>
    <?php include("footer.php")
     ?>
</html>
