
		</div><!-- .col-full -->
	</div><!-- #content -->

    <?php do_action( 'storefront_before_footer' ); ?>

    <footer class="text-center my-4">
       <?php dynamic_sidebar('pie-pagina');?>
       <?php //wp_nav_menu([
                            // "menu" =>'menu_footer',
                    // ]); ?>
    </footer>

    <?php do_action( 'storefront_after_footer' ); ?>
<?php wp_footer();?>
</body>

</html>