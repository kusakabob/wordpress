<?php get_header(); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <!-- 投稿した記事のタイトルを表示 -->
    <h2><?php the_title();?></h2>
    <!-- 投稿した記事の本文を表示 -->
    <?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
    <!-- なかった場合 -->
<?php endif; ?>

<!-- カスタムテンプレートsample.phpの読み込み -->
<?php get_template_part('sample'); ?>
<?php get_footer(); ?>

