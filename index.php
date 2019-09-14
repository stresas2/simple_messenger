<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Žinutės</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="js/javascript.js"></script>
    <link
      rel="stylesheet"
      media="screen"
      type="text/css"
      href="css/screen.css"
    />
  </head>
  <body>
    <div id="wrapper">
      <h1>Jūsų žinutės</h1>
      <form method="post">
        <p>
          <label for="fullname">Vardas, pavardė *</label><br />
          <input id="fullname" type="text" name="fullname" value="" />
        </p>
        <p>
          <label for="birthdate">Gimimo data *</label><br />
          <input id="birthdate" type="text" name="birthdate" value="" />
        </p>
        <p>
          <label for="email">El.pašto adresas</label><br />
          <input id="email" type="text" name="email" value="" />
        </p>
        <p>
          <label for="message">Jūsų žinutė *</label><br />
          <textarea id="message"></textarea>
        </p>
        <p>
          <span>* - privalomi laukai</span>
          <input type="submit" id="submit" value="Skelbti" />
          <img src="img/ajax-loader.gif" id="loading" style="visibility: hidden" alt="" />
        </p>
      </form>
      <noscript>
        <?php include "pagesNoScript.php"; ?>
      </noscript>
      <ul id="comments">
      </ul>
      <p id="pages">
      </p>
    </div>
  </body>
</html>
