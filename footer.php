<footer>
  <div class="container">
    <div class="column">
      <div class="logo">
        <a href="<?php echo home_url(); ?>" class="homeLink">
          <img src="<?php the_field('company_logo'); ?>" alt="">
        </a> 
      </div>
    </div>
    <div class="column">
      <ul>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>#home">Home</a></li>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>#services">Services</a></li>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>#ourWork">Our Work</a></li>
      </ul>
    </div>
    <div class="column">
      <ul>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>#contactUs">Contact</a></li>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>/privacy-policy">Privacy Policy</a></li>
      </ul>
    </div>
    <div class="column">
        <div class="socialLinks">
					<ul>
                <li><a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        				<li><a target="_blank" href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        				<li><a target="_blank" href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
        				<li><a target="_blank" href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
    </div>
    <div class="copyright">
      <p>© <?php echo date("Y"); ?> AFC INC.</p>
    </div>
  </div>

</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
</body>
</html>