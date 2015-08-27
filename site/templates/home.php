<?php snippet('header') ?>

		<?php $img = $page->image($page->mainpic()); ?>
        <section class="intro" style="background-image: url('<?php echo $img->url(); ?>');">
          <div class="full">
            <div class="sixth hold">
              <a href="#" class="logo">Oslo<br/>Design<br/>Fair</a>
            </div>
            <div class="sixth hold">
              <p class="details">28.01<span>&rarr;</span>31.01,<br/>2016. Norges<br/>Varemesse.</p>
            </div>
            <div class="burger hold">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>

          <div class="full hero hold">
            <h1><?php echo $page->maintext(); ?></h1>
            <a href="#" class="more">Les mer <span>&darr;</span></a>
          </div>

        </section>


        <section class="about scroll-section" id="om">
          <div class="full text">
            <div class="half anim">
              <h2>Om Oslo<br/>Design Fair</h2>
            </div>

            <div class="half anim">
            	<?php echo $page->about()->kirbytext(); ?>  
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
                <img src="<?php echo $img->url(); ?>" alt="Some image">
              </picture>

            </div>

            
            <?php $img = $page->image($page->aboutpic3());
            $small = thumb($page->image($page->aboutpic1()), array('width' => 480));
            $medium = thumb($page->image($page->aboutpic1()), array('width' => 900)); ?>
            <picture>
              <source media="(max-width: 480px)" srcset="<?php echo $small->url(); ?> 1x, <?php echo $medium->url(); ?> 2x">
              <source media="(max-width: 900px)" srcset="<?php echo $medium->url(); ?>">
              <source media="(max-width: 1200px)" srcset="<?php echo $img->url(); ?>">
              <img class="anim" src="<?php echo $img->url(); ?>" alt="Some image">
            </picture>

          </div>

        </section>


        <section class="news scroll-section" id="nyheter">
          <div class="full anim">
            <h2>Siste nyheter</h2>
          </div>
          <div class="full">

            <?php snippet('news') ?>
             
          </div>
        </section>


        <section class="areas scroll-section" id="satningsomrader">
          <div class="full anim">
            <h2>Satsningsområder</h2>
          </div>
          <div class="full">

            <?php snippet('areas') ?>

          </div>
        </section>


        <section class="exhibitor scroll-section"  id="bli-utstiller">
          <div class="full anim">
            <h2>Bli utstiller</h2>
          </div>
          <div class="full anim">
            <div class="exhibit">
              <div class="info">
                <h3><?php echo $page->becometext(); ?></h3>
                <a href="<?php echo $page->becomelink(); ?>" target="_blank" class="become">Bli utstiller <span>&rarr;</span></a>
              </div>
              <div class="image">


                <picture>
                <?php $become = $page->image($page->becomepic());
                $small = thumb($page->image($page->becomepic()), array('width' => 480));
                $medium = thumb($page->image($page->becomepic()), array('width' => 900)); ?>
                  <source media="(max-width: 480px)" srcset="<?php echo $small->url(); ?> 1x, <?php echo $medium->url(); ?> 2x">
                  <source media="(max-width: 800px)" srcset="<?php echo $medium->url(); ?>">
                  <source media="(max-width: 1200px)" srcset="<?php echo $become->url(); ?>">
                  <img src="<?php echo $become->url() ?>" alt="">
                </picture>

              </div>
            </div>
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
                <a href="tel:<?php echo $person["phone"] ?>"><?php echo $person["phone"] ?></a> 
                <a href="mailto:<?php echo $person["email"] ?>"><?php echo $person["email"] ?></a>
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

