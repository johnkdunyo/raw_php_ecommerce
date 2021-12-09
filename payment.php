<header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end mb-4 page-title">
                	<h3 class="text-white">Payment</h3>
                    <hr class="divider my-4" />

                </div>
                
            </div>
        </div>
</header>

	
<br/>
<br/>
<br/>
<br/>
<!-- START FORM -->
<center>
<form id="paymentForm">
		
		<div class="form-submit">
			<button class="btn btn-outline-success btn-large" type="submit" onclick="payWithPaystack()"> Pay Now </button>
		</div>
</form>
</center>

<br/>
<br/>
<br/>
<br/>
	<!-- END FORM -->


	<!-- PAYSTACK INLINE SCRIPT -->
<script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
	const paymentForm = document.getElementById('paymentForm');
	paymentForm.addEventListener("submit", payWithPaystack, false);
    var Uamount = <?php  echo json_encode($_SESSION['cart_total']); ?>;
	//let Uamount = 1;
    let Uemail = <?php  echo json_encode($_SESSION['login_email']); ?>;
    //console.log(Uamount, Uemail);

	// PAYMENT FUNCTION
	function payWithPaystack(e) {
		e.preventDefault();
		let handler = PaystackPop.setup({
			key: 'pk_test_db5ad70ab3578fab4878a6f58afa6bd51b5e8228', // Replace with your public key
			email: Uemail,
			amount: Uamount * 100,
			currency:'GHS',
			onClose: function(){
			alert('Window closed.');
			},
			callback: function(response){
				alert_toast("Order successfully Placed.");
				alert_toast("Payment successfull.");
				location.replace('index.php')
				//window.location = `../actions/PaymentAction.php?email=${Uemail}&amount=${Uamount}&reference=${response.reference}`
			}
		});
		handler.openIframe();
	}

</script>
	
