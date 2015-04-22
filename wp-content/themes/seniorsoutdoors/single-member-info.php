<?php


	get_header();
?>


 
    	<div class="member-info">
            <img src="images/<?php the_field('first-name'); ?><?php the_field('last-name'); ?>.jpg" alt="temp alt">
    		<h2 class="member-name"><?php the_field('first_name'); ?> X. <?php the_field('last_name'); ?></h2>

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
