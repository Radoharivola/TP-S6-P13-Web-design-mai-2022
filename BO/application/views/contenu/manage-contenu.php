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
        <li class="active"><a href="<?php echo site_url(); ?>manage-contenu">Gérer Contenu</a></li>
        <li><a href="<?php echo site_url(); ?>add-contenu">Ajouter Contenu</a></li>
        <li><a href="<?php echo base_url(); ?>loginController/deco">Se déconnecter</a></li>

      </ul>
    </div>
  </nav>
  <div class="container">
    <h2>Gérer Contenu</h2>
    <?php if ($this->session->flashdata('success')) { ?>
      <div class="alert alert-success">
        <strong><span class="glyphicon glyphicon-ok"></span> <?php echo $this->session->flashdata('success'); ?></strong>
      </div>
    <?php } ?>

    <?php if (!empty($contenus)) { ?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>SL No</th>
            <th>date ajout</th>
            <th>titre</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
          foreach ($contenus as $contenu) { ?>
            <tr>
              <td> <?php echo $i; ?> </td>
              <td> <a href="<?php echo site_url() ?>view-contenu/<?php echo $contenu->id ?>"> <?php echo $contenu->dateajout ?> </a> </td>
              <td> <a href="<?php echo site_url() ?>view-contenu/<?php echo $contenu->id ?>"> <?php echo $contenu->title ?> </a> </td>

              <td>
                <!-- <a href="<?php echo site_url() ?>change-status-contenu/<?php echo $contenu->id ?>" > <?php if ($contenu->status == 0) {
                                                                                                            echo "Activate";
                                                                                                          } else {
                                                                                                            echo "Deactivate";
                                                                                                          } ?></a> -->
                <a href="<?php echo site_url() ?>edit-contenu/<?php echo $contenu->id ?>">Edit</a>
                <a href="<?php echo site_url() ?>delete-contenu/<?php echo $contenu->id ?>" onclick="return confirm('are you sure to delete')">Delete</a>
              </td>

            </tr>
          <?php $i++;
          } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <div class="alert alert-info" role="alert">
        <strong>No Contenus Found!</strong>
      </div>
    <?php } ?>
  </div>

</body>

</html>