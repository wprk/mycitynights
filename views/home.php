	<div id="content" class="row">
		<div class="col-md-12">
			<h2>Next Event:</h2>
			<div class="featured-event">
				<div class="event-img">
					<div class="ribbon red">
						<div class="ribbon-text"><?= $featured_event['capacity']; ?> spaces left</div>
					</div>
					<img src="<?= IMGPATH . $featured_event['image']; ?>" />
				</div>
				<div class="event">
					<div class="header">
						<div class="title"><?= $featured_event['name']; ?></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<h2>Upcoming Events:</h2>
		</div>
		<div class="col-md-8">
			<h2>A little about us:</h2>
		</div>
	</div>
