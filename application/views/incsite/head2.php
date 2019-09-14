<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'aba51a604a2a65fd389f5a01b8c176e7caa40713';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

<header id="header"><!--header-->
		<!-- <div class="header_top">header_top -->
			<!-- <div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-envelope"></i> dropspace.id@gmail.com</a></li>
								<li><a href="#"><i class="fa fa-comments-o"></i> WA: 087726269859</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://instagram.com/dropspace.id"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->
		<!-- </div>/header_top -->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-4logo">
						<div class="logo img-fluid">
							<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/logo1.png" alt="" /></a>
						</div>
					</div>
					<!-- <div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div> -->
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9 col-sm-9navbar">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<style>
						.navbar-nav>li>.dropdown-menu{
							margin-top:10px;
							border-top-right-radius: 10px;
							border-top-left-radius: 10px;
							border-bottom-left-radius: 10px;
							border-bottom-right-radius: 10px;
							padding: 10px;
							padding-bottom: 5px;
							text-shadow: 0 0 #1e1a1f;
							width: max-content;
						}
						</style>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url(); ?>">DASHBOARD</a></span></li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									PRODUK
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<?php foreach($kategoriq as $row) { ?>
									<p><a href="<?php echo base_url()."site/kategori/".$row['id_kat']; ?>"><?php echo $row['kategori']; ?></a></p>
									<?php } ?>
									</div>
								</li>
								<li><a href="<?php echo base_url(); ?>site/menjadireseller">CARA DAFTAR DROPSHIPPER</a></li>
								<!-- <li><a href="#">Promosi</a></li> -->
								<li><a href="<?php echo base_url(); ?>#testi">TESTIMONI</a></li>
								<li><a href="<?php echo base_url(); ?>#kontak">CONTACT US</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div> -->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->