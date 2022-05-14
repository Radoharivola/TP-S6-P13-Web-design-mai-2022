<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codeigniter Crud By PHP Code Builder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="http://crudegenerator.in">Codeigniter Crud By PHP Code Builder</a> -->
      </div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url(); ?>manage-contenu">Gérer Contenu</a></li>
        <li><a href="<?php echo site_url(); ?>add-contenu">Ajouter Contenu</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   dateajout  :  <?php echo $contenu[0]->dateajout ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   title  :  <?php echo $contenu[0]->title ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   texte  :  <?php echo $contenu[0]->texte ?>
  </div>
</div>

</div>

</body>
</html>