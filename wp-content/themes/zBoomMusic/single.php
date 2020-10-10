<?php get_header( ); ?>


<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<?php the_post_thumbnail( ); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">
							[By <?php the_author_posts_link(); ?>
							on <?php the_date( ); ?>
							with <a href="#"><?php comments_popup_link( 'Leave a comment', '1 Comment', '% Comments', 'comments-link', 'Comments are off for this post'); ?></a>]
						</div>

						<p><?php the_excerpt(); ?></p>
						<div class="comment">
							Your email address will not be published. Required fields are marked *
							<?php comments_template( ); ?>
							<!-- <form>
								<div><input type="text" name="name" id="name"> Name *</div>
								<div><input type="email" name="email" id="email"> Email *</div>
								<div><input type="url" name="website" id="website"> Website</div>
								<div><textarea rows="10" name="comment" id="comment"></textarea></div>
								<div><input type="submit" name="submit" value="Submit"></div>
							</form> -->
						</div>
					</article>
				</div>
			</div>
			<?php get_sidebar(  ); ?>
		</div>
	</div>
</section>



<?php get_footer(); ?>