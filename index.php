<?php get_header(); ?>
<!-- Header -->


<!--content--> 

<!--para post -->

<div class="container">

  <ul class="lista-noticias">

    <?php 
    if( have_posts()){
      while (have_posts()){
        the_post();
        ?>
        <li class="noticia">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content();?></div>
          </a>
        </li>

        <?php    
      }
    }  
    ?>
  </ul>
</div>


<!-- Footer -->
<?php get_footer(); ?>