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
			$small = thumb($page->image($page->aboutpic1()), array('width' => 480));
			?>
              <picture>
                <!-- <source media="(max-width: 480px)"
                srcset="<?php echo $small->url(); ?> 1x, <?php echo $img->url(); ?> 2x">
                <source media="(max-width: 1200px)" srcset="<?php echo $img->url(); ?>"> -->
                <img src="<?php echo $img->url(); ?>" alt="">
              </picture>

            </div>

            <div class="half anim">
      			<?php $img = $page->image($page->aboutpic2()); ?>
              <picture>
                <!-- <source media="(max-width: 480px)" srcset="http://placehold.it/480x480/f2f2f2 1x, <?php echo $img->url(); ?> 2x">
                <source media="(max-width: 1200px)" srcset="<?php echo $img->url(); ?>"> -->
                <img src="<?php echo $img->url(); ?>" alt="Some image">
              </picture>

            </div>

            
            <?php $img = $page->image($page->aboutpic3()); ?>
            <picture>
              <!-- <source media="(max-width: 480px)" srcset="http://placehold.it/480x480/f2f2f2 1x, http://placehold.it/900x900/f2f2f2 2x">
              <source media="(max-width: 900px)" srcset="http://placehold.it/900x900/f2f2f2">
              <source media="(max-width: 1200px)" srcset="http://placehold.it/1600x855/f2f2f2"> -->
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
            <div class="third anim">
              <a href="#">

                <picture>
                  <source media="(max-width: 480px)" srcset="http://placehold.it/320x320/f2f2f2 1x, http://placehold.it/480x480/f2f2f2 2x">
                  <source media="(max-width: 1200px)" srcset="http://placehold.it/480x480/f2f2f2">
                  <img src="http://placehold.it/480x480/f2f2f2" alt="Some image">
                </picture>

                <div class="info">
                  <p>Tendenser: Trend og tendenser innenfor interiør med mer</p>
                  <span href="#" class="more">Les mer</span>
                </div>
              </a>
            </div>

            <div class="third anim">
              <a href="#">
                
                <picture>
                  <source media="(max-width: 480px)" srcset="http://placehold.it/320x320/f2f2f2 1x, http://placehold.it/480x480/f2f2f2 2x">
                  <source media="(max-width: 1200px)" srcset="http://placehold.it/480x480/f2f2f2">
                  <img src="http://placehold.it/480x480/f2f2f2" alt="Some image">
                </picture>

                <div class="info">
                  <p>Tendenser: Trend og tendenser innenfor interiør med mer</p>
                  <span href="#" class="more">Les mer</span>
                </div>
              </a>
            </div>

            <div class="third anim">
              <a href="#">
                
                <picture>
                  <source media="(max-width: 480px)" srcset="http://placehold.it/320x320/f2f2f2 1x, http://placehold.it/480x480/f2f2f2 2x">
                  <source media="(max-width: 1200px)" srcset="http://placehold.it/480x480/f2f2f2">
                  <img src="http://placehold.it/480x480/f2f2f2" alt="Some image">
                </picture>

                <div class="info">
                  <p>Tendenser: Trend og tendenser innenfor interiør med mer</p>
                  <span href="#" class="more">Les mer</span>
                </div>
              </a>
            </div>
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
                <a href="<?php echo $page->becomelink(); ?>" class="become">Bli utstiller <span>&rarr;</span></a>
              </div>
              <div class="image">


                <picture>
                  <!-- <source media="(max-width: 480px)" srcset="http://placehold.it/480x480/f2f2f2 1x, http://placehold.it/700x700/f2f2f2 2x">
                  <source media="(max-width: 1200px)" srcset="http://placehold.it/800x760/f2f2f2"> -->
                  
                  <?php 

                  $become = $page->image($page->becomepic()); ?>
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

              <section class="contact scroll-section" id="kontaktinfo">
          <div class="full">
            <div class="half anim">
              <h2>Besøks- og kontaktinformasjon</h2>
            </div>

            <div class="half">
              <div class="third anim">
                <ul>
                  <li>Oslo<br/>Design Fair</li>
                  <li>Postboks 75, 2001 Lillestrøm</li>
                  <li>+47 66 93 91 00</li>
                  <li>post@oslodesignfair.no</li>
                </ul>
              </div>
              <div class="third anim">
                <ul>
                  <li>Norges<br/>Varemesse</li>
                  <li>Postboks 75, 2001 Lillestrøm</li>
                  <li>+47 66 93 91 00</li>
                  <li>nv@messe.no</li>
                </ul>
              </div>

              <div class="third anim">
                <ul>
                  <li>Følg oss<br/><br/></li>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">#oslodesignfair</a></li>
                  <li><a href="#">@oslodesignfair</a></li>
                </ul>
              </div>            
              
              <div class="full anim">
                <p>Meld deg på<br/>vårt nyhetsbrev</p>
              </div>
              
              <div class="full">
                <input type="text" placeholder="Skriv inn e-post">
                <input type="submit" value="Send &rarr;">
              </div>
            </div>
          </div>

          <div class="fluid map anim">
            <div id="map">
            </div>
          </div>

        </section>

              <footer>
          <div class="full">
            <div class="third">
              <p>Oslo design fair<br/>
              2015 &copy;</p>
            </div>

            <div class="third">
              <ul>
                <li>Design: <a href="http://bielkeyang.no/" target="_blank">Bielke&amp;Yang</a></li>
                <li>Kode: <a href="http://workbypost.com" target="_blank">Post</a></li>
              </ul>
            </div>

            <div class="third">
              <a href="#" class="totop">
                <span>&uarr;</span>
              </a>
            </div>
          </div>
        </footer>


<?php snippet('footer') ?>