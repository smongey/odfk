    <header class="hidden loading">
      <div class="main full">
        <a href="<?php echo url() ?>" class="logo">ODF</a>
      </div>
      <div class="burger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>



    <nav class="menu">
      <ul class="lang">
        <li><a href="<?php echo url() ?>/" <?php if (l::get('more') === 'Les Mer') { echo 'class="active"'; }; ?>>No</a></li>
        <li><a href="<?php echo url() ?>/en/" <?php if (l::get('more') === 'Read More') { echo 'class="active"'; }; ?>>En</a></li>
      </ul>
      <ul class="nav">
        <li><a href="#om" class="active"><?php echo l::get('nav-about'); ?></a></li>
        <li><a href="#nyheter"><?php echo l::get('nav-news'); ?></a></li>
        <li><a href="#satningsomrader"><?php echo l::get('nav-areas'); ?></a></li>
        <li><a href="#bli-utstiller"><?php echo l::get('nav-become'); ?></a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#kontaktinfo"><?php echo l::get('nav-contact'); ?></a></li>
      </ul>
      <div class="close">
        <span></span>
        <span></span>
      </div>  
    </nav>


    <div class="cookiemonster loading">
      <div class="full">
        <p><?php echo l::get('cookie'); ?></p>
        <a href="#" class="close">&times;</a>
      </div>
    </div>


    <div id="preloader" class="loading">
      <picture>
        <img src="<?php echo url() ?>/assets/images/loader.png">
      </picture>
    </div>