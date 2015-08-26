            <?php foreach(page('news')->children()->visible()->limit(4) as $entry): ?>
            <div class="half profile anim">
              <a href="<?php echo $entry->url() ?>">

                <picture>
                <?php if($image = $entry->images()->sortBy('sort', 'asc')->first()): ?>
                  <source media="(max-width: 480px)" srcset="http://placehold.it/480x480/f2f2f2 1x, http://placehold.it/760x700/f2f2f2 2x">
                  <source media="(max-width: 1200px)" srcset="http://placehold.it/760x700/f2f2f2">
                  <img src="<?php echo $image->url() ?>" alt="<?php echo $entry->title()->html() ?>">
                <?php endif ?>
                </picture>

                <div class="info">
                  <p><?php echo $entry->title()->html() ?></p>
                  <span href="#" class="more">Les mer</span>
                </div>
              </a>
            </div>
            <?php endforeach ?>
           
