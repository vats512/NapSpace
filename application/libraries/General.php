<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class General {

		public function __construct()
        {
        	$this->CI = &get_instance();
            $this->CI->load->model('home_model');
            ini_set('display_errors', 1);
        }
        public function set_alert($type, $message,$url='')
        {
            $this->CI->session->set_flashdata($type,$message);
            redirect($url);
        }
        public function set_ajax_alert($type, $message)
        {
            $this->CI->session->set_flashdata($type,$message);
        }
}
?>