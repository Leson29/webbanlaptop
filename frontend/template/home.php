<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>HẢI SƠN COMPUTER</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>
<body>    
	<!-- header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1>
						<img src="img/tc.png" style="width:100px; height:80px; margin-bottom:10px;">					
						<nav><a id="pull" class="btn btn-danger" href="#">
							<i class="fa fa-bars"></i>
						</a></nav>			
					</h1>
				</div>
				<div id="search" class="col-md-7 col-sm-12 col-xs-12">
					<input type="text" name="text" placeholder="Nhập từ khóa ...">
					<input type="submit" name="submit" value="Tìm Kiếm">
				</div>
				<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					<a class="gio"  href="cart.html">Giỏ hàng</a>
					<a href="#">6</a>				    
				</div>
				
					
			</div>			
		</div>
	</header><!-- /header -->
		<section id="menu1">
			<ul>
                <li><a href="home.html" title="Home">TRANG CHỦ</a></li>
                <li><a href="Introduce.html" title="Introduce">GIỚI THIỆU</a></li>
                <li><a href="Promotion.html" title="Promotion">ƯU ĐÃI</a></li>
                <li><a href="Service.html" title="Service">DỊCH VỤ</a></li>
                <li><a href="Insurance.html" title="Insurance">BẢO HÀNH</a></li>
                <li><a href="https://www.facebook.com/lehaison01" title="Contact">LIÊN HỆ</a></li>
            </ul>
			<li class="login">
				<a href="login/login.php"><i class="fa " style="color: black;">Đăng nhập/Đăng ký</i> </a></li>
		</section>
	<!-- endheader -->

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
							<li class="menu-item">danh mục sản phẩm</li>
							<li class="menu-item"><a href="category.html" title="">DELL</a></li>
							<li class="menu-item"><a href="#" title="">ASUS</a></li>
							<li class="menu-item"><a href="#" title="">ACER</a></li>
							<li class="menu-item"><a href="#" title="">APPLE</a></li>
							<li class="menu-item"><a href="#" title="">MSI</a></li>	
							<li class="menu-item"><a href="#" title="">HP</a></li>	
							<li class="menu-item"><a href="#" title="">LENOVO</a></li>						
						</ul>
						
					</nav>

					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-1.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-2.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-3.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-4.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-5.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-6.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/home/banner-l-7.png" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>

				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="slider">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="img/home/slide-1.png" alt="Macbook Pro" >
								</div>
								<div class="carousel-item">
									<img src="img/home/slide-2.png" alt="MSI">
								</div>
								<div class="carousel-item">
									<img src="img/home/slide-3.png" alt="ASUS ROG" >
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>

					<div id="banner-t" class="text-center">
						<div class="row">
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
							</div>
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
							</div>
						</div>					
					</div>

					<div id="wrap-inner">
						<div class="products">
							<h3>sản phẩm nổi bật</h3>
							<div class="product-list row">
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">Laptop Dell Gaming G15 5515 R5 5600H/16GB/512GB/4GB RTX3050/120Hz/OfficeHS/Win11 (P105F004DGR)</a></p>
									<p class="price">22.000.000</p>	  
									<div class="marsk">
										<a href="details.html">Xem chi tiết</a>
									</div>   
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                                  
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-2.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#" >Dell XPS 13 9360 Core i5 8250U 8GB SSD 256GB 13,3 FHD IPS</a></p>
									<p class="price">17.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>   
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                    	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-3.png" style="height: 100px;"  class="img-thumbnail"></a>
									<p><a href="#">Macbook Air M1</a></p>
									<p class="price">15.000.000</p>	  
									<div class="marsk">
										<a href="#" >Xem chi tiết</a>
									</div>   
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                    	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-4.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">MSI BRAVO 15 A4DCR-270VN</a></p> 
									<p class="price">20.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>   
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                    	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">Laptop Dell Gaming G15 5515 R5 5600H/16GB/512GB/4GB RTX3050/120Hz/OfficeHS/Win11 (P105F004DGR)</a></p>
									<p class="price">22.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>  
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                     	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-4.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">MSI BRAVO 15 A4DCR-270VN</a></p>
									<p class="price">20.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>  
									<button class="btn btn-danger"style="background-color: pink;">Thêm vào giỏ hàng</button>                     	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-3.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">Macbook Air M1</a></p>
									<p class="price">15.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-2.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">Dell XPS 13 9360 Core i5 8250U 8GB SSD 256GB 13,3 FHD IPS</a></p>
									<p class="price">17.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>    
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                   	                        
								</div> 
							</div>                	                	
						</div>

						<div class="products">
							<h3>sản phẩm mới</h3>
							<div class="product-list row">
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">Laptop Dell Gaming G15 5515 R5 5600H/16GB/512GB/4GB RTX3050/120Hz/OfficeHS/Win11 (P105F004DGR)</a></p>
									<p class="price">22.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>  
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                     	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-2.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">Dell XPS 13 9360 Core i5 8250U 8GB SSD 256GB 13,3 FHD IPS</a></p>
									<p class="price">17.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>  
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                     	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-3.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">Macbook Air M1</a></p>
									<p class="price">15.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>  
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                     	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-4.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">MSI BRAVO 15 A4DCR-270VN</a></p>
									<p class="price">20.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>     
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                  	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">Laptop Dell Gaming G15 5515 R5 5600H/16GB/512GB/4GB RTX3050/120Hz/OfficeHS/Win11 (P105F004DGR)</a></p>
									<p class="price">22.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>     
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                  	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-2.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">Dell XPS 13 9360 Core i5 8250U 8GB SSD 256GB 13,3 FHD IPS</a></p>
									<p class="price">17.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>  
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                     	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-3.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">Macbook Air M1</a></p>
									<p class="price">15.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div> 
									<button class="btn btn-danger" style="background-color: pink;">Thêm vào giỏ hàng</button>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-4.png" style="height: 100px;" class="img-thumbnail"></a>
									<p><a href="#">MSI BRAVO 15 A4DCR-270VN</a></p>
									<p class="price">20.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>     
									<button class="btn btn-danger" style="background-color: pink; ">Thêm vào giỏ hàng</button>                  	                      
								</div> 
							</div>    
						</div>
					</div>
					
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->

	<!-- footer -->
	<footer id="footer">			
		<div id="footer-t">
			<div class="container">
				<div class="row">				
					<div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">						
						<a href="#"><img src="img/tc.png" style="height: 150px; width: 180px;"></a>		
					</div>
					<div id="about" class="col-md-3 col-sm-12 col-xs-12">
						<h3>About us</h3>
						<p class="text-justify">Hải Sơn Computer được thành lập với phương châm phục vụ cho người dùng Việt Nam những sản phẩm chất lượng nhất, có khả năng làm được những công việc phức tạp mà con người rất khó có thể làm.</p>
					</div>
					<div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Phone Sale: (+84) 0326.935.389</p>
						<p>Email: sonseo2k1@gmail.com</p>
					</div>
					<div id="contact" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>
						<p>Address : Trường ĐH CNTT & TT - Đại học Thái Nguyên</p>
					</div>
				</div>				
			</div>
			<div id="footer-b">				
				<div class="container">
					<div class="row">
						<div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>Hải Sơn Computer - Nơi chất lượng đi đầu.</p>
						</div>
						<div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>© 2022 By Hải Sơn</p>
						</div>
					</div>
				</div>
				<div id="scroll">
					<a href="#"><img src="img/home/scroll.png"></a>
				</div>	
			</div>
		</div>
	</footer>
	<!-- endfooter -->
</body>
</html>