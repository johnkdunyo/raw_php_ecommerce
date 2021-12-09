 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Welcome to <?php echo $_SESSION['setting_name']; ?></h3>
                        <hr class="divider my-4" />
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="index.php?page=about">Learn More</a>

                    </div>
                    
                </div>
            </div>
        </header>

        <!-- ADVERT -->
        <section class="section advert">
            <div class="advert-layout container">
            <div class="item ">
                <img src="assets/img/banner1.jpg" alt="">
                <div class="content left">
                <span>Exclusive Sales</span>
                <h3>Fresh Farm Produce</h3>
                <a href="">View Collection</a>
                </div>
            </div>
            <div class="item">
                <img src="assets/img/banner2.jpg" alt="">
                <div class="content  right">
                <span>New Trending</span>
                <h3>Processed farm produce</h3>
                <a href="">Shop Now </a>
                </div>
            </div>
            </div>
        </section>

        <section class="page-section" id="menu">
            <h2 class="text-center "> Check out our products </h2>
            <br/>
            <br/>
            <div id="menu-field" class="card-deck">
                    <?php 
                        include'admin/db_connect.php';
                        $qry = $conn->query("SELECT * FROM  product_list order by rand() ");
                        while($row = $qry->fetch_assoc()):
                        ?>
                        <div class="col-lg-3">
                        <div class="card menu-item " >
                            <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." height="270px" width="120px">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name'] ?></h5>
                           <!-- <p class="card-text truncate"><?php echo $row['description'] ?></p> -->
                            <div class=" row">
                                <!-- <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row['id'] ?>><i class="fa fa-eye"></i> View</button>   -->    
                                
                                
                                    <form class="col" action="index.php?page=product-details" method="post">
                                        <button  type = "submit" id= "button" class="btn btn-sm btn-outline-success btn-large btn-block" value =<?php echo '"'.$row['id'].'"'?> name="prod_id" ><i class="fa fa-eye"></i> View Product</button>
                                    </form>
                                    <div class="col">
                                        <button class="btn btn-outline-warning btn-sm btn-block" id="add_to_cart_modal"><i class="fa fa-cart-plus"></i> Add to Cart</button>
                                    </div>
                                
                            </div>
                            </div>
                            
                        </div>
                        </div>
                        <?php endwhile; ?>
            </div>
        </section>
    <script>
        
        $('.view_prod').click(function(){
            uni_modal_right('Product','view_prod.php?id='+$(this).attr('data-id'))
        })

        $('#add_to_cart_modal').click(function(){
		start_load()
		$.ajax({
			url:'admin/ajax.php?action=add_to_cart',
			method:'POST',
			data:{pid:'<?php echo $_GET['id'] ?>',qty:$('[name="qty"]').val()},
			success:function(resp){
				if(resp == 1 )
					alert_toast("Order successfully added to cart");
					$('.item_count').html(parseInt($('.item_count').html()) + parseInt($('[name="qty"]').val()))
					$('.modal').modal('hide')
					end_load()
			}
		})
        })
    </script>
	
