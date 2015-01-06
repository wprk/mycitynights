	<?php
		foreach ($events as $featured_event):
			$this->load->view('featured_event', $featured_event);
		endforeach;
	?>
