	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-100624733-1', 'auto');
		ga('send', 'pageview');

	</script>
	<?php wp_footer(); ?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPJ_VxNIHdbXDAf8ar9qUJjN-a733Nw80"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
	<script src="<?= get_template_directory_uri() ?>/assets/js/main.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/animation/Can.js?id=<?php echo uniqid(); ?>" type="module"></script>
	<script src="<?= get_template_directory_uri() ?>/js/animation/Shop-Can.js?id=<?php echo uniqid(); ?>" type="module" defer></script>
	</body>
</html>