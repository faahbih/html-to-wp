<?php get_header(); ?>


	<?php 
    if( have_posts()){
      while (have_posts()){
        the_post();
        ?>
        
        <div class="single-noticia">
          <?php the_post_thumbnail(); ?>
        </div>

        <div class="container">
          <h2><?php the_title(); ?></h2>
          <div><?php the_content();?></div>
        </div>


        <?php    
      }
    }  
    ?>


<?php get_footer(); ?>