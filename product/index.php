<?php
	include("../header.php");
	include("../navbar.php");
?>
	<link rel="stylesheet" type="text/css" href="product.css">

	<div class="container-fliud">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="https://dummyimage.com/1280x1280/000000/0011ff.jpg" /></div>
						  <div class="tab-pane" id="pic-2"><img src="https://dummyimage.com/1280x1280/000000/0011ff.jpg" /></div>
						  <div class="tab-pane" id="pic-3"><img src="https://dummyimage.com/1280x1280/000000/0011ff.jpg" /></div>
						  <div class="tab-pane" id="pic-4"><img src="https://dummyimage.com/1280x1280/000000/0011ff.jpg" /></div>
						  <div class="tab-pane" id="pic-5"><img src="https://dummyimage.com/1280x1280/000000/0011ff.jpg" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://dummyimage.com/1280x1280/000000/0011ff.jpg" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="https://dummyimage.com/1280x1280/000000/0011ff.jpg" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="https://dummyimage.com/1280x1280/000000/0011ff.jpg" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="https://dummyimage.com/1280x1280/000000/0011ff.jpg" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="https://dummyimage.com/1280x1280/000000/0011ff.jpg" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">Product Name...!</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<h4 class="price">current price: <span>$180</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	include("../footer.php");
?>