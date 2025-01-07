<!-- template for dsiplay pages -->

<?php
get_header();
?>
<main>
    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php get_template_part("template_part/post_setup"); ?>
                    <div id="comment-section">
                        <?php comments_template(); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>