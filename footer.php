        <footer class="bg">
            <div class="container">
                <div class="footer">
                    <a href="index.html" class="logo">
                        <img src="<?php echo INTERNO_IMG_DIR ?>/logo.svg" alt="">
                    </a>
                    <div class="footer__info">
                        <p class="footer__address">
                            <?php the_field('address_', 8) ?>
                        </p>
                        <a href="mailto:<?php the_field('email', 8) ?>">
                            <?php the_field('email', 8) ?>
                        </a>
                        <a href="tel:<?php echo CLEAN_PHONE; ?>">
                            <?php the_field('phone', 8) ?>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
