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
                            $city = get_field('city');
                            $state = get_field('state');
                            $zip_code = get_field('zip_code');
                            $spouse_first_name = get_field('spouse_first_name');
                            $spouse_last_name = get_field('spouse_last_name');
                ?>
                
                <tr>
                    <td><a href="http://localhost:8888/liz_finalproject_wp/member_info/<?php echo $first_name ?>-<?php echo $last_name ?>"><?php echo $first_name ?> <?php echo $last_name ?></a></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $phone ?></td>
                    <td><?php echo $street_address ?>, <?php echo $city ?>, <?php echo $state ?> <?php echo $zip_code ?></td>
                    <td><?php echo $spouse_first_name ?> <?php echo $spouse_last_name ?></td>
                </tr>

            <?php endwhile; ?>

            <?php endif; ?>


            </table>


<?php
    get_footer();
?>



