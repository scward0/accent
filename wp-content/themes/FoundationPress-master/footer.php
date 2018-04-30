<footer>
  <div class="container">
    <div style="background: #505559;">
      <br>
      <div class="row" style="padding: 20px; max-width: 200.5em;">
        <div class="small-12  medium-12 large-3 columns">
          <a class="footer-item" href="<?php bloginfo('url'); ?>"><img class="footer-item" src="/Accent/wp-content/uploads/2017/03/new_accent_logo.png" width="200" alt="<?php bloginfo('name'); ?>"/></a>
        </div>
        <div class="small-12 medium-12 large-3 columns">
          <p class="footer-item">
            <span style="font-size: 16px;">LET'S TALK</span>
            <br><br>
            808-295-8501<br>
            <a href="mailto:jeff@accentdesignhawaii.com" style="color: white;">jeff@accentdesignhawaii.com</a>
          </p>
        </div>
        <div class="small-12 medium-12 large-3 columns">
          <p class="footer-item">
            <span style="font-size: 16px;">FOLLOW US</span>
            <br><br>
            <img src="/Accent/wp-content/uploads/2017/03/accent_instagram.png" alt="Instagram" class="social-icon" />
            <img src="/Accent/wp-content/uploads/2017/03/accent_facebook.png" alt="Facebook" class="social-icon"/>
          </p>
        </div>
        <div class="small-12 medium-3 columns">
          &nbsp;
        </div>
      </div>
    </div>
  </div>

</footer>
<script type="text/javascript">
$(document).ready(function(){
	$(window).scroll(function() {
		if ($(this).scrollTop() > 50) {// can be whatever, 0 refers to the top space you allow
				$('.arrow').hide();// Hide your element
				// if ($(this).width() > 768) {
					$('#header').addClass('scroll-header');
				// }
		}
		else {
				$('.arrow').show();// It's just if you want to show back the element if we're back on top
				$('#header').removeClass('scroll-header');
		}
	});

  $('#nav-icon3').click(function(){
    if ($(this).hasClass('open') ) {
      $(this).removeClass('open');
      $('.mobile-nav').removeClass('fadeIn');
      $('.mobile-nav').addClass('hide fadeOut');
    }else{
        $(this).addClass('open');
        $('.mobile-nav').removeClass('hide fadeOut');
        $('.mobile-nav').addClass('fadeIn');
      }
    });
  });
</script>
<?php wp_footer(); ?>

</body>
</html>
