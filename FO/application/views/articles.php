<?php foreach ($all as $article) { ?>
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper"><?php echo $article->dateajout; ?></span>
              <span class="section-heading-lower"><?php echo word_limiter($article->title,3); ?></span>
            </h2>
          </div>
        </div>
        <!-- <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-01.jpg" alt=""> -->
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0"><?php echo word_limiter($article->texte,50); ?> <a href="<?php echo base_url(); ?>article/<?php echo slugify($article->title,'-') ?>/<?php echo $article->id; ?>">Lire la suite</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>