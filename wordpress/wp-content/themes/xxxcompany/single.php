<?php get_header(); ?>

<div id="container">
<div id="contents">

<?php if(in_category('info')||in_category('seminar')) : ?>
<?php get_template_part('sql', 'news'); ?>

<?php else: ?>

<?php get_template_part('sql','products'); ?>

<?php endif; ?>

<!-- contents -->
</div>

<?php get_sidebar(); ?>

<!-- container -->
</div>

<?php get_footer(); ?>

