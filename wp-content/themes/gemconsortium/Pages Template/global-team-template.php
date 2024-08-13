<?php
/*
* Template Name: Global Team Template
*/


get_header(); 
?>

<!-- Banner section start -->
<section class="common-banner global-member-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class='h1-heading'>Our Global Team</h1>
                <p class='text-semibold'>Our Global Team unites experts to advance entrepreneurship. With shared vision and expertise, we drive research and foster thriving ecosystems. Meet our mission's champions.</p>
            </div>
        </div>
    </div>
</section>
<!-- Banner section end -->

<!-- Members section start -->
<section class="global-team-members">
    <div class="container">
        <div class="row">
        <?php
            $args = array(
                'post_type' => 'global-team', 
                'posts_per_page' => -1, 
                'orderby' => 'date', 
                'order' => 'ASC', 
            );

            // Instantiate a new WP_Query
            $global_team_query = new WP_Query($args);

            // Check if there are posts
            if ($global_team_query->have_posts()) :
                while ($global_team_query->have_posts()) :
                    $global_team_query->the_post();
        ?>
            <div class="col-lg-4 col-md-6">
                <div class="global-team-post text-center">
                    <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large', array( 'class' => 'img-fluid' )); // 'medium' can be changed to any size
                        }
                    ?>                        
                    <h3><?php the_title(); ?></h3>
                    <div class="excerpt">
                            <?php 
                            if (the_excerpt()) {
                                the_excerpt();
                            }     
                            ?>
                        </div>
                    <div class="team-member-modal">
                        <div class="member-content">
                            <h3><?php the_title(); ?></h3>
                            <div class="excerpt">
                                <?php 
                                if (the_excerpt()) {
                                    the_excerpt();
                                }     
                                ?>
                            </div>
                            <div class="content">
                            <?php 
                                if (the_content()) {
                                    the_content();
                                }     
                                ?>
                            </div>
                        </div>
                        <div class="member-image">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large', array( 'class' => 'img-fluid' )); 
                            }
                            ?>
                        </div>
                        <span class="close-button">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.9974 23.9141L27.0391 29.9557C27.421 30.3377 27.9071 30.5286 28.4974 30.5286C29.0877 30.5286 29.5738 30.3377 29.9557 29.9557C30.3377 29.5738 30.5286 29.0877 30.5286 28.4974C30.5286 27.9071 30.3377 27.421 29.9557 27.0391L23.9141 20.9974L29.9557 14.9557C30.3377 14.5738 30.5286 14.0877 30.5286 13.4974C30.5286 12.9071 30.3377 12.421 29.9557 12.0391C29.5738 11.6571 29.0877 11.4661 28.4974 11.4661C27.9071 11.4661 27.421 11.6571 27.0391 12.0391L20.9974 18.0807L14.9557 12.0391C14.5738 11.6571 14.0877 11.4661 13.4974 11.4661C12.9071 11.4661 12.421 11.6571 12.0391 12.0391C11.6571 12.421 11.4661 12.9071 11.4661 13.4974C11.4661 14.0877 11.6571 14.5738 12.0391 14.9557L18.0807 20.9974L12.0391 27.0391C11.6571 27.421 11.4661 27.9071 11.4661 28.4974C11.4661 29.0877 11.6571 29.5738 12.0391 29.9557C12.421 30.3377 12.9071 30.5286 13.4974 30.5286C14.0877 30.5286 14.5738 30.3377 14.9557 29.9557L20.9974 23.9141ZM20.9974 41.8307C18.1155 41.8307 15.4071 41.2839 12.8724 40.1901C10.3377 39.0964 8.13281 37.612 6.25781 35.737C4.38281 33.862 2.89844 31.6571 1.80469 29.1224C0.710938 26.5877 0.164062 23.8793 0.164062 20.9974C0.164062 18.1155 0.710938 15.4071 1.80469 12.8724C2.89844 10.3377 4.38281 8.13281 6.25781 6.25781C8.13281 4.38281 10.3377 2.89844 12.8724 1.80469C15.4071 0.710938 18.1155 0.164062 20.9974 0.164062C23.8793 0.164062 26.5877 0.710938 29.1224 1.80469C31.6571 2.89844 33.862 4.38281 35.737 6.25781C37.612 8.13281 39.0964 10.3377 40.1901 12.8724C41.2839 15.4071 41.8307 18.1155 41.8307 20.9974C41.8307 23.8793 41.2839 26.5877 40.1901 29.1224C39.0964 31.6571 37.612 33.862 35.737 35.737C33.862 37.612 31.6571 39.0964 29.1224 40.1901C26.5877 41.2839 23.8793 41.8307 20.9974 41.8307Z" fill="white"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
                // Restore original post data
                wp_reset_postdata();
            else :
                // If no posts are found
                echo 'No global team posts found.';
            endif;
            ?>
        </div>        
    </div>
</section>
<?php
do_shortcode('[share_article]');
?>
<script>
jQuery(document).ready(function(){
    jQuery('.global-team-members .global-team-post').each(function(){
        var imgClick = jQuery(this).children('img');
        var titleClick = jQuery(this).children('h3');
        var modal = jQuery(this).find('.team-member-modal');
        var closeModal = jQuery(this).find('.close-button');

        imgClick.add(titleClick).click(function(){
            modal.addClass('active');
            console.log('img');
        });

        closeModal.click(function(){
            jQuery(this).closest('.team-member-modal').removeClass('active');
        });
        // modal.click(function(){
        //     jQuery(this).removeClass('active');
        // });
    });
});

</script>
<?php
get_footer();

