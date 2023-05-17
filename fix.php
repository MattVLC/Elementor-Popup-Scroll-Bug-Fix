function custom_popup_modifications() {
    ?>
    <style type="text/css">
        body.cantScroll {
            overflow: hidden !important;
            position: fixed;
            width: 100%;
            height: 100%;
        }
    </style>
    <script type="text/javascript">
        // when popup opens
        jQuery( document ).on( 'elementor/popup/show', () => {
            // save current scroll position
            var scrollPosition = jQuery('html').scrollTop() || jQuery('body').scrollTop(); 
            jQuery("html,body").addClass("cantScroll").css('top', -scrollPosition);  
        });      

        // when popup closes
        jQuery(document).on( 'elementor/popup/hide', () => {
            // restore scroll position
            var scrollPosition = parseInt(jQuery('html').css('top'));  
            jQuery("html,body").removeClass("cantScroll");
            jQuery('html,body').scrollTop(-scrollPosition);
        });
    </script>
    <?php
}
add_action('wp_footer', 'custom_popup_modifications');
