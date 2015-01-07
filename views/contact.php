<dvi class="row">
	<?php if (!isset($message_sent)): ?>
		<form class="form-horizontal col-md-6" action="<?= base_url('contact/send'); ?>" method="post">
			<div class="form-group">
				<label for="firstName" class="col-sm-3 control-label">First Name</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="firstName" placeholder="First Name">
				</div>
			</div>
			<div class="form-group">
				<label for="lastName" class="col-sm-3 control-label">Last Name</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="lastName" placeholder="Last Name">
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-3 control-label">Email Address</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="email" placeholder="Email Address">
				</div>
			</div>
			<div class="form-group">
				<label for="phone" class="col-sm-3 control-label">Phone Number</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="phone" placeholder="Phone Number">
				</div>
			</div>
			<div class="form-group">
				<label for="message" class="col-sm-3 control-label">Message</label>
				<div class="col-sm-9">
					<textarea class="form-control" id="message"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<button type="submit" class="btn btn-default">Send Message</button>
				</div>
			</div>
		</form>
	<?php else: ?>
		<div class="col-md-6">
			<div class="alert alert-success" role="alert">Your message has been sent successfully.</div>
		</div>
	<?php endif; ?>
	
	<div class="col-md-3">
		<h2>Email:</h2>
		<p>Will: <a href="mailto: will@mycitynights.co.uk">Will@MyCityNights.co.uk</a></p>
		<p>Ben: <a href="mailto: ben@mycitynights.co.uk">Ben@MyCityNights.co.uk</a></p>
		<p>Tom: <a href="mailto: tom@mycitynights.co.uk">Tom@MyCityNights.co.uk</a></p>
		
		<h2>Phone:</h2>
		<p>Will: <a href="tel: +44 7976 622 047">+44 7976 622 047</a></p>
		<p>Ben: <a href="tel: +44 7976 622 047">+44 7976 622 047</a></p>
	</div>
	
	<div class="col-md-3">
		<div id="map-canvas"></div>
	</div>
</div>