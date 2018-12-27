<?php get_header(); ?>

<div id="container">
<div id="contents">

<!-- company -->
<div id="company" class="box">
    <div class="section-header">
        <h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_company.gif" width="115" height="23"
        alt="COMPANY" /></h2>
    </div>
    <div class="box-inner">
        <?php if(have_posts()): while(have_posts()): the_post();
        ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
<?php endwhile; endif; ?>
    </div>
</div>
<!-- company -->


<!-- news -->
<div id="news" class="box">

<div class="section-header">
    <h2><img src="<?php bloginfo('template_url'); ?>/images/ttl_news.gif" width="80" height="23" alt="NEWS" />
</h2>
<p><a href="<?php bloginfo('url'); ?>/news/">一覧をみる</a></p>
</div>

<?php query_posts('category_name=news&posts_per_page=5'); ?>
<?php if(have_posts()): ?>
<dl>
    <?php while(have_posts()): the_post(); ?>
    <dt><?php the_time('Y/m/d'); ?></dt>

    <?php
    $cats = get_the_category();
    $cats= $cats[0]; 
    ?>

    <dd class="<?php echo $cats->category_nicename; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_excerpt(); ?></dd>
<?php endwhile; ?>
</dl>
<?php endif; wp_reset_query(); ?>
</div>
<!-- news -->

</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

