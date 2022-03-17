<?php
/**
 * @package lorainccc-welded
 */
?>


<?php 
/** Uses Featured Image for banner background **/
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<div class="banner-full <?php the_ID(); ?>-banner" style="background:#000 left center / cover url('<?php echo $backgroundImg[0]; ?>') no-repeat; ">
    <div class="banner-full__text">
        <p>
            <?php
                // pulls content from banner_content field for text section in banner
                $post_meta = get_post_meta($post->ID, 'banner_content', true);
                echo $post_meta;
            ?>
        </p>
    </div>
</div>