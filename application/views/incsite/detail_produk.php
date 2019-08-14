<div class="col-sm-9 padding-right">
					<?php foreach($data_produk as $row) { ?>
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img style="width:266px; height=281px" src="<?php echo base_url(); ?>assets/upload/<?php echo $row['foto']; ?>" alt="" />
							</div>
							<!-- <div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="<?php echo base_url(); ?>assets/site/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="<?php echo base_url(); ?>assets/site/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="<?php echo base_url(); ?>assets/site/images/product-details/similar3.jpg" alt=""></a>
										</div>										
									</div>

								  
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div> -->

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="<?php echo base_url(); ?>assets/site/images/product-details/new.jpg" class="newarrival" alt="" />
								<h3><?php echo $row['judul']; ?></h3>
								<!-- <img src="<?php echo base_url(); ?>assets/site/images/product-details/rating.png" alt="" /> -->
								<!-- <span>
									<span><//?php echo currency_format($row['harga']); ?></span>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span> -->
								<!-- <p><b>Tersedia:</b> <?php echo $row['judul']; ?></p> -->
								<!-- <p><b>Di Update Tanggal:</b> <?php echo date('d M Y H:i:s',strtotime($row['tgl_input_pro'])); ?></p> -->
								<br><p><b>ID Produk :</b> <?php echo $row['id_produk']; ?></p>
								<p><b>Bahan     :</b> <?php echo $row['bahan']; ?></p>
								<!-- <p><b>Model     :</b> <a href="<?php echo $row['jumlah']; ?>">klik disini untuk melihat model lain</a></p> -->
								<p><b>Keterangan:</b> <?php echo $row['ket']; ?></p>
								<!-- <p><a href="https://api.whatsapp.com/send?phone=628122727051&text=Hallo,%20saya%20mau%20PESAN%20<?php echo $row['judul']; ?>?"><span style="
									background: #02CBFA;
									color: #fff;
									border-radius: 4px;
									padding: 7px 15px;"><i class="fa fa-whatsapp" style="
									font-size: 19px;
								"></i> Info Lebih Lanjut</span></a></p> -->
								<!-- <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a> -->
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					<?php } ?>
					
					
					<!-- <div class="recommended_items"><!--recommended_items
						<h2 class="title text-center">Produk Rekomended</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								<?php foreach($data_produk as $row) { ?>	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img style="width:268px; height:269px" src="<?php echo base_url(); ?>assets/upload/<?php echo $row['foto']; ?>" alt="" />
												<h2><?php echo $row['judul']; ?></h2>
												<p style="text-transform:capitalize;">Stock: <?php  echo $row['jumlah']; ?></p>
												<a href="<?php echo base_url(); ?>detail-<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $row['judul']))).'-'.$row['id_produk']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Lihat Detail</a>
												<a href="https://api.whatsapp.com/send?phone=628122727051&text=Hallo,%20saya%20mau%20PESAN%20<?php echo $row['judul']; ?>?" class="btn btn-default add-to-cart"><i class="fa fa-whatsapp"></i>Hubungi Kami</a>

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
					</div>/recommended_items -->

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
						<a href="#"><img class="img-responsive" src="https://www.lemoncustomshop.com/image/cache/RESELLER/banner%20home%20reseller-1096x404.jpg">
						<!-- <div class="buttonnya" >
							<a href="#"><button>Join Now</button></a>
						</div> --></a>
					</div>
				</div>