<?php


	get_header();
?>


 
    	<div class="member-info">
    		<h2 class="member-name"><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></h2>
    		<p><?php the_field('summary_description'); ?></p>

    		<div class="art-features">
    			<h3>Art making features:</h3>
    			<div><?php the_field('art_making_features'); ?></div>
    		</div>

    		<div class="standard-features">
    			<h3>Standard cabin features include:</h3>
    			<div><?php the_field('standard_cabin_features'); ?></div>
    		</div>

    		<div class="pricing-information">
    			<h4>Once accepted (<a href="#">application process</a>):</h4>
    			<div><?php the_field('pricing_information'); ?></div>

    			<div class="check-availability">
    				<a href="#">check availability</a>
    			</div>
    		</div>
    		
    	</div>

    <?php get_footer(); ?>
