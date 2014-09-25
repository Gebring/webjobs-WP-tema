
  <input type="checkbox" class="main-nav-check" id="main-nav-check" />
  <nav class="main-nav" id="main-nav">
  	<?php
  	wp_nav_menu(array('theme_location' => 'top_menu'));
  	?>	
  </nav>
  <div class="page-wrap">
    <div class="mobileWrap">
      <header class="main-header">
        <label for="main-nav-check" class="toggle-menu">
          ☰
        </label>
        <a href="http://localhost/webbjobb">
          <h1 id="main-headline">webjobs.se</h1>
        </a>
      </header>
    </div>
