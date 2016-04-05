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

        <section class="article info">
          <div class="full hold">
            <div class="title">
                <h1><?php echo $page->title()->html() ?></h1>
            </div>
          </div>
        </section>


        <section class="news" id="info">
          <div class="full">

            <?php foreach(page('info')->children()->visible()->limit(30) as $area): ?>
            <div class="third profile anim">
              <a href="<?php echo $area->url() ?>">

                <picture>
                  <?php $i = $area->image($area->thumbnail());
                  $small = thumb($i, array('width' => 400));
                  $medium = thumb($i, array('width' => 700));
                  ?>
                  <source media="(max-width: 480px)" srcset="<?php echo $small->url() ?> 1x, <?php echo $medium->url() ?> 2x">
                  <source media="(max-width: 900px)" srcset="<?php echo $medium->url() ?>">
                  <img src="<?php echo $i->url() ?>" alt="<?php echo $area->title()->html() ?>">
                </picture>

                <div class="info">
                  <p><?php echo $area->title()->html() ?></p>
                  <span href="#" class="more"><?php echo l::get('more') ?></span>
                </div>
              </a>
            </div>
            <?php endforeach ?>



          </div>
        </section>


<?php snippet('footer') ?>