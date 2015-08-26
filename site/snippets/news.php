            <?php foreach(page('news')->children()->visible()->limit(4) as $entry): ?>
            <div class="half profile anim">
              <a href="<?php echo $entry->url() ?>">

                <picture>
                  <source media="(max-width: 480px)" srcset="http://placehold.it/480x480/f2f2f2 1x, http://placehold.it/760x700/f2f2f2 2x">
                  <source media="(max-width: 1200px)" srcset="http://placehold.it/760x700/f2f2f2">
                  <?php $i = $entry->image($entry->thumbnail()) ?>
                  <img src="<?php echo $i->url() ?>" alt="<?php echo $entry->title()->html() ?>">
                </picture>

                <div class="info">
                  <p><?php echo $entry->title()->html() ?></p>
                  <span href="#" class="more">Les mer</span>
                </div>
              </a>
            </div>
            <?php endforeach ?>
           
