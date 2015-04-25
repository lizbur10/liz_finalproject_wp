<?php


	get_header();
?>


 
    	<div class="event-info">
    		<h1 class="page-title"><?php the_field('title'); ?></h1>

    		<div class="member-email">
    			<h2>Email:</h2>
    			<div><?php the_field('email'); ?></div>
    		</div>

    		<div class="member-phone">
    			<h2>Phone:</h2>
    			<div><?php the_field('phone'); ?></div>
    		</div>

    		<div class="member-address">
                <h2>Address:</h2>
                <div><?php the_field('street_address'); ?>, <?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip_code'); ?></div>
     		</div>

            <div class="spouse">
                <h2>Spouse/partner:</h2>
                <div><?php the_field('spouse_first_name'); ?> <?php the_field('spouse_last_name'); ?></div>
            </div>
    		
    	</div>

