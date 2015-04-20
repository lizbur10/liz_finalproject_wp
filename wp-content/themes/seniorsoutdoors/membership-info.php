<?php


	get_header();
?>

<div class="member-info" style="background-image:url(<?php $image = the_field('background_image'); echo $image['url']; ?>)" />"

    <div class="cabin-info">

        <div class="image-section">
        	<?php $images = get_field('image_gallery'); 

            if( $images ): ?>
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <p><?php echo $image['caption']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div id="carousel">
                    <ul class="flex-control-nav flex-control-thumbs">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div> 
            <?php endif; ?>
        </div>

    	<div class="text-section">
    		<h2 class="cabin-name"><?php the_field('cabin_name'); ?></h2>
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

    </div>

    <?php get_footer(); ?>

</div>
