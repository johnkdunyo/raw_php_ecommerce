<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Payment</title>
</head>
<body>

	<h1>Payment</h1>

	<!-- START FORM -->
	<form id="paymentForm">
		<div class="form-group">
			<label for="email">Email Address</label>
			<input type="email" id="email-address" required />
		</div>
		<div class="form-group">
			<label for="amount">Amount</label>
			<input type="tel" id="amount" required />
		</div>
		<div class="form-submit">
			<button type="submit" onclick="payWithPaystack()"> Pay </button>
		</div>
	</form>
	<!-- END FORM -->


	<!-- PAYSTACK INLINE SCRIPT -->
<script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
	const paymentForm = document.getElementById('paymentForm');
	paymentForm.addEventListener("submit", payWithPaystack, false);

	// PAYMENT FUNCTION
	function payWithPaystack(e) {
		e.preventDefault();
		let handler = PaystackPop.setup({
			key: 'pk_test_db5ad70ab3578fab4878a6f58afa6bd51b5e8228', // Replace with your public key
			email: document.getElementById("email-address").value,
			amount: document.getElementById("amount").value * 100,
			currency:'GHS',
			onClose: function(){
			alert('Window closed.');
			},
			callback: function(response){
				window.location = `../actions/PaymentAction.php?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}`
			}
		});
		handler.openIframe();
	}

</script>
	
</body>
</html>