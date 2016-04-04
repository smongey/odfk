<?php snippet('header') ?>
		<?php $img = $page->image($page->mainpic()); ?>
        <section class="intro" style="background-image: url('<?php echo $img->url(); ?>');">
          <div class="full">
            <div class="sixth hold">
              <a href="#" class="logo">Oslo<br/>Design<br/>Fair</a>
            </div>
            <div class="sixth hold">
              <p class="details">01.09<span>&rarr;</span>04.09,<br/>2016. <?php echo l::get('trade-fairs'); ?></p>
            </div>

            <div class="sixth links hold">
              <p class="details">
              <a href="<?php echo l::get('visitors-link') ?>" target="_blank"><?php echo l::get('visitors') ?></a><br/>
              <a href="<?php echo l::get('exhibitors-link') ?>" target="_blank"><?php echo l::get('exhibitors') ?></a><br/>
              <a href="<?php echo l::get('press-link') ?>" target="_blank"><?php echo l::get('press') ?></a></p>
            </div>
            
            <div class="multi hold">
              <ul class="lang">
                <li><a href="<?php echo url() ?>/" <?php if (l::get('more') === 'Les Mer') { echo 'class="active"'; }; ?>>No</a></li>
                <li><a href="<?php echo url() ?>/en/" <?php if (l::get('more') === 'Read More') { echo 'class="active"'; }; ?>>En</a></li>
              </ul>
            </div>
            
            <div class="burger hold">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>

          <div class="full hero hold">
            <h1><?php echo $page->maintext(); ?></h1>
            <a href="#" class="more"><?php echo l::get('more') ?> <span>&darr;</span></a>
          </div>

        </section>

        <section class="about scroll-section" id="om">
          <div class="full text">
            <div class="half anim">
              <h2><?php echo l::get('title-about') ?></h2>
            </div>

            <div class="half anim">
            	<?php echo $page->about()->kirbytext(); ?> 
              <a href="<?php echo url() ?>/<?php if (l::get('more') === 'Les Mer') { echo 'om-odf'; } else { echo 'en/about'; }; ?>" class="more"><?php echo l::get('more') ?> <span>&rarr;</span></a>
            </div>
          
          </div>
          <div class="full images">
            <div class="half anim">
      			<?php $img = $page->image($page->aboutpic1());
      			$small = thumb($page->image($page->aboutpic1()), array('width' => 480)); ?>
              <picture>
                <source media="(max-width: 480px)"
                srcset="<?php echo $small->url(); ?> 1x, <?php echo $img->url(); ?> 2x">
                <source media="(max-width: 1200px)" srcset="<?php echo $img->url(); ?>">
                <img src="<?php echo $img->url(); ?>" alt="">
              </picture>

            </div>

            <div class="half anim">
        			<?php $img = $page->image($page->aboutpic2());
            $small = thumb($page->image($page->aboutpic2()), array('width' => 480)); ?>
              <picture>
                <source media="(max-width: 480px)" srcset="<?php echo $small->url(); ?> 1x, <?php echo $img->url(); ?> 2x">
                <source media="(max-width: 1200px)" srcset="<?php echo $img->url(); ?>">
                <img src="<?php echo $img->url(); ?>">
              </picture>

            </div>

            
            <?php $img = $page->image($page->aboutpic3());
            $small = thumb($page->image($page->aboutpic3()), array('width' => 480,'height' => 480, 'crop' => true));
            $medium = thumb($page->image($page->aboutpic3()), array('width' => 900,'height' => 900, 'crop' => true)); ?>
            <picture>
              <source media="(max-width: 480px)" srcset="<?php echo $small->url(); ?> 1x, <?php echo $medium->url(); ?> 2x">
              <source media="(max-width: 900px)" srcset="<?php echo $medium->url(); ?>">
              <source media="(max-width: 1200px)" srcset="<?php echo $img->url(); ?>">
              <img class="anim" src="<?php echo $img->url(); ?>">
            </picture>

          </div>

        </section>


        <section class="news scroll-section" id="nyheter">
          <div class="full anim">
            <h2><?php echo l::get('title-news') ?></h2>
          </div>
          <div class="full">

            <?php snippet('news') ?>
             
          </div>
        </section>


        <section class="areas scroll-section" id="satningsomrader">
          <div class="full anim">
            <h2><?php echo l::get('title-areas') ?></h2>
          </div>
          <div class="full">

            <?php snippet('areas') ?>

          </div>
        </section>

        <section class="areas scroll-section" id="info">
          <div class="full anim">
            <a href="<?php echo url() ?>/info">
              <h2>
                <?php echo l::get('nav-info') ?>
              </h2>
            </a>
          </div>
          <div class="full">

            <?php snippet('info') ?>

          </div>
        </section>

        <section class="team scroll-section" id="team">
          
          <div class="full anim">
            <h2>Team</h2>
          </div>

          <div class="full">

          <?php $team = yaml($page->team()); ?>
          <?php foreach($team as $person): ?>

            <div class="third anim">
              <div class="info">
                <p><?php echo $person["name"] ?><br/>
                <?php echo $person["role"] ?></p>
                <a href="tel:<?php echo $person["phone"] ?>"><?php echo $person["phone"] ?></a><br/> 
                <script>
                var email = "<?php echo $person['email']; ?>";
                document.write("<a href='" + email + '@' + 'oslodesignfair.no' + "'>" + email + '@' + 'oslodesignfair.no' + "</a>");
                </script>
                </p>
              </div>
              <div class="image">
                <img src="<?php echo $page->image($person["profile"])->url() ?>" alt="">
              </div>
            </div>
            
          <?php endforeach; ?>

          </div>
        </section>

<?php snippet('contact') ?>


<?php snippet('footer') ?>

