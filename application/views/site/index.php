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
		<style type="text/css">
		.buttonnya{
		position: absolute;
		top: 10;
		bottom: 40px;
		right: 100px;
		}
		.bannernya{
		position: relative;;
		}
		.box-headingku{
			font-weight:700;
			font-family: "Catamaran";
			font-size:28px;
			padding:10px;
		}
		</style>
		<?php $this->load->view('incsite/tahukahanda'); ?>

		<div><!-- produk kami -->
			<div class="box-headingku">Produk Kami</div>
			<div class="single-products">
				<div class="productinfo text-center">
					<a href="<?php echo base_url(); ?>site/kategori/8"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk kami/custom case-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/10"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/mug-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/9"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/popsocket-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/11"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/emoney-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/12"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/custom%20tumbler-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/13"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/notebook-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/15"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/mousepad-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/14"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/totebag-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/16"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/tshirt-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/17"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/id%20card-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/18"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/parfum-400x400.png" alt="" /></a>
					<a href="<?php echo base_url(); ?>site/kategori/19"><img style="width:268px; height:269px" src="https://www.lemoncustomshop.com/image/cache/produk%20kami/sticker-400x400.png" alt="" /></a>
				</div>
			</div>
		</div>
		<div id="testi">
		<div class="row">
		<div class="col-md-8 col-center m-auto">
		<h2>Testimonials</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="<?php echo base_url(); ?>assets/testiimage/user1.jpg" alt=""></div>
						<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						<p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="<?php echo base_url(); ?>assets/testiimage/user2.jpg" alt=""></div>
						<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="<?php echo base_url(); ?>assets/testiimage/user3.jpg" alt=""></div>
						<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
	</div>
			
		</div>
	</section>
	<?php $this->load->view('incsite/footer'); ?>
  	<?php $this->load->view('incsite/footer2'); ?>
    
</body>
</html>