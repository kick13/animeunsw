<?php get_header(); ?>

<div id="hero">
	<div class="background">
	<div class="wrap">
		<div class="intro">
			<h1>おはよう！</h1>
			<p>
				Welcome to the home of UNSW's love of
				<span>anime, manga and more on the web!</span>
			</p>
		</div>
		<div class="cta">
			<a class="about" href="#">About us &raquo;</a>
			<a class="join" href="#">Join us &raquo;</a>
		</div>
		<div class="events">
			<div class="content">
				<h1>What's happening?</h1>
				<p>Coming soon! Until then, check out our
				<a href="https://www.facebook.com/groups/AnimeUNSWevents/">Facebook events group</a>
				for the latest!</p>
				<!--<h2><a href="#">Matsuri in Sydney &raquo;</a></h2>
				<p>13th December, 10am-6pm <span>Darling Harbour</span></p>
				<h2><a href="#">Weekly Sessions &raquo;</a></h2>
				<p>It's summer holidays! We'll be back for our weekly seshes next sem!</p>-->
			</div>
		</div>
	</div>
	</div>
</div>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

					<header class="article-header">

						<p class="byline entry-meta vcard">
							<?php printf( __( '%1$s %2$s', 'bonestheme' ),
								/* the time the post was published */
								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
								/* the author of the post */
								'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
							); ?>

							<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

						</p>

					</header>

					<section class="entry-content cf">
						<?php the_post_thumbnail('aunsw-thumb-800'); ?>
						<?php the_excerpt(); ?>
					</section>

			</article>

		<?php endwhile; ?>

		<?php bones_page_navi(); ?>

		<?php else : ?>

			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>

		<?php endif; ?>


		</main>

		<?php get_sidebar(); ?>

	</div>

</div>


<?php get_footer(); ?>
