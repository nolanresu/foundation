<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>PSA-IMS | Product</title>
	<!-- Compressed CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

	<!-- Compressed JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
	<style type="text/css">
		
		.product-details {
			background-color: #fefefe;
			padding: 2rem;
		}

		.product-option-selection input[type=radio] {
			display: none;
			margin: 10px;
		}

		.product-option-selection input[type=radio] + label {
			display: inline-block;
			margin: -2px;
			border-color: #ddd;
			margin-right: 0.3rem;
			margin-top: 2px;
			margin-bottom: 10px;
			padding: 0.4rem;
		}

		.product-option-selection input[type=radio]:checked + label {
			background: #b6ddf6;
			border: 1px solid #1779ba;
			border-radius: 3px;
			color: #3d3d3d;
			font-weight: 600;
			padding: 0.3rem;
		}

		.product-details-add-to-cart {
			margin-top: 1rem;
			border-radius: 5px;
			background-color: #fefefe;
			box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2);
			border: solid 1px #e6e6e6;
			margin-bottom: 25px;
			padding: 22px;
		}

		.product-details-add-to-cart .in-stock {
			color: #1eac60;
			font-weight: 700;
		}

		.product-details-add-to-cart .dim-text {
			color: #8a8a8a;
		}

		.product-details-add-to-cart .price {
			float: right;
			font-weight: 600;
			font-size: 24px;
			color: #4a4a4a;
		}

		.product-details-add-to-cart .qty {
			width: 60px;
			display: inline-block;
			text-align: center;
			margin-left: 15px;
			margin-bottom: 0;
		}

		.product-details-add-to-cart .button {
			margin-bottom: 0;
			font-size: 1rem;
			font-weight: 600;
		}


	</style>
</head>
<body>
	<div class="none">
		<div class="row align-center">
        <div class="product-details column medium-6 center-text-for-small-only">
          <h1>Product Name</h1>
          <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id magna ac quam semper.deta</p>
          <div class="row">
            <div class="column small-12 large-6">
              <h6 class="product-color-title">Colors</h6>
              <form class="product-option-selection">
                <input type="radio" name="radios" value="red" id="radio1" checked>
                <label for="radio1" class=" dark-hollow expand"><img src="https://placehold.it/30x30"/></label>
                <input type="radio" name="radios" value="blue" id="radio2">
                <label for="radio2" class=" dark-hollow expand"><img src="https://placehold.it/30x30"/></label>
                <input type="radio" name="radios" value="yellow" id="radio3">
                <label for="radio3" class=" dark-hollow expand"><img src="https://placehold.it/30x30"/></label>
                <input type="radio" name="radios" value="orange" id="radio4">
                <label for="radio4" class=" dark-hollow expand"><img src="https://placehold.it/30x30"/></label>
                <input type="radio" name="radios" value="green" id="radio5">
                <label for="radio5" class=" dark-hollow expand"><img src="https://placehold.it/30x30"/></label>
              </form>
            </div>
            <div class="column small-12 large-6">
              <h6 class="product-color-title">Size</h6>
              <form class="product-option-selection">
                <select>
                  <option value="husker">Small</option>
                  <option value="starbuck">Medium</option>
                  <option value="hotdog">Large</option>
                  <option value="apollo">X-Large</option>
                  <option value="apollo">XX-Large</option>
                </select>
              </form>
            </div>
          </div>
          <div class="product-details-add-to-cart">
            <p><span class="in-stock">In Stock</span> <span class="dim-text">(Only 3 left in Stock)</span></p>
            <hr>
            <p class="price">$19.99</p>
            <p> <span>Qty:</span> <input class="qty" type="text" value="1"> </p>
            <button class="button expanded">Add to Cart</button>
          </div>
          <p class="shipping">Available for Free Ground Shipping &amp; Return</p>
        </div>
      </div>
	</div>
</body>
</html>