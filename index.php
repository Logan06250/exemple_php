<!DOCTYPE html>
<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- TITLE OF SITE-->
  <title> Exemple PHP </title>

  <!-- META TAG -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="CV">
  <meta name="author" content="Me">

  <!-- FAVICON -->
  <link rel="icon" href="img/favicon.ico">

  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="acomp/autocomplete-0.3.0.css">


</head>

<body id="index">

  <h1>Générateur de mot de passe</h1>

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card left-colum">
          <p> Veuillez entrer un nombre de MDP à générer </p>
          <form action="index.php" method="post" target="_self">
            <p>
            <input type="text" name="nb" value="5" />
              <input type="submit" value="Valider" />
            </p>
          </form>
        </div>
      </div>
      <div class="col-lg-offset-1 col-lg-5">
        <div class="card  right-colum" >
          <div class="card-header">
              Listes des MDPs :
              <br/>
              <?php include("generate.php"); ?>
          </div>
            
        </div>
      </div>
    </div>
  </div>
</body>

</html>
