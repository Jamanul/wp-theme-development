<?php
// Include WordPress header
get_header();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Archive</title>
</head>

<body>
    <section>
        <div>
            <h2>Author: <?php echo get_the_author(); ?></h2>

            <p><strong>About the Author:</strong></p>
            <p><?php echo get_the_author_meta('description'); ?></p>

            <!-- Author posts loop -->
            <h3>Recent Posts by <?php echo get_the_author(); ?>:</h3>
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <div class="author-post">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile;
            else:
                echo '<p>No posts found by this author.</p>';
            endif;
            ?>
        </div>
    </section>

    <!-- Include WordPress footer -->
    <?php get_footer(); ?>
</body>

</html>