<?php get_header(); ?>

<div class="container">
	<div class="row">

		<?php
		if ( have_posts() ) :
		    while ( have_posts() ) : the_post();
		?>

		<div class="col-lg-4">
			<div class="card" style="width: 18rem;">
			  <!-- <img style="width: 100%;" src="" class="card-img-top" alt="..."> -->
			  <?php the_post_thumbnail(); ?>
			  <?php the_time( 'F jS, Y' ); ?>
			  <a href="<?php echo get_author_posts_url(get_the_author_meta()); ?>"> <?php the_author(); ?></a>
			  <?php 

			  	the_author();
		        the_date();
		        the_time();


			   ?>
			  <div class="card-body">
			    <h5 class="card-title"><?php the_title(); ?></h5>
			    <p class="card-text"><?php the_content(); ?></p>
			    <a href="<?php the_permalink(); ?>" class="btn btn-primary">See More</a>
			  </div>
			</div>
		</div>


		<?php     

		endwhile;
		else :
		    echo 'Sorry, no posts were found';
		endif; 

		?>

	</div>
</div>


<?php
// if ( have_posts() ) :
//     while ( have_posts() ) : the_post();
        
//         the_post_thumbnail();
//         the_title();
//         the_content();
//         the_permalink();
//         the_excerpt();
//         the_category();
//         the_ID();
//         the_tags();
//         the_author();
//         the_date();
//         the_time();
//         echo "<br>";

//     endwhile;
// else :
//     echo 'Sorry, no posts were found.', 'textdomain';
// endif;



?>





   

<?php get_footer(); ?>
