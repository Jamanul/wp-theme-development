<?php
get_header();
//this template is for 404 page
?>
<main>
    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 error">
                    <h2>404 Noting Found</h2>
                    <p>If you are looking for something else.</p>
                    <div>
                        <?php get_search_form() ?>
                    </div>
                    <a href="<?php echo home_url() ?>">Home Page</a>
                </div>

            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>