<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('incsite/head'); ?>
</head><!--/head-->

<body>

	<?php $this->load->view('incsite/head2'); ?>
	
	<?php $this->load->view('incsite/slider'); ?>
	
	<section>
		<div class="container">
		
		<?php $this->load->view('incsite/tahukahanda'); ?>
		<?php $this->load->view('incsite/intro'); ?>
		<?php $this->load->view('incsite/produkkami'); ?>
		<?php $this->load->view('incsite/blog'); ?>
		<?php $this->load->view('incsite/testimoni'); ?>
			
		</div>
	</section>
	<?php $this->load->view('incsite/footer'); ?>
  	<?php $this->load->view('incsite/footer2'); ?>
    
</body>
</html>