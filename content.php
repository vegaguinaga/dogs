  <article class="Content">
    <h1>Creación de Temas</h1>
    <?php if(have_posts()): while(have_posts()):the_post();?>
      <article>
      <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title(); ?>">
      <h2>
      <a href="<?php the_permalink();?>"><?php the_title();?></a>
      </h2>
      <?php the_excerpt(); ?>
      <p><?php the_category(' , '); ?></p>
      <p><?php the_tags(); ?></p>
      <p>
      <?php the_time(); ?>
      <br>
      <?php the_time('d-M-Y'); ?>
      <br>
      <?php the_time(get_option('date_format'));?>
      </p>
      <p>
      <?php the_author(); ?>
      <?php the_author_posts_link(); ?>
      </p>
      <div class="the-content">
        <?php //the_content(); ?>
      </div>
      </article>
      <hr>
    <?php endwhile; else:?>
      <p>El contenido solicitado no existe</p>
    <?php endif;?>
  </article>
  <section class="Pagination">
    <?php //previous_post_link();?>
    <?php //next_post_link();?>
    <?php echo paginate_links(); ?>
  </section>