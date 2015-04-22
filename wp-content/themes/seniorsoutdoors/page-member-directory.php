<?php
/*
Template Name: Member Directory Template
*/


	get_header();
?>



            <table class="member-directory">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Spouse/Partner</th>
                </tr>
                <?php $wp_query = new WP_Query('post_type=member_info'); 
                    if ( $wp_query->have_posts() ) :
                        while ( $wp_query->have_posts() ) : $wp_query->the_post();
                            $first_name = get_field('first_name');                    
                            $last_name = get_field('last_name');
                            $email = get_field('email');
                            $phone = get_field('phone');
                            $street_address = get_field('street_address');
                            $spouse_first_name = get_field('spouse_first_name');
                            $spouse_last_name = get_field('spouse_last_name');
                ?>
                
                <tr>
                    <td><?php echo $first_name ?> <?php echo $last_name ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $phone ?></td>
                    <td><?php echo $street_address ?></td>
                    <td><?php echo $spouse_first_name ?> <?php echo $spouse_last_name ?></td>
                </tr>

            <?php endwhile; ?>

            <?php endif; ?>


            </table>


<?php
    get_footer();
?>



