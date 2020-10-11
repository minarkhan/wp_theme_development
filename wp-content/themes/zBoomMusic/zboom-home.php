<?php 
/*
Template Name: zboom-home
*/


 ?>


<?php get_header(  ); ?>

<?php if(is_single()) : ?>
<div class="well hidden-xs" id="sidebar">
	<h4 id="sidebarh4">Informacion:</h4>
	<i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a><br>
	<i class="fa fa-folder-open"></i> <?php the_category(','); ?><br>
	<i class="fa fa-comments" aria-hidden="true"></i> <?php comments_number( 'no responses', 'one response', '% responses' ); ?><br>
	<i class="fa fa-eye" aria-hidden="true"></i> <?php echo getPostViews(get_the_ID()); ?><br>
	<i class="fa fa-clock-o"></i> Publicado: <?php the_time('M j, Y'); ?><br>
	<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ultima edicion: <?php the_modified_date('F j, Y'); ?><br>
</div>
<?php endif; ?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
				<?php 
					$slider = new WP_Query(array('post_type'   => 'zboomslider',));


				while ($slider->have_posts()): $slider->the_post();
				?>
					<li>
						<?php the_post_thumbnail( ); ?>
					</li>

			<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
				<?php 

					$service = new WP_Query(array('post_type' => 'zboomservice'));
					while($service->have_posts()): $service->the_post();
				 ?>
				<div class="col-1-3">
					<div class="wrap-col box">
						<h2><?php the_title(); ?></h2>
						<p><?php echo wp_trim_words( get_the_content(), 10, ' More' ); ?></p>
						
					</div>
				</div>
				<?php endwhile; ?>
		</div>


		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
							<div class="heading"><h2>Latest Blog</h2></div>

						<?php 
							$blog_post = new WP_Query(array('post_type' => 'post', 'category_name' => 'blog'));
								while ($blog_post->have_posts()): $blog_post->the_post();
							 ?>
								<article class="row">
									<div class="col-1-3">
										<div class="wrap-col">
											<?php the_post_thumbnail(); ?>
											</div>
									</div>
									<div class="col-2-3">
										<div class="wrap-col">
											<h2><a href="#"><?php the_title(); ?></a></h2>
											<div class="info">By <?php the_author(); ?> on <?php the_date( ); ?> with <a href="#">01 Commnets</a></div>
											<p><?php the_content() ?> [...]</p>
										</div>
									</div>
								</article>
							<?php endwhile;	//endif; ?>


					
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer( ); ?>