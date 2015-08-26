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

<!--           <div class="full hold">

            <picture>
              <source media="(max-width: 480px)"
              srcset="http://placehold.it/480x480/f2f2f2 1x, http://placehold.it/900x900/ffeeee 2x">
              <source media="(max-width: 900px)"
              srcset="http://placehold.it/900x900/f2f2f2">
              <source media="(max-width: 1200px)"
              srcset="http://placehold.it/1400x800/f2f2f2">
              <img src="http://placehold.it/1400x800/f2f2f2"
              alt="Some image">
            </picture>

          </div> -->

          <div class="full hold anim">
            <div class="text">
		      <?php echo $page->text()->kirbytext() ?>
		      <a href="#" class="front"><span>&larr;</span> Til Forsiden</a>
            </div>
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
                  <li>odf@messe.no</li>
                </ul>
              </div>
              <div class="third anim">
                <ul>
                  <li>Norges<br/>Varemesse</li>
                  <li>Postboks 75, 2001 Lillestrøm</li>
                  <li>+47 66 93 91 00</li>
                  <li>odf@messe.no</li>
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