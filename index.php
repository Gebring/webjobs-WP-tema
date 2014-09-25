<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Webjobs
 * @since Webjobs 1.0
 */

//här gör Johan sitt shit!!!!!!!!!!!!
get_header();?> <!-- **** OBS!!! Page-wrap börjar i menu.php! ****** -->
    <div class="presentationWrap">
      <?php dynamic_sidebar('presentation-sidebar'); ?>
    </div> <!-- end presentationWrap -->
    <div class="latestAdsWrap">
      <?php
      if(have_posts()){
        query_posts('showposts=5');
        ?>
        <div id='mySwipe' class='swipe'>
          <div class='swipe-wrap'>
            
              <?php
              while ( have_posts() ) {
                the_post();
                ?>

                <div class="ads" >
                  <a href="<?php the_permalink() ?>" rel="bookmark">
                    <div class="titleFrame">
                      <p class="date"><?php the_date(); ?></p>
                    </div>
                    <h1 class="blogTitle"><?php the_title(); ?></h1>  
                    <p><?php the_content(); ?></p>
                  </a>  
                </div>

              <?php 
              }?>
            
          </div> <!-- end swipe-wrap -->
          <script>
            // pure JS
            var elem = document.getElementById('mySwipe');
            window.mySwipe = Swipe(elem, {
              auto: 4000,
            });
          </script>
        </div> <!-- end mySwipe -->
      <?php
      }else {
        echo "det finns inga inlägg";
      }
      ?>
    </div> <!-- end latestAdsWrap -->

  <a href="<?php echo get_permalink(82); ?>">
    <div class="allAds-wrap">
      <div class="headlineWrap inlineLink">
        <h5>Sök bland våra jobbannonser</h5>
      </div> <!-- end headlineWrap -->
      <div class="pinkSearchIcon inlineLink">
        <div class="img-wrap">
          <img class="arrows" src="<?php echo get_template_directory_uri(); ?>/img/arrowRight.png" />
        </div>
      </div> <!-- end pinkSearchIcon -->
    </div> <!-- end allAds-wrap -->
  </a>

  <input type="checkbox" class="createAd-check" id="createAd-check" />
  <nav class="createAd-nav" id="createAd-nav">
    <label for="createAd-check" class="toggle-menu">
      <p>Tillbaka</p>
    </label>
    <p class="createAd-text"> 
      <div id="form-main">
        <div id="form-div">
          <form class="form" id="form1">
            <p class="name">
              <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
            </p>
            <p class="email">
              <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
            </p>
            <p class="text">
              <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
            </p>
            <div class="submit">
              <input type="submit" value="SEND" id="button-blue"/>
              <div class="ease"></div> <!-- end ease -->
            </div> <!-- end submit -->
          </form>
        </div> <!-- end form-div -->
      </div><!-- end form-main -->
    </p>
  </nav>
  <div class="createAd-wrap">
    <label for="createAd-check" class="toggle-menu">
      <div class="greenAdIcon inlineLink">
        <div class="img-wrap">
          <img class="arrows" src="<?php echo get_template_directory_uri(); ?>/img/arrowLeft.png" />
        </div>
      </div> <!-- End greenAdIcon InlineLink -->
      <div class="headlineWrap inlineLink">
        <h5>Skapa jobbannons</h5>


      </div> <!-- end headlineWrap -->
    </label>
  </div> <!-- end createAd-Wrap -->
  <?php get_footer(); ?>










