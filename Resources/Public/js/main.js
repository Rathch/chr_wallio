function addWallsio(wall_url) {
    $('#wallsio-gdpr-notice').hide();
    $('#wallsio-container').html('<script id="wallsio-widget-script" src="https://walls.io/js/wallsio-widget-1.2.js" data-wallurl="'+wall_url+'?nobackground=1&amp;show_header=0&amp;initial_posts=8" data-width="100%" data-autoheight="1" data-height="800" data-lazyload="1"></script>');
}



