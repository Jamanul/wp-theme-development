<?php
// this is for displaying the header
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div id="header_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href=""><img class="logo" src="<?php echo get_theme_mod("skb_logo"); ?> " alt=""></a>
                </div>
                <div class="col-md-9">
                    <nav>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a>
                                <ul>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Mission</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Services</a>
                                <ul>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">SEO</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <?php wp_footer() ?>
</body>

</html>