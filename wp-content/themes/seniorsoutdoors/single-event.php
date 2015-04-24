<?php


	get_header();
?>


 
    	<div class="event-info">
    		<h2 class="event-title"><?php the_field('title'); ?></h2>

    		<div class="member-email">
    			<h3>Email:</h3>
    			<div><?php the_field('email'); ?></div>
    		</div>

    		<div class="member-phone">
    			<h3>Phone:</h3>
    			<div><?php the_field('phone'); ?></div>
    		</div>

    		<div class="member-address">
                <h3>Address:</h3>
                <div><?php the_field('street_address'); ?>, <?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip_code'); ?></div>
     		</div>

            <div class="spouse">
                <h3>Spouse/partner:</h3>
                <div><?php the_field('spouse_first_name'); ?> <?php the_field('spouse_last_name'); ?></div>
            </div>
    		
    	</div>

