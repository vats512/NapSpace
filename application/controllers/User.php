<?php

class User extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->helper('cookie');
    }

    public function index()
    {   
        $data['return_url'] = $this->input->get('return_url');
        if(isset($data['return_url']))
          $this->general->set_ajax_alert('info','Please login to continue!');
        
        $data['action'] = 'user/login';
        $data['action2'] = 'user/register';
        $this->load->view("common/header");
        $this->load->view("common/login",$data);
        $this->load->view("common/footer");
    }

    public function login()
    {
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $check=$this->user_model->check_creds($email,$password);

        if($check>0)
        {
            $this->session->set_userdata('user_id',$check);
            redirect(""); 
        }
        elseif($check==-1)
        {
            $id=$this->session->userdata('user_id');
            $number=$this->user_model->get_number($id);
            $this->verify_otp($number);
        }

        else
        {
            $this->general->set_alert('danger','Wrong username or password!',"user");
        }
    }
    public function register()
    {
    	$post=$this->input->post();
    	
             $name=$this->input->post('name');
      $email=$this->input->post('email');
      $contact=$this->input->post('contact');
      $password=$this->input->post('password');
      $k=$this->user_model->register_user($name,$email,$contact,$password);
      if($k==1)
      {
        $this->verify_otp($contact);
      }
      else
      {
        echo "already in use";
      }

    }
    
    public function logout()
	{
	    if($this->session->userdata('user_id')!=null)
      {
          $this->session->unset_userdata('user_id');
      }
	    redirect("home");
	}
    
    public function verify_otp($number)
    {

      $otp=$this->user_model->otp_generation();

      $data['otp']=$otp;
      $message  = "Hello your otp is ".$otp.". ";
      $message= str_ireplace(" ", "+", $message);
      $response = file_get_contents('http://tra.smsmyntraa.com/API/WebSMS/Http/v1.0a/index.php?username=HHMS&password=HHMS@123&sender=VHHSIN&to='.$number.'&message='.$message.'&reqid=&format=text&route_id=TRANSACTIONAL&callback=&unique=1&sendondate=');


      $this->session->set_userdata('otp',$otp);
      $this->load->view("user/verify_otp",$data);

    }
    public function check_otp()
    {
      $given=$this->input->post('otp');
      $true=$this->session->userdata('otp');
      if($given==$true)
      {
        $this->user_model->set_active();

        redirect("");
      }
      else
      {
        redirect("user/verify_otp");
      }
    }
    public function view_wishlist()
    {
        $id = $this->session->userdata('user_id');

        $data['wishlist'] = $this->user_model->get_wishlist($id);

        $this->load->view('common/header');
        $this->load->view('user/view_wishlist',$data);
        $this->load->view('common/footer');
    }
    public function schedule_visit()
    {
        if($this->session->userdata('user_id')!="")
        {
          $data['id'] = $this->input->get('id');
          $this->load->view('common/header');
          $this->load->view('home/schedule_visit',$data);
          $this->load->view('common/footer');
        }
        else{
          redirect("/user");
        }     
    }
    public function save_scheduled_visit()
    {
      $post=$this->input->post();
      $this->user_model->schedule($post);

      $this->load->view('common/header');
      $this->load->view('home/success_visit');
      $this->load->view('common/footer');
    }
    public function contact_us()
    {
        $this->general->set_alert('success','Your feedback has been received. Thank you!',"home/contact");
    }
    
    public function find_friends()
    {
      $this->load->view('common/header');
      $this->load->view('user/find_friends');
      $this->load->view('common/footer');
    }

    public function finding_friends_keyword()
    {
      $post=$this->input->post();
      $data['friends'] = $this->user_model->friend_for_keyword($post);
      $this->load->view('common/header');
      $this->load->view('user/list_friends', $data);
      $this->load->view('common/footer');
    }
}
?>