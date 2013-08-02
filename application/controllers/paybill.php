<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Paybill extends CI_Controller{
    function Paybill(){
        parent::__construct();
        $this->load->model('Paybill_model', 'ezauth');  
    }

    function index(){   
        //Get the input details
       $inp = array(
         'id' => $this->input->get('id'),
         'orig' => $this->input->get('orig'),
         'dest' => $this->input->get('dest'), 
         'tstamp' => $this->input->get('tstamp'),
         'user' => $this->input->get('user'),
         'pass' => $this->input->get('pass'),
         'mpesa_code' => $this->input->get('mpesa_code'),
         'mpesa_acc' => $this->input->get('mpesa_acc'),
         'mpesa_msisdn' => $this->input->get('mpesa_msisdn'),
         'mpesa_trx_date' => $this->input->get('mpesa_trx_date'),
         'mpesa_trx_time' => $this->input->get('mpesa_trx_time'),
         'mpesa_amt' => $this->input->get('mpesa_amt'),
         'mpesa_sender' => $this->input->get('mpesa_sender')
        );

       $transaction_registration = $this->ezauth->record_transaction($inp); 

       echo $transaction_registration;
    }   
}