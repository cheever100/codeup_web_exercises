<?php
// Procedural Code

require_once 'class.php';
require_once 'order.php';
require_once 'functions.php';

// order form has hidden orderNumber
// that submits with the form

if(inputHas('orderNumber')) {

	// $_POST['flowers'] = ['pansy', 'daisy']

	$customer = new Customer();
	$customer->name = inputGet('customer_name');
	// $customer->orderNumber = inputGet('orderNumber');
	
	$order = new Order();
	// assigned following properites on the 'new Order' object
	$order->orderNumber = inputGet('order_number');
	$order->deliveryAddress = inputGet('delivery_address');
	$order->customer = $customer;
}
if(inputHas('delivered')) {
	$order->deliver();
}
?>
<html>
<head>
	<title></title>
</head>
<body>


	</body><?php if($order->delivered); ?>
		<h1>Your order is here</h1>
		<?php

</html>