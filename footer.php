</main>
 <?php
  wp_footer();
 ?>
<footer <?php if(is_front_page() ){echo'class="footer--front-page"';} ?>>
	<section class="footer__top"></section>
	<section class="footer__bottom">
		<div class="footer__logo">
			<a href="https://zhp.pl/" alt="zhp.pl" class="footer__logo_link"></a>
		</div>
		
		<a href="/polityka-prywatnosci" alt="Polityka prywatności" class="footer__privacy_link">Polityka prywatności</a>
		<section class="social">
			<a href="https://www.facebook.com/WedrowniczaWatra" alt="Facebook" class="social__link">
				<img src ="/wp-content/uploads/2020/11/f_logo_RGB-White_58.png" class="social__image"alt="Logo Facebook" />
			</a>
		    <a href="https://www.instagram.com/w_watra/" alt="Instagram" class="social__link">
				<img src ="/wp-content/uploads/2020/11/instagram.png" class="social__image" alt="Logo Instagram" />
			</a>

		</section>
	</section>
	
</footer>

</body>
</html>