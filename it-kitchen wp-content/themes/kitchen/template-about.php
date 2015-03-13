<?php
/*
Template Name: about
*/
?>
<?php get_header(); ?>
    <!-- Content -->
<div class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="container">
            <?php the_content(); ?>
            
        </div>
    <?php endwhile; ?>
        <!-- post navigation -->
    <?php else: ?>
        <!-- no posts found -->
    <?php endif; ?>
</div>
    <!-- End Content -->
<?php get_footer(); ?>