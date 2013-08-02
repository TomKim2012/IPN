<?php
class EzAuth_Model extends CI_Model {
	
	/*PAYBILL Custom Function */
	function record_transation($input){
		$this->db->insert('transaction', $input);
		return "Successfully completed!";
	}
}	
?>