<section class="page-section clearfix">
  <div class="container">
    <div class="intro">
      <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php echo base_url(); ?>assets/img/newIntro.jpg" title="Fonte des glaces" alt="Fonte des glaces">
      <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
          <!-- <span class="section-heading-upper">Alert</span> -->
          <span class="section-heading-lower">Fonte des glaces</span>
        </h2>
        <p class="mb-3">Selon une nouvelle étude, la hausse « rapide et imparable » du niveau de la mer due à la fonte des plateformes de glace et des glaciers ne pourra être évitée que si les nations s’unissent pour réduire leurs émissions. Et ce, rapidement.</p>
        <div class="intro-button mx-auto">
          <a class="btn btn-primary btn-xl" href="<?php echo base_url(); ?>articles/fonte-des-glaces/fonte-des-glaces">Lire article</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ml-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">Cause du réchauffement climatique</span>
            <!-- <span class="section-heading-lower">bnjk</span> -->
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo base_url(); ?>assets/img/newBanner.jpg" title="Cause réchauffement climatique" alt="Cause réchauffement climatique">
      <div class="product-item-description d-flex mr-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">Principalement, c’est la production d’énergie (électricité, chauffage) et de carburant pour les transports (principalement les voitures, mais aussi en partie l’aviation ou le transport maritime) qui causent le réchauffement climatique. Ensuite arrivent la gestion des territoires et notamment la déforestation, l’agriculture mais aussi l’élevage. Pour en savoir plus, voir : Les causes du réchauffement climatique.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section about-heading">
  <div class="container">
    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
    <div class="about-heading-content">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded p-5">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Comprendre le réchauffement climatique</span>
              <span class="section-heading-lower">Index:</span>
            </h2>
            <ul>
              <?php $count=0;foreach ($all as $article) { ?>
                <li><a href="<?php echo base_url(); ?>article/<?php echo slugify($article->title,'-'); ?>/<?php echo $article->id; ?>"><?php echo $article->title;?></a></li>
              <?php if(++$count ==3)break; } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>