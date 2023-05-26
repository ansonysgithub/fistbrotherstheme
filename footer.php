<!-- Footer container -->
<footer>
    <div class="row">
        <div class="col-md-12 footer-nav">
            <?php wp_nav_menu(
                array(
                    "menu" => 'menu-principal'
                )
            ); ?>
        </div>
        <div class="col-md-12 footer-copy">
            <p>&copy; Copyright 2023 Fist Brothers. All rights reserved. Games and other products sold on this website are subject to their respective licenses and terms of use.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</div>
</body>

</html>