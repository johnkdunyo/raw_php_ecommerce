  <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end mb-4 page-title">
                	<h3 class="text-white">Checkout</h3>
                    <hr class="divider my-4" />

                </div>
                
            </div>
        </div>
    </header>
    <div class="container">

        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" id="checkout-frm">
                            <h4>Confirm Delivery Information</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">First Name</label>
                                        <input type="text" name="first_name" required="" class="form-control" value="<?php echo $_SESSION['login_first_name'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Last Name</label>
                                        <input type="text" name="last_name" required="" class="form-control" value="<?php echo $_SESSION['login_last_name'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Address</label>
                                <textarea cols="30" rows="3" name="address" required="" class="form-control"><?php echo $_SESSION['login_address'] ?></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label">Contact Number</label>
                                <input type="text" name="mobile" required="" class="form-control" value="<?php echo $_SESSION['login_mobile'] ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" name="email" required="" class="form-control" value="<?php echo $_SESSION['login_email'] ?>">
                            </div>  

                            <div class="text-center">
                                <button class="btn btn-block btn-outline-primary">Place Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            
            </div>
            


            <div class="col-lg-4">

        <!-- Card -->
        <div class="card mb-4">
        <div class="card-body">

            <h5 class="mb-3">Checkut Amount</h5>

            <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Temporary amount
                <span>GH¢ 53.98</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                <strong>The total amount of</strong>
                <strong>
                    <p class="mb-0">(including VAT)</p>
                </strong>
                </div>
                <span><strong>GH¢ 53.98</strong></span>
            </li>
            </ul>



        </div>
        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="card mb-4">
        <div class="card-body">

            <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Add a discount code (optional)
            <span><i class="fas fa-chevron-down pt-1"></i></span>
            </a>

            <div class="collapse" id="collapseExample">
            <div class="mt-3">
                <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code" class="form-control font-weight-light"
                    placeholder="Enter discount code">
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- Card -->

        <div class="card mb-4">
            <div class="text-center">
                <button class="btn btn-block btn-outline-primary">Place Order</button>
            </div>
        </div>

    </div>
        </div>

        
    </div>

    <script>
        $(document).ready(function () {
        $('.mdb-select').materialSelect();
        $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
            $(this).closest('.select-outline').find('label').toggleClass('active');
            $(this).closest('.select-outline').find('.caret').toggleClass('active');
        }); 
        });


    $(document).ready(function(){
          $('#checkout-frm').submit(function(e){
            e.preventDefault()
          
            start_load()
            $.ajax({
                url:"admin/ajax.php?action=save_order",
                method:'POST',
                data:$(this).serialize(),
                success:function(resp){
                    if(resp==1){
                        alert_toast("Order successfully Placed.")
                        setTimeout(function(){
                            location.replace('index.php?page=home')
                        },1500)
                    }
                }
            })
        })
        })
    </script>