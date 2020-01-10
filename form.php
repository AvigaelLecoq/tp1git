<!DOCTYPE html>
<html>
<head>
  <title>formulaire</title>
    <meta charset="utf-8">
<link href="bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div class="container">
      <header class="row col-sm-12">
        <div class="page-header">
          <h1>Mon beau site</h1>
        </div>
      </header>
      <div class="row col-sm-12">
        <nav class="col-sm-2">          
          <ul class="nav nav-pills nav-stacked">
            <li class="active"> <a href=""> <span class="glyphicon glyphicon-home"></span> Accueil </a> </li>
        </ul>
      <ul class="nav nav-pills nav-stacked">
            <li> <a href="form.php"> <span class="glyphicon glyphicon-book"></span> Formulaire </a> </li>
            
          </ul>
        </nav>
  
<form action="" method="POST">
  
  <div class="form-group ">
    <label for="name"> Nom : </label>
    <input type="text" name="name" id="name" required>
  </div>
    <div class="form-group">
    <label for="name">Prénom : </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-group">
    <label for="email"> Saisir votre e.mail :  </label>
    <input type="email" name="email" id="email" required>
  </div>
    <input type="submit" value="Envoyer !">
  </div>
</form>

</body>
</html>

