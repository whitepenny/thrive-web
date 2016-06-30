	</div><!-- #content -->
</div><!-- #page -->
	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="mobile-navigation">
      <div class="mobile-navigation-wrap">
        <div class="full-column">
          
          <a href="#" class="mobile-navigation-close">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-close fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          <div class="mobile-navigation-container">
            <ul>
               
            	<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu' ) ); ?>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
            <div class="footer-inner">
                <div class="footer-linkage"><?php dynamic_sidebar('footer_sidebar-1'); ?></div>
		<div class="site-info">
			<span class="copyright">Copyright &#169; <?php echo date('Y'); ?> Thrive</span><span class="sep">, </span><span class="arr">All Rights Reserved</span>
		</div><!-- .site-info -->
            </div><!--/footer-inner-->
	</footer><!-- #colophon -->
<!--</div>--><!-- #page -->

<?php wp_footer(); ?>
<script>
  // MOBILE MENU TOGGLE

  jQuery("#mobile-toggle").click(function(){
    jQuery(".mobile-navigation").fadeIn(500,function(){
      jQuery(".mobile-navigation-container").show("slide",{direction:"up",easing:"easeOutQuart"},500)
    });
});
jQuery(".mobile-navigation-close").click(function(){
  jQuery(".mobile-navigation").hide("slide",{direction:"up",easing:"easeInQuart"},500,function(){
    jQuery(".mobile-navigation-container").hide()});
});

  jQuery(window).resize(function() {
  	var viewport_width = jQuery(window).width();
  	if(viewport_width > 1007) {
	  	jQuery('#site-navigation').show();
  	}
  });
</script>
<script src="/wp-content/themes/thrive/js/noframework.waypoints.min.js"></script>
<script src="/wp-content/themes/thrive/js/jquery.waypoints.min.js"></script>
<script src="/wp-content/themes/thrive/js/jquery.countTo.js"></script>
<!--<script>
var waypoint = new Waypoint({
    element: document.getElementById('stats-section'),
    handler: function() {
        // function in a function
        jQuery('.count').each(function () {
            jQuery(this).prop('Counter',0).animate({
                Counter: jQuery(this).text()
            }, {
                duration: 2700,
                easing: 'swing', 
                step: function (now) {
                     jQuery(this).text(Math.ceil(now)); 
                }
            });
            (this).destroy;
        });
      }
})
</script>-->
<script type="text/javascript">
jQuery('#stats-section').waypoint(function() {
        // function in a function
  	jQuery('.count').countTo();
        this.destroy()
  },
  {offset: '33%'}
);
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60159229-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/1969499.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->

</body>
</html><!--\m/-->
