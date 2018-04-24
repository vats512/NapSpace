<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Authenticate {

		public function __construct()
        {
        	$this->CI = &get_instance();
        	$this->CI->load->helper('url_helper');

        	$auth_arr = array(
                'admin' => array('index','login'),
                'owner' => array('index','login','signup'),
                'user'=>array('index','login','register')
        	);

          	$ctrl = $this->CI->router->fetch_class();
          	$fun = $this->CI->router->fetch_method();

    		if(!isset($auth_arr[$ctrl]))
    		{
    			$auth_arr[$ctrl] = array('');
    		}

            if(!(in_array($fun, $auth_arr[$ctrl])))
            {
                if($ctrl == "home")
                {

                }
                else if($ctrl == "admin")
                {
                    $session = $this->CI->session->userdata('admin_id');
                    if(!isset($session))
                    {
                        redirect('admin');
                    }
                }
                else if($ctrl == "owner")
                {
                    $session = $this->CI->session->userdata('owner_id');
                    if(!isset($session))
                    {
                        redirect('owner');
                    }
                }
                else
                {
                    $session = $this->CI->session->userdata('user_id');
                	if(!isset($session))
                	{
                		redirect('user');
                	}
                }
            }
        }
	
}