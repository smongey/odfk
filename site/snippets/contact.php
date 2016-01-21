        <section class="contact scroll-section" id="kontaktinfo">
          <div class="full">
            <div class="half anim">
              <h2><?php echo l::get('title-visitor') ?></h2>
            </div>

            <div class="half">
              <div class="third anim">
                <ul>
                  <li>Oslo<br/>Design Fair</li>
                  <li><?php echo l::get('trade-fairs-address'); ?></li>
                  <!-- <li>+47 66 93 91 00</li> -->
                  <li><a href="mailto:post@oslodesignfair.no">Send <?php echo l::get('email'); ?></a></li>
                </ul>
              </div>
              <div class="third anim">
                <ul>
                  <li><?php echo l::get('trade-fairs'); ?></li>
                  <li><?php echo l::get('trade-fairs-address'); ?></li>
                  <!-- <li>+47 66 93 91 00</li> -->
                  <li><a href="mailto:sl@messe.no">Send <?php echo l::get('email'); ?></a></li>
                </ul>
              </div>

              <div class="third anim">
                <ul>
                  <li><?php echo l::get('follow'); ?><br/><br/></li>
                  <li><a href="http://facebook.com/oslo-design-fair" target="_blank">Facebook</a></li>
                  <li><a href="https://instagram.com/oslodesignfair" target="_blank">Instagram</a></li>
                  <li>#oslodesignfair</li>
                  <li>@oslodesignfair</li>
                </ul>
              </div>            
              
              <div class="full anim">
                <p><?php echo l::get('newsletter') ?></p>
              </div>
              
              <div class="full">
                <!-- <form id="mailinglist" action="" method="post"> -->
                  <input type="text" class="email" name="email" placeholder="<?php echo l::get('enter-email') ?>">
                  <input type="submit" class="send" value="Send &rarr;">
                <!-- </form> -->
                <div class="notice" style="display: none;">
                  <p><?php echo l::get('email-thanks') ?></p>
                </div>

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
              <?php echo date("Y"); ?> &copy;</p>
            </div>

            <div class="third">
              <ul>
                <li>Design: <a href="http://bielkeyang.no/" target="_blank">Bielke&amp;Yang</a></li>
                <li><?php echo l::get('code') ?>: <a href="http://workbypost.com" target="_blank">Post</a></li>
              </ul>
            </div>

            <div class="third">
              <a href="#" class="totop">
                <span>&uarr;</span>
              </a>
            </div>
          </div>
        </footer>