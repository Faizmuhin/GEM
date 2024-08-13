<?php

add_action('wp_enqueue_scripts', 'enqueue_style_and_script');
function enqueue_style_and_script(){
    wp_enqueue_style('bootstrap-style', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css');
    wp_enqueue_style('plugin-css', get_theme_file_uri('/assets/css/plugins.css'));
    wp_enqueue_style('style-custom-css', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_style('custom-css', get_theme_file_uri('/assets/css/custom.css'));
    wp_enqueue_style('style-css', get_stylesheet_uri());
    wp_enqueue_script('bootstrap-script', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('plugins-js', get_theme_file_uri('/assets/js/plugins.js'), array('jquery'));
    wp_enqueue_script('theme-js', get_theme_file_uri('/assets/js/theme.js'), array('jquery'));
}

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
function allow_svg_uploads($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('mime_types', 'allow_svg_uploads');
function gem_register_menus() {
    register_nav_menus(
        array(
            'header_menu' => 'Header Menu',
            'footer_menu' => 'Footer Menu',
        )
    );
}
add_action('init', 'gem_register_menus');


//Global team custom post type
add_action('init', 'register_global_team');
function register_global_team(){
    $post_type_labels = array(
    'name'            => 'Global Team',
    'singular_name'   => 'Global Team',
    'menu_name'       => 'Global Team',
    'name_admin_bar'  => 'Global Team',
    'add_new'         => 'Add New Team Member',
    'add_new_item'    => 'Add New Team Member',
    'new_item'        => 'New Team Member',
    'edit_item'       => 'Edit Team Member',
    'view_item'       => 'View Team Member',
    'all_items'       => 'All Team Members',
    'search_items'    => 'Search Team Members'
);
$post_type_args = array(
    'labels'          => $post_type_labels, 
    'public'          => true,
    'publicly_queryable' => true,
    'query_var'       => true,
    'has_archive'     => true,
    'menu_position'   => 5,
    'show_ui'         => true,
    'show_in_menu'    => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_icon'       => 'dashicons-businessman', 
    'supports'        => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
);
register_post_type('global-team', $post_type_args);

}

add_shortcode('share_article', 'share_this_article');
function share_this_article(){
    ?>
    <section class="share-article">
        <div class="container-lg">
            <div class="align-items-center col-12 d-flex justify-content-end">
                <p class='mb-0 fw-semibold body-18'>Share this article:</p>
                <div class='d-flex'> 
                    <a href='https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>' target='_blank'><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#0082CA"/>
                    <path d="M24.6 19.9818H21.631V30H17.137V19.9818H15V16.4591H17.137V14.1818C17.137 12.5527 17.976 10 21.672 10L25 10.0136V13.4318H22.585C22.4492 13.4262 22.3137 13.448 22.1883 13.4955C22.0628 13.5431 21.9505 13.6153 21.8594 13.707C21.7682 13.7986 21.7004 13.9075 21.661 14.0257C21.6215 14.1439 21.6113 14.2687 21.631 14.3909V16.4636H24.991L24.6 19.9818Z" fill="#0082CA"/>
                    </svg></a>
                    <a href='https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>' target='_blank'><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#0082CA"/>
                    <path d="M29.0012 21.9229V28.5019H25.1422V22.3649C25.1422 20.8229 24.5852 19.7709 23.1872 19.7709C22.7534 19.7724 22.3306 19.9076 21.9764 20.1581C21.6223 20.4087 21.354 20.7623 21.2082 21.1709C21.1085 21.47 21.0651 21.785 21.0802 22.0999V28.5019H17.2212C17.2212 28.5019 17.2732 18.1069 17.2212 17.0309H21.0812V18.6569C21.0742 18.6689 21.0632 18.6819 21.0552 18.6939H21.0812V18.6569C21.4332 18.0538 21.9432 17.5582 22.556 17.2234C23.1689 16.8886 23.8614 16.7273 24.5592 16.7569C27.1012 16.7609 29.0012 18.4019 29.0012 21.9229ZM13.1852 11.5019C12.9109 11.4747 12.634 11.5048 12.372 11.5903C12.11 11.6758 11.8687 11.8148 11.6632 11.9985C11.4578 12.1822 11.2928 12.4065 11.1786 12.6574C11.0645 12.9082 11.0037 13.18 11.0002 13.4556C10.9966 13.7312 11.0504 14.0044 11.158 14.2581C11.2657 14.5118 11.4249 14.7404 11.6255 14.9293C11.8262 15.1182 12.0639 15.2634 12.3236 15.3556C12.5833 15.4478 12.8593 15.485 13.1342 15.4649H13.1582C13.4336 15.4922 13.7117 15.4619 13.9747 15.3756C14.2377 15.2894 14.4798 15.1493 14.6856 14.9642C14.8914 14.7791 15.0563 14.5532 15.1698 14.3007C15.2834 14.0483 15.343 13.775 15.3448 13.4982C15.3467 13.2214 15.2909 12.9473 15.1808 12.6933C15.0707 12.4394 14.9089 12.2112 14.7057 12.0233C14.5024 11.8354 14.2622 11.692 14.0004 11.6022C13.7386 11.5125 13.4609 11.4783 13.1852 11.5019ZM11.2302 28.5019H15.0882V17.0309H11.2302V28.5019Z" fill="#0082CA"/>
                    </svg></a>
                    <a href='https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>' target='_blank'><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#0082CA"/>
                    <path d="M21.7124 18.6218L28.4133 11H26.8254L21.0071 17.6179L16.3599 11H11L18.0274 21.0074L11 29H12.588L18.7324 22.0113L23.6401 29H29L21.7121 18.6218H21.7124ZM19.5375 21.0956L18.8255 20.0991L13.1602 12.1697H15.5992L20.1712 18.5689L20.8832 19.5655L26.8262 27.8835H24.3871L19.5375 21.096V21.0956Z" fill="#0082CA"/>
                    </svg></a>
                </div>
            </div>
        </div>
    </section>
    <?php
}