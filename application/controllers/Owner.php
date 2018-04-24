<?php

class Owner extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('owner_model');
        $this->load->helper('url_helper');
        $this->load->helper('cookie');
        $this->load->library('session');
    }
    public function index()
    {	
      $data['return_url'] = $this->input->get('return_url');
      $data['action'] = 'owner/login';
      $data['action2'] = 'owner/signup';
    	$this->load->view("common/header");
  		$this->load->view("common/login",$data);
  		$this->load->view("common/footer");
    }
   	public function login()
   	{
	   	$email=$this->input->post('email');
	   	$password=$this->input->post('password');

	   	$check=$this->owner_model->check_creds($email,$password);

        if($check>0)
        {
            $this->session->set_userdata('owner_id',$check);
            redirect("owner/profile"); 
        }
        elseif($check==-1)
        {
            redirect("owner/verify_otp");
        }

        else
        {
            $this->general->set_alert('danger','Wrong username or password!');
        }
   	}
    public function signup()
    {
      $name=$this->input->post('name');
      $email=$this->input->post('email');
      $contact=$this->input->post('contact');
      $password=$this->input->post('password');
      $k=$this->owner_model->register_owner($name,$email,$contact,$password);
      if($k==1)
      {
      	
        redirect("owner/verify_otp");
      }
      else
      {
        echo "already in use";
      }


    }

    public function logout()
    {
        if($this->session->userdata('owner_id')!=null)
        {
            $this->session->unset_userdata('owner_id');
        }
        redirect("home");
    }

    public function verify_otp()
    {

      $otp=$this->owner_model->otp_generation();
      $data['otp']=$otp;
      $this->session->set_userdata('otp',$otp);
      $this->load->view("owner/verify_otp",$data);

    }
    public function check_otp()
    {
      $given=$this->input->post('otp');
      $true=$this->session->userdata('otp');
      if($given==$true)
      {
        $this->owner_model->set_active();

        redirect("owner/profile");
      }
      else
      {
        redirect("owner/verify_otp");
      }
    }
   	public function profile()
   	{
   		$this->load->view("common/header");
   		
   	  
      $id=$this->session->userdata('owner_id');
      $data['details']=$this->owner_model->get_pg($id);
      $this->load->view("owner/profile",$data);
    }
   	public function add_pg()
   	{
   		$this->load->view("owner/add_pg");
   	}
    public function add_pg_data()
    {
      echo $this->input->post();
    }
    public function submit_pg()
    {
      $owner_id=$this->input->post('owner_id');
      $address=$this->input->post('address');
      $landmark=$this->input->post('landmark');
      $contact=$this->input->post('contact');
      $output=$this->owner_model->add_pg_request($owner_id,$address,$landmark,$contact);
      redirect('owner/profile');
    }
    public function submit_change()
    {
      $contact=$this->input->post('contact');
      $pg=$this->input->post('pg');
      $description=$this->input->post('description');
      $data=array('pg'=>$pg,'contact'=>$contact,'description'=>$description);
      $this->owner_model->change_request($data);
      redirect('owner/profile');
    }

}