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
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.png"/></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide2.png"/></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide3.png"/></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>The White Night</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Tons of Fans</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Best DJ's Ever</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
		</div>


		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>

					<?php 

					if(have_posts()):
						while (have_posts()):the_post();
					 ?>



					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail(); ?>
								<!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/img1.png"/> -->
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

					<?php 

						endwhile;
					endif;

					 ?>


					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Welcome To Our Great Site</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Stereosonic Is Back Just For You</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img4.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Club Galaxy White Night Show</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article>
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