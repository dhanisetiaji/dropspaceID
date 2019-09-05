
<section id="slider"><!--slider-->
<div class="row-custom">
	<!-- <div class="col-md-8 col-md-offset-2"> -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>		
			</ol>
 
			<!-- deklarasi carousel -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo base_url(); ?>assets/slider/slider1.jpg" alt="">
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/slider/slider1.jpg" alt="">
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/slider/slider1.jpg" alt="">
					<!-- <div class="carousel-caption">
						<h3>Tutorial Android</h3>
						<p>Tutorial membuat aplikasi android.</p>
					</div> -->
				</div>				
			</div>
 
			<!-- membuat panah next dan previous -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	<!-- </div> -->
 </div>
</section><!--/slider-->