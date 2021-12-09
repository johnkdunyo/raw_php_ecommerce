<?php

require('../database/connection.php');

// inherit the methods from Connection
class Payment extends Connection{


	function add_payment($email, $total, $ref){
		// return true or false
		return $this->query("insert into payment(email, total, ref) values('$email', '$total', '$ref')");
	}

}

?>