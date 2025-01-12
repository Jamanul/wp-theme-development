<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <div class="blog_area">
            <!-- Display post title -->
            <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                <p>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <?php echo get_the_date(); ?>
                    <span>At</span>
                    <i class="fa-solid fa-clock"></i>
                    <?php echo get_the_time(); ?>
                </p>
            </h2>
            <div class="post_thumb">
                <a href="<?php the_permalink() ?>">
                    <?php echo the_post_thumbnail("custom_post_thumbnail"); ?></a>

            </div>
            <!-- Display post content -->
            <div class="post_content">
                <?php the_excerpt(); ?>
            </div>
        </div>
        <?php
    endwhile;
else:
    // Display message when no posts are found
    _e("No posts found");
endif;
?>
<div id="page_nav">
    <?php if ('skb_pagenav') {
        skb_pageNav();
    } else { ?>
        <?php next_post_link(); ?>
        <?php previous_post_link(); ?>
    <?php } ?>
</div>