<?php get_header(); ?>
<h1>Внимание! Сайт работает в режиме разработки</h1>
<h2>Если хотите внести пожертовавние то перейдите по ссыллке: <a href="/pervyj-sbor-sredstv/">Пожертвовать</a></h2>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>
<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>