<div class="left-sidebar">
	<div class="brands_products"><!--brands_products-->
		<h2>PRODUK</h2>
		<div class="brands-name">
			<ul class="nav nav-pills nav-stacked">
				<?php foreach($kategoriq as $row) { ?>
				<li><a href="<?php echo base_url()."site/kategori/".$row['id_kat']; ?>"> <span class="pull-right"></span><?php echo $row['kategori']; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div><!--/brands_products-->

	<div class="brands_products"><!--brands_products-->
	<a href="<?php echo base_url(); ?>#testi"><h2>TESTIMONIAL</h2></a>
	</div><!--/brands_products-->


	<div class="brands_products"><!--brands_products-->
	<a href="<?php echo base_url()."site/menjadireseller/"; ?>"><h2>MENJADI RESELLER</h2></a>
		<!-- <div class="brands-name">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="<?php echo base_url()."site/menjadireseller/"; ?>"> <span class="pull-right"></span>menjadi reseller</a></li>
			</ul>
		</div>-->
	</div><!--/brands_products-->

	<div class="brands_products"><!--brands_products-->
	<a href="<?php echo base_url(); ?>#kontak"><h2>CONTACT US</h2></a>
	</div>

</div>