</div>
<!-- footer -->
<footer>
    <div class="container">
        <?php wp_nav_menu(array('theme_location' => 'menu_footer')); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo_footer"></a>
    </div>
</footer>
<!-- END footer -->
<?php wp_footer(); ?>
</body>
</html>