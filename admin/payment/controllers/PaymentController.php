<?php

require('../models/PaymentModel.php');

function add_payment_controller($email, $total, $ref){
    // create an instance of the Payment class
    $payment_instance = new Payment();
    // call the method from the class
    return $payment_instance->add_payment($email, $total, $ref);

}

?>