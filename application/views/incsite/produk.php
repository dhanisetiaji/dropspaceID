

<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">PRODUK KAMI</h2>
						<?php foreach($data_produk as $row) { ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="<?php echo base_url(); ?>detail-<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $row['judul']))).'-'.$row['id_produk']; ?>"><img style="width:268px; height:269px" src="<?php echo base_url(); ?>assets/upload/<?php echo $row['foto']; ?>" alt="" /></a>
											<h4><?php echo $row['judul']; ?></h4>
											<!-- <p style="text-transform:capitalize;">Bahan : <?php  echo $row['bahan']; ?></p> -->
											<!-- <a href="<?php echo base_url(); ?>detail-<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $row['judul']))).'-'.$row['id_produk']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Lihat Detail</a> -->
											

										</div>
								</div>
								
							</div>
						</div>
						<?php } ?>
						
						<div class="pagination-area">
							<ul class="pagination">
								<?php echo $pages; ?>
							</ul>
						</div>
					</div><!--features_items-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Produk Rekomended</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								<?php foreach($rekomen as $row) { ?>	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<a href="<?php echo base_url(); ?>detail-<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $row['judul']))).'-'.$row['id_produk']; ?>"><img style="width:268px; height:269px" src="<?php echo base_url(); ?>assets/upload/<?php echo $row['foto']; ?>" alt="" /></a>
												<h4><?php echo $row['judul']; ?></h4>
												<!-- <p style="text-transform:capitalize;">Bahan : <?php  echo $row['bahan']; ?></p> -->
												<!-- <a href="<?php echo base_url(); ?>detail-<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $row['judul']))).'-'.$row['id_produk']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Lihat Detail</a> -->
											
											</div>
												
											</div>
										</div>
									</div>
								<?php } ?>
									
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
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
					</style>					
					<div class="bannernya" style="position:relative;">
						<a href="<?php echo base_url(); ?>site/menjadireseller"><img class="img-responsive" src="https://www.lemoncustomshop.com/image/cache/RESELLER/banner%20home%20reseller-1096x404.jpg">
						<!-- <div class="buttonnya" >
							<a href="#"><button>Join Now</button></a>
						</div> --></a>
					</div>
					
				</div>