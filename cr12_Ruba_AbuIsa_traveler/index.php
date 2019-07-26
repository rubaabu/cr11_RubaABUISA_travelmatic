<?php get_header(); ?>
<div class="col-sm-8 blog-main">

         <?php if(have_posts()) :  ?>  <!--if there are any posts-->
            <?php while(have_posts()) : the_post(); ?><!--while there are posts, show the posts-->

          <div class="blog-post">
           <h2 class="blog-post-title">
             <a href="<?php the_permalink(); ?>"> <!--retrieves URL for the permalink-->
              <?php the_title(); ?> </h2></a><!--retrieves blog title-->
            <p class="blog-post-meta"><?php the_time('F j, Y g:i a'); ?><!--retrieves date blog entry was created-->
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p><!--retrieves author of blog entry-->

            <?php the_content(); ?><!--retrieves content-->

          <?php endwhile; ?> <!--end the while loop-->

            <?php else : ?> <!--if there are no posts-->
              <p><?php__('No Posts Found'); ?></p>
           <?php endif; ?><!--endif-->


<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php
      if(is_active_sidebar('sidebar')):
     dynamic_sidebar('sidebar');
     endif;  
?>

          </div><!-- /.blog-post -->
<?php get_footer();?>
  