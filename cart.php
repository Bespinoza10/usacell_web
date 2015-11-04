<!doctype html>
<html class="no-js" lang="">
    <head>
		<!-- Basic page needs
		============================================ -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>USACELL - Shopping Cart</title>
        <meta name="description" content="">

        <?php include('SECTIONS/head_css_js.php')?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

	<!-- header start -->
	<?php include('SECTIONS/nav.php')?>
	<!-- header end -->
	<!-- breadcrumb-area start -->
	<div class="breadcrumb-area pages-area-product">
		<div class="container">
			<div class="row">
				<div class="col-md-12 breadcrumb-padding pages-p">
					<div class="breadcrumb-title">
						<h1>Shopping Cart </h1>
					</div>
					<div class="breadcrumb-list">
						<ul class="breadcrumb">
							<li>You are here: </li>
							<li><a href="index.html">Home</a></li>
							<li>Shopping Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb-area end -->
	<!-- checkout-area start-->
	<div class="checkout-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="row wish-m">
						<div class="col-md-6">
							<div class="wish-cart-title"><h3>Carts</h3></div>
						</div>
						<div class="col-md-6">
							<div class="wish-cart-icon">
								<a href="#"><i class="fa fa-shopping-cart"></i></a>
								<a href="#"><i class="fa fa-print"></i></a>
								<a href="#"><i class="fa fa-floppy-o"></i></a>
								<a href="#"><i class="fa fa-arrow-left"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12">
					<div class="cart-search">
						<form action="#">
							<p>Cart name: </p>
							<input type="text" />
						</form>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="checkout-content table-responsive">
					<table>
						<thead>
							<tr>
								<th class="cart_product_no">#</th>
								<th class="cart-img-title">Image</th>
								<th class="cart-pro-name">Name</th>
								<th class="cart-pro-price">Unit price</th>
								<th class="cart-pro-quantity">Quantity</th>
								<th class="cart-pro-total-price">Total price </th>
								<th class="cart-pro-add">Add to</th>
								<th class="cart-pro-add">Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table-row1">
								<td class="cart_product_no">1</td>
								<td class="cart_product_image_value">
									<div class="pro-photo-checkout"><img src="img/product/6.jpg" alt="" /></div>
								</td>
								<td class="cart_product_name_value">
									<p class="cart_product_name"><a href="#">Women Cloth 5 <br /><span>WC-LB-001</span></a></p>
								</td>
								<td class="cart_product_price_value">
									<span class="product_price">$104.99</span>
								</td>
								<td class="cart_product_quantity_value">
									<div class="product-quantity-t">
										<input type="text" placeholder="1"/>
										<a href="#"><i class="fa fa-refresh"></i></a>
									</div>
								</td>
								<td class="cart_product_total_value"><span class="product_price">$104.99</span></td>
								<td class="cart_product_add_to">
									<div class="add-to-box"><input type="checkbox" /></div>
								</td>
								<td class="cart_product_add_delete">
									<div class="add-delete">
										<a href="#"><i class="fa fa-times-circle"></i></a>
									</div>
								</td>
							</tr>
							<tr class="table-row2">
								<td class="cart_product_no">2</td>
								<td class="cart_product_image_value">
									<div class="pro-photo-checkout"><img src="img/product/1.jpg" alt="" /></div>
								</td>
								<td class="cart_product_name_value">
									<p class="cart_product_name"><a href="#">Women Cloth 1 <br /><span>WC-LB-011</span></a></p>
								</td>
								<td class="cart_product_price_value">
									<span class="product_price">$63.00</span>
								</td>
								<td class="cart_product_quantity_value">
									<div class="product-quantity-t">
										<input type="text" placeholder="1"/>
										<a href="#"><i class="fa fa-refresh"></i></a>
									</div>
								</td>
								<td class="cart_product_total_value">
									<span class="product_price">$63.00</span>
								</td>
								<td class="cart_product_add_to">
									<div class="add-to-box"><input type="checkbox" /></div>
								</td>
								<td class="cart_product_add_delete">
									<div class="add-delete">
										<a href="#"><i class="fa fa-times-circle"></i></a>
									</div>
								</td>
							</tr>
							<tr class="table-row3">
								<td class="cart_empty_total">Total</td>
								<td class="cart_empty_footer" colspan="3"></td>
								<td class="cart_final_total_title">2</td>
								<td class="cart_total_value">$167.99 </td>
								<td class="cart_empty_footer" colspan="1"></td>
								<td class="cart_total_value">
								</td>
							</tr>
						</tbody>
					</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="convert-cart">
						<div class="wishlist-cart">
							<a href="checkout.php"><input type="button" value="Proceed to checkout" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- checkout-area end-->

	<!-- footer start -->
	<?php include('SECTIONS/footer.php')?>
	<!-- footer end -->

		<!-- JS -->

		<!-- jquery js -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>

		<!-- owl.carousel.min js -->
        <script src="js/owl.carousel.min.js"></script>

		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>

		<!-- jquery.countdown js -->
        <script src="js/jquery.countdown.min.js"></script>

		<!-- parallax js -->
        <script src="js/parallax.js"></script>

		<!-- jquery.collapse js -->
        <script src="js/jquery.collapse.js"></script>

		<!-- jquery.easing js -->
        <script src="js/jquery.easing.1.3.min.js"></script>

		<!-- jquery.scrollUp js -->
        <script src="js/jquery.scrollUp.min.js"></script>

		<!-- knob circle js -->
        <script src="js/jquery.knob.js"></script>

		<!-- jquery.appear js -->
		<script src="js/jquery.appear.js"></script>

		<!-- jquery.mixitup js -->
		<script src="js/jquery.mixitup.min.js"></script>

		<!-- fancybox js -->
		<script src="js/fancybox/jquery.fancybox.pack.js"></script>

		<!-- jquery.counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>

		<!-- rs-plugin js -->
		<script type="text/javascript" src="lib/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="lib/rs-plugin/rs.home.js"></script>

		<!-- wow js -->
        <script src="js/wow.js"></script>
		<script>
			new WOW().init();
		</script>

		<!-- plugins js -->
        <script src="js/plugins.js"></script>

		<!-- main js -->
        <script src="js/main.js"></script>

    </body>
</html>
