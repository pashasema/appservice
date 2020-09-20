<?php get_header(); 
$id=get_the_ID();?>

<div class="container single-post-container">

	<main>
		<article class="custom-page" id="post-<?php echo esc_attr($id); ?>">

			<h1><?php echo get_the_title(); ?></h1>

			<div class="row">
				<?php 
				$thUrl = get_the_post_thumbnail_url();
				if($thUrl):?>

					<div class="col-md-6">
						<img src="<?php echo $thUrl; ?>" alt="<?php echo get_the_title(); ?>">
					</div><!-- .col -->

				<? endif; ?>
				<div class="col-md-6">

					<div class="custom-page__content">
						<?php echo get_the_content(); ?>
					</div>

					<?php 
					do_action('tax_hook', array($id,'genre','Жанр')); 
					do_action('tax_hook', array($id,'author','Автор')); 
					do_action('acf_hook', array('price','Стоимость')); 
					do_action('acf_hook', array('qty-of-pages','Количество страниц'));
					do_action('acf_hook', array('release-date','Дата выхода')); 
					?>

				</div><!-- .col -->
			</div><!-- .row -->

		</article><!-- #post -->
	</main>

</div><!-- .container -->

<?php get_footer(); ?>