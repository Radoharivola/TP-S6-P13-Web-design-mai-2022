<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $title; ?>" />
  <meta name="author" content="me">

  <title><?php echo $title; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3"><?php echo $h1upper; ?></span>
    <span class="site-heading-lower"><?php echo $h1lower; ?></span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <?php if (isset($accueil)) { ?><li class="nav-item active px-lg-4"><?php }else{ ?><li class="nav-item px-lg-4"><?php } ?>
            <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url(); ?>baseController/index">Accueil</a>
            </li>
            <?php if (isset($articles)) { ?><li class="nav-item active px-lg-4"><?php }else{ ?><li class="nav-item px-lg-4"><?php } ?>
              <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url(); ?>baseController/articles">Articles</a>
              </li>
              <?php if (isset($about)) { ?><li class="nav-item active px-lg-4"><?php }else{ ?><li class="nav-item px-lg-4"><?php } ?>
                <a class="nav-link text-uppercase text-expanded" href="<?php echo base_url(); ?>baseController/about">A propos</a>
                </li>
                <!-- <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.html">Store</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <?php if (isset($link)) include($link . '.php') ?>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 202</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>