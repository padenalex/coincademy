			<!-- footer / change menus to dynamic-->
			<footer class="max-width pure-g">

				<div class="pure-u-1 pure-u-md-1-5 pure-u-lg-1-5">
					logo bullshit
				</div>
				<div class="pure-u-1-2 pure-u-md-1-5 pure-u-lg-1-5">
					<span>Express Courses</span>
					<ul>
						<li><a href="/express-courses/">Bitcoin</a></li>
						<li><a href="/express-courses/">Ethereum</a></li>
						<li><a href="/express-courses/">Monero</a></li>
					</ul>
				</div>
				<div class="pure-u-1-2 pure-u-md-1-5 pure-u-lg-1-5">

					<span>Standard Courses</span>
					<ul>
						<li><a href="/course-category/bitcoin/">Bitcoin Courses</a></li>
						<li><a href="/course-category/ethereum/">Ethereum Courses</a></li>
						<li><a href="/course-category/monero/">Monero Courses</a></li>
						<li><a href="/course-category/mining/">Mining Courses</a></li>
					</ul>
				</div>
				<div class="pure-u-1-2 pure-u-md-1-5 pure-u-lg-1-5">
					<span>Investing</span>
					<ul>
						<li><a href="/course/investing-beginners-course/">Beginner Course</a></li>
						<li><a href="/course/investing-intermediate-course/">Investor Course</a></li>
						<li><a href="/course/investing-advanced-course/">Advanced Course</a></li>
					</ul>
				</div>
				<div class="pure-u-1-2 pure-u-md-1-5 pure-u-lg-1-5">
					<span>Developer</span>
					<ul>
						<li><a href="/course/developer-beginners-course/">Beginner Course</a></li>
						<li><a href="/course/developer-intermediate-course/">Investor Course</a></li>
						<li><a href="/course/developer-advanced-course/">Advanced Course</a></li>
					</ul>
				</div>
				<div class="vmid copyright">
					<div class="pure-u-1 pure-u-lg-1-2 pure-u-md-1-2">
						Copyright &copy; <?php echo date("Y"); ?> Coincademy
					</div>
					<div class="pure-u-1 pure-u-lg-1-2 pure-u-md-1-2">
					        <a class="social-icon" href="#" target="_blank"><img alt="Facebook" src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/img/facebook.png'; this.onerror=null;"></a><a class="social-icon" href="#" target="_blank"><img alt="Twitter" src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/img/twitter.png'; this.onerror=null;"></a>
					</div>
				</div>

				<div class="pure-u-1 pure-u-lg-3-5 pure-u-md-3-5">
                	<?php cc_extra_menu(); ?>
                </div>
				
				
			</footer>
			<!-- /footer -->

		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->


	</body>
</html>
