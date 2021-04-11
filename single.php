<?php get_header(); ?>
<div id="contents">
<div class="container">
<h2><?php the_title(); ?></h2>
<div class="article__contents">
<div class="">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php if(have_posts()): while(have_posts()): the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
<?php get_template_part( 'template/single-sns.php' ); ?>
</div>
<?php get_footer(); ?>