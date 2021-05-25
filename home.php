<?php get_header(); ?>

<main role="main" class="flex-shrink-0">
	<div class="container">
		<h1 class="mt-5">Sticky footer with fixed navbar</h1>
		<p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
		<p>Back to <a href="/docs/5.0/examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p>
	</div>
</main>

<footer class="footer mt-auto py-3">
	<div class="container">
		<p class="float-end"><a href="#">Back to top</a></p>
		<p>&copy; <?php echo date('Y'); ?> Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	</div>
</footer>

<?php get_footer(); ?>
