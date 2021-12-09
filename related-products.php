
<br/>
<br/>
<br/>

<?php 
include('admin//db_connect.php');
$prod_data = array();
$qry = $conn->query("SELECT * FROM  product_list  order by rand() ");

while($rows = $qry->fetch_assoc()){
    $prod_data[$rows['id']] = $rows['img_path'];
}

?>
      <section oncontextmenu='return false' class='snippet-body'>
      <div class="pt-5 pb-5">
      <div class="container">
        <div class="row">

            <div class="col-6">
                <h3 class="mb-3">Related products </h3>
            </div>

            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>

            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">
                                <?php $list = array_slice($prod_data, 0, 3, true); 
                                  foreach($list as $id => $img_path):
                                ?>
                                <div class="col-md-4 mb-3">
                                  <div class="card menu-item " >
                                  <img class="card-img-top" alt="100%x280" src="assets/img/<?php echo $img_path ?>"  height="270px" width="120px" >
                                    <div class="card-body">
                                      <h5 class="card-title">Name</h5>
                                      <div class=" row">                                      
                                          <form class="col" action="index.php?page=product-details" method="post">
                                              <button  type = "submit" id= "button" class="btn btn-sm btn-outline-success btn-large btn-block" value =<?php echo '"'.$id.'"'?> name="prod_id" ><i class="fa fa-eye"></i> View Product</button>
                                          </form>
                                          <div class="col">
                                              <button class="btn btn-outline-warning btn-sm btn-block" id="add_to_cart_modal"><i class="fa fa-cart-plus"></i> Add to Cart</button>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>




                        <div class="carousel-item">
                            <div class="row">
                                <?php $list = array_slice($prod_data, 3, 3, true); 
                                  foreach($list as $id => $img_path):
                                ?>
                                <div class="col-md-4 mb-3">
                                  <div class="card menu-item " >
                                  <img class="card-img-top" alt="100%x280" src="assets/img/<?php echo $img_path ?>"  height="270px" width="120px" >
                                    <div class="card-body">
                                      <h5 class="card-title">Name</h5>
                                      <div class=" row">                                      
                                          <form class="col" action="index.php?page=product-details" method="post">
                                              <button  type = "submit" id= "button" class="btn btn-sm btn-outline-success btn-large btn-block"  value =<?php echo '"'.$id.'"'?> name="prod_id" ><i class="fa fa-eye"></i> View Product</button>
                                          </form>
                                          <div class="col">
                                              <button class="btn btn-outline-warning btn-sm btn-block" id="add_to_cart_modal"><i class="fa fa-cart-plus"></i> Add to Cart</button>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

            
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</section>

