<?php while (have_posts()): ?>
  <?php the_post(); ?>
  <h1 class="entry-title"><?php the_title(); ?></h1>

  <div class="entry-content"><?php the_content(); ?></div>
<?php endwhile; ?>