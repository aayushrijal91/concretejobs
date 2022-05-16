<footer>
	<div class="container">
		<div class="row justify-content-center justify-content-md-between align-items-center">
			<div class="col-auto">
				<div class="row no-gutters mb-3 mb-md-0 justify-content-center">
					<div class="col-auto text-center">Copyright <?= date('Y') ?></div>
					<div class="col-auto px-2 px-md-4 px-xl-5">/</div>
					<div class="col-auto text-center"><?= $site ?></div>
					<div class="col-auto px-2 px-md-4 px-xl-5">/</div>
					<div class="col-auto text-center">All Rights Reserved
					</div>
				</div>
			</div>
			<div class="col-auto">
				<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
					<?= renderImg("aiims.png", "logo") ?>
				</a>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<?= renderImg("arrow-up.webp", "icons") ?>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>