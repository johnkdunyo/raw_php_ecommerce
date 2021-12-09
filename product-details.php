<script>
   // console.log( "  <?php echo $_POST['prod_id']; ?>  ")
</script>
<!--  query to pull product with product details-->
<?php 
  include'admin/db_connect.php';
    $qry = $conn->query("SELECT * FROM  product_list where id = ".$_POST['prod_id'])->fetch_array();
?>

<!-- Masthead-->
<header class="masthead">
    <div class="container h-100 " height="60px">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4">
                    <h1 class="text-uppercase text-white font-weight-bold">  <?php echo $qry['name']; ?>  - Details </h1>
                <hr class="divider my-4" />
            </div>
            
        </div>
    </div>
</header>



<section class="mt-5">
       <div class="container">
           <div class="row">
               <div class="col-lg-6 mb-5">
                    <div class="img-bg">
                       <img src="assets/img/<?php echo $qry['img_path'] ?>"class="img-fluid"alt="">
                    </div>
                   
               </div>
               <div class="col-lg-6 prod-des pl-md-5">
                   <h3> <?php echo $qry['name'] ?> </h3>
                   <div class="rating d-flex">
                       <p class="text-left mr-4">
                           <a href="#"class="mr-2 text-dark">5.0</a>
                           <a href="#"><span class="fas fa-star"></span></a>
                           <a href="#"><span class="fas fa-star"></span></a>
                           <a href="#"><span class="fas fa-star"></span></a>
                           <a href="#"><span class="fas fa-star"></span></a>
                           <a href="#"><span class="fas fa-star"></span></a>
                       </p>
                       <p class="text-left mr-4">
                            <p class="mr-2 text-dark">100
                               <span style="color:#2c2e2c8a;">Rating</span>
                            </p>
                       </p>
                   </div>
                   <p class="amount">GH¢ <?php echo $qry['price']; ?></p>
                   <p>
                       <?php echo $qry['description']; ?>
                   </p>
                   <p> A premium and organic product of WithGod Farms. Healthly and safe for consumption. No added chemicals or preservatives.
                   </p>
                   <div class="row mt-4">
                       <div class="input-group col-md-6 d-flex mb-3">
                           <button type="button"class="minus btn mr-2" id="qty-minus">
                               <i class="fas fa-minus"></i>
                           </button>
                        <input type="number" readonly value="1" name="qty" class="form-control
                         text-center" min="1" max="50">
                        <button type="button"class="plus btn ml-2" id="qty-plus">
                            <i class="fas fa-plus"></i>
                        </button>
                       </div>
                   </div>
                   <p> 
                       <br/>
                       <br/>
                       <button class="btn btn-bg py-2 px-3 mr-2" id="add_to_cart_modal">
                           Buy Now
                       </button>
                   </p>
               </div>
           </div>
       </div>
   </section>



   <!-- related products  -->
 <?php include('related-products.php')  ?> 

   <style>
	#uni_modal .modal-footer{
		display:none;
	}
</style>


   <script>
    $('#qty-minus').click(function(){
		var qty = $('input[name="qty"]').val();
		if(qty == 1){
			return false;
		}else{
			$('input[name="qty"]').val(parseInt(qty) -1);
		}
	})
	$('#qty-plus').click(function(){
		var qty = $('input[name="qty"]').val();
			$('input[name="qty"]').val(parseInt(qty) +1);
	})

    $('#add_to_cart_modal').click(function(){
        console.log( " jon home")
        //console.log( <?php  echo $_POST['prod_id'] ?> )
		start_load()
		$.ajax({
			url:'admin/ajax.php?action=add_to_cart',
			method:'POST',
			data:{pid:'<?php echo $_POST['prod_id'] ?>',qty:$('[name="qty"]').val()},
			success:function(resp){
				if(resp == 1 )
					alert_toast("Order successfully added to cart");
					$('.item_count').html(parseInt($('.item_count').html()) + parseInt($('[name="qty"]').val()))
					$('.modal').modal('hide')
					end_load()
                if(!resp == 1){
                    alert_toast("item not added to cart");
                }
			}
		})
	})


   </script>




