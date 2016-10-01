<?php
session_start
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<title>formucontact</title>
</head>
<body>
    <div class="container";>
    <div class="img-thumbnail" style="margin-left:auto; margin-rigth:auto;">
  <img src="img/Accenture.png"class="img-responsive"width="150" style="margin-lefth:auto;margin-right:auto;">
</div>
  <div class="alert alert-danger" role="alert">
     <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
     <span class="sr-only">AVIS AUX SPAMMER:</span>
     ACCÉLÉRONS ENSEMBLE VOTRE TRANSFORMATION
</div>
<form action="receiveform.php" method="post">

       <div class="col-md-6">
      <div class="form-group">
        <label for "inputnom">Nom</label>
        <input type="text" name="nom" id="inputnom" class="form-control" placeholder="saisir votre nom">
      </div>
      </div>

        <div class="col-md-6">
          <div class "form-group">
            <label for="inputemail"> Email</label>
            <input type="email" name="email" id="inputemail" class="form-control" placeholder="saisir votre email">
          </div>
          </div>

                     <div class="col-md-12">
                      <div class="form-group">
                        <label id="textMessage">Message</label>
                        <textarea name="message"  class="form-control" id="textmessage">
                        </textarea>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputnom"></label>
                        <input type="submit" "formvalidate" value="envoyer" class="form-control" style="background:#107289;width:150px;color:white;">
                      </div>
                      </div>
        </form>


</body>
</html>
