<?php snippet('header') ?>


        <section class="intro inverse">
          <div class="full">
            <div class="sixth hold">
              <a href="#" class="logo">Oslo<br/>Design<br/>Fair</a>
            </div>
            <div class="sixth hold">
              <!-- <p class="details">28.01<span>&rarr;</span>31.01,<br/>2016. Norges<br/>Varemesse.</p> -->
            </div>
            <div class="burger hold">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>

        </section>

        <section class="article">
          <div class="full hold">
            <div class="title">
                <h1><?php echo $page->title()->html() ?></h1>
                <span class="date"><?php echo $page->entrydate()->html() ?></span>
            </div>
          </div>

          <div class="full hold anim">
            <div class="text">
    		      <?php echo $page->text()->kirbytext() ?>
    		      <a href="#" class="front"><span>&larr;</span> Til Forsiden</a>
            </div>
          </div>

        </section>

      

<?php snippet('contact') ?>


<?php snippet('footer') ?>