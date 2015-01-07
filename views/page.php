<?php
	$this->load->view('partials/head', $this->data);
	$this->load->view('partials/header', $this->data);
?>

	<div class="container">
		<div class="row">
			<?= $content; ?>
		</div>
	</div>
	<div class="push"></div>

<?php 
	$this->load->view('partials/footer', $this->data);
	$this->load->view('partials/foot', $this->data);
?>
