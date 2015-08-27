            <?php foreach(page('nyheter')->children()->visible()->limit(4) as $entry): ?>
            <div class="half profile anim">
              <a href="<?php echo $entry->url() ?>">

                <picture>
                 <?php $i = $entry->image($entry->thumbnail());
                  $small = thumb($i, array('width' => 400));
                  $medium = thumb($i, array('width' => 900));
                 ?>
                  <source media="(max-width: 480px)" srcset="<?php echo $small->url() ?> 1x, <?php echo $medium->url() ?> 2x">
                  <source media="(max-width: 900px)" srcset="<?php echo $medium->url() ?> 1x, <?php echo $i->url() ?> 2x">
                  <source media="(max-width: 1200px)" srcset="<?php echo $i->url() ?>">
                 
                  <img src="<?php echo $i->url() ?>" alt="<?php echo $entry->title()->html() ?>">
                </picture>

                <div class="info">
                  <p><?php echo $entry->title()->html() ?></p>
                  <span href="#" class="more">Les mer</span>
                </div>
              </a>
            </div>
            <?php endforeach ?>
           
