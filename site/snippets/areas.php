            <?php foreach(page('areas')->children()->visible()->limit(3) as $area): ?>
            <div class="third anim">
              <a href="<?php echo $area->url() ?>">

                <picture>
                 <!--  <source media="(max-width: 480px)" srcset="http://placehold.it/320x320/f2f2f2 1x, http://placehold.it/480x480/f2f2f2 2x">
                  <source media="(max-width: 1200px)" srcset="http://placehold.it/480x480/f2f2f2"> -->
                  <?php $i = $area->image($area->thumbnail()) ?>
                  <img src="<?php echo $i->url() ?>" alt="<?php echo $area->title()->html() ?>">
                </picture>

                <div class="info">
                  <p><?php echo $area->title()->html() ?></p>
                  <span href="#" class="more">Les mer</span>
                </div>
              </a>
            </div>
            <?php endforeach ?>
           