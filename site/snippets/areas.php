            <?php foreach(page('satsningsomraader')->children()->visible()->limit(3) as $area): ?>
            <div class="third anim">
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