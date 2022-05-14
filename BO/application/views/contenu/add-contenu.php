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
                <li class="active"><a href="<?php echo site_url(); ?>add-contenu">Ajouter Contenu</a></li>
                <li><a href="<?php echo base_url(); ?>loginController/deco">Se déconnecter</a></li>

            </ul>
        </div>
    </nav>

    <div class="container">

        <h2>Nouveau Contenu</h2>
        <form role="form" method="post" action="<?php echo site_url() ?>/add-contenu-post">
            <div class="form-group">
                <!-- <label for="dateajout">Dateajout:</label> -->

                <!-- <textarea  class="form-control" id="dateajout" name="dateajout"></textarea> -->
            </div>

            <div class="form-group">
                <label for="titre">Titre:</label>
                <input type="text" class="form-control" id="titre" name="title">
            </div>
            <div class="form-group">
                <label for="texte">Texte:</label>
                <textarea class="form-control" id="texte" name="texte"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

</body>

</html>