<?php
// Footer Section (typically located in footer.php)
?>
<footer>
    <section id="footer_section">
        <div class="row">
            <div class="col-md-12">
                <!-- Display footer text from Customizer -->
                <p><?php echo esc_html(get_theme_mod("skb_footer_add")); ?></p>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?> <!-- This should be just before the closing </body> tag -->
</body>

</html>