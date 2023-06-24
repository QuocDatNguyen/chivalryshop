  
<?php
include_once("connection.php");
?>
     <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/pro9.png" style="width: 40%;" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                            Fado <span class="primary"> <strong></strong></span>
							</h2>
							<h4 class="caption subtitle">Smart Talking Robots</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/pro8.png" style="width: 40%;" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                            Amazon <span class="primary"> <strong></strong></span>
							</h2>
							<h4 class="caption subtitle">Remote Controller Robots</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/pro7.png" style="width: 40%;" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                            Pruugo <span class="primary"> <strong></strong></span>
							</h2>
							<h4 class="caption subtitle">Remote Controller Robots </h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/pro6.png" style="width: 40%;" alt="Slide">
						<div class="caption-group">
						    <h2 class="caption title">
                            Peter <span class="primary"><strong></strong></span>
							</h2>
							<h4 class="caption subtitle">Remote Controller Robots</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <!--Gioi thieu cac chuc nang-->
    
    <!-- <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>TOPS</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>BOTTOM</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Payment security</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New Product</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
    <!-- End promo area -->
    
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">PRODUCT</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="?func=dathang&ma=<?php echo  $row['Product_ID']?>" class="add-to-cart-link" ><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?></ins> <del><?php echo  $row['oldPrice']?></del>
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <!-- <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/brand6.png" alt="">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Bestseller</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/pro9.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Fado</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$2.200.000</ins> <del>$2.425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/pro8.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"></a>Amazon</h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$1.200.000</ins> 
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/pro7.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Pruugo</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$1.400.000</ins>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/pro6.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Peter</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$1.400.000</ins>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/pro5.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Moxie</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$3.000.000</ins> 
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/pro4.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Line</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$2.800.000</ins>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Latest</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/pro3.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Cele</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$2.300.000</ins>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/pro2.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Retro</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$1.000.000</ins> 
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/pro1.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">RC</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$1.500.000</ins> 
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
