<?php get_header(  ); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">


					<h2>Result:</h2>
					<?php 
						global $wp_query;
						$total_result= $wp_query->found_posts;
						if($total_result>0){
							echo "Result Found " . $total_result;

						} else{
							echo "Result Not found";
						}
					 ?>

					<?php if(have_posts()): while(have_posts()):the_post(); ?>

					<article>
						<?php the_post_thumbnail( ); ?>
						<!-- <img src="images/img1.png"/> -->
						<h2><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>
						<div class="info">

							[By <?php the_author_posts_link(); ?> 
							on <?php the_date(); ?> 
							with <a href="#"><?php comments_popup_link( 'Leave a comment', '1 Comment', '% Comments', 'comments-link', 'Comments are off for this post'); ?></a>]
						</div>
						
						<p><?php echo wp_trim_words( get_the_content(), 30, '<a href="'.get_the_permalink() .'"> Read More</a>' ); ?> </p>

					</article>
				<?php endwhile; endif; ?>
					
					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>

				</div>
			</div>
			<?php get_sidebar(  ); ?>
		</div>
	</div>
</section>

<?php get_footer(  ); ?>