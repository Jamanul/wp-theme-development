<?php
// this template is for displaying search pages
get_header();
?>
<main>
    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="archive_title">
                        <?php
                        printf(__("Search Result For : %s", "sakib"), get_search_query());
                        ?>
                    </div>
                    <?php get_template_part("template_part/blog_setup"); ?>
                </div>
                <div class="col-md-3">
                    <?php echo get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>