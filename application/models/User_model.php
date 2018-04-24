<?php
class User_model extends CI_Model
{
		public function __construct()
		{
			$this->load->database();
			$this->load->helper('url');
			$this->load->helper('cookie');
		}
		public function check_creds($email,$password)
		{
		
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('email',$email);
			$query=$this->db->get();
			$result=$query->result();
			if($query->num_rows())
			{			
				$pass=$result[0]->password;
				$status=$result[0]->status;

				if(md5($password)==$pass and $status==1)
				{
					return $result[0]->id;
				}
				else if(md5($password)==$pass and $status==0)
				{
					$this->session->set_userdata('user_id',$result[0]->id);
					return -1;
				}
				else
				{
					return -2;
				}
			}
			else
			{
				return -2;
			}
		}

		public function set_active()
		{
			
			$id=$this->session->userdata('user_id');
			$this->db->where('id',$id);
			$data=array('status'=>'1');
			$this->db->update('user',$data);

		}
		public function register_user($name,$email,$contact,$password)
		{
			$this->db->select('id');
			$this->db->where('email',$email);
			$this->db->or_where('contact',$contact);
			$query=$this->db->get('user');
			if($query->num_rows()==0)
			{
				$data=array('name'=>$name,'email'=>$email,'contact'=>$contact,'password'=>md5($password));
				$this->db->insert('user',$data);

				$this->session->set_userdata('user_id',$this->db->insert_id());
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function otp_generation()
		{
			$a="0123456789";
			$shuffle=str_shuffle($a);
			$otp=substr($shuffle, 1,4);
			return $otp;
		}

		public function register($post)
		{
			$this->db->select('*');
	    	$this->db->where('email',$post['email']);
	    	$query=$this->db->get('user');
	    	$num=$query->num_rows();
	    	if($num==0)
	    	{
		    	$data=array
		    	(
		    		'username'=> $post['name'],
		    		'password'=> md5($post['password']),
		    		'email'=> $post['email'],
		    		'contact' => $post['contact']
		    	);
		    	if($this->db->insert('user',$data))
		    	{
		    		$insert_id = $this->db->insert_id();
		    		return $insert_id;
		    	}
		    	else
		    	{
		    		return 0;
		    	}    	
		    }
		    else
		    {
		    	return -1;
		    }
		}
		public function get_number($id)
		{
			$this->db->select('contact');
			$this->db->where('id',$id);
			$query=$this->db->get('user');
			$result=$query->result_array();
			return $result[0]['contact'];
		}
		public function get_wishlist($id)
		{
			$this->db->select('shortlist');
			$this->db->where('id',$id);
			$query = $this->db->get('user');
			$result = $query->row_array();

			$this->db->select('*');
			if(trim($result['shortlist']) != "")
				$where = "id IN (".$result['shortlist'].")";
			else
				$where = "id = 0";
			$this->db->where($where);
			$query = $this->db->get('pg');
			$result = $query->result_array();
			return $result;
		}
		public function schedule($post)
		{
			$this->db->insert('scheduled_visit',$post);
			$pg_id = $post['pg_id'];
			$number=$post['contact'];
			$date=date("d-m-Y",strtotime($post['date']));

			$this->db->select('pg.address as address, owner.contact as contact, owner.name as name, pg.name as pg_name');
	      	$this->db->where('pg.id',$pg_id);
	      	$this->db->join('owner','
	      		pg.owner_id = owner.id');
	      	$query=$this->db->get('pg');
	      	$result=$query->row_array();

			$message  = "Hello, your visit has been confirmed. The address of ".$result['pg_name']." is \'".$result['address']."\'. Contact owner at ".$result['contact'].". Thanks for choosing us.";
	      	$message= str_ireplace(" ", "+", $message);
	      	$response = file_get_contents('http://tra.smsmyntraa.com/API/WebSMS/Http/v1.0a/index.php?username=HHMS&password=HHMS@123&sender=VHHSIN&to='.$number.'&message='.$message.'&reqid=&format=text&route_id=TRANSACTIONAL&callback=&unique=1&sendondate=');

	      	$uid = $this->session->userdata('user_id');
	      	$this->db->select('name');
	      	$this->db->where('id',$uid);
	      	$query = $this->db->get('user');
	      	$user = $query->row_array();

	      	$message  = "Hello, visit of your hostel is been confirmed by ".$user['name']."(".$number.") and he will be visiting your hostel on ".$date." at ".$post['time'].". Happy to serve you.";
	      	$message= str_ireplace(" ", "+", $message);
	      	$response = file_get_contents('http://tra.smsmyntraa.com/API/WebSMS/Http/v1.0a/index.php?username=HHMS&password=HHMS@123&sender=VHHSIN&to='.$result['contact'] .'&message='.$message.'&reqid=&format=text&route_id=TRANSACTIONAL&callback=&unique=1&sendondate=');
		}

		public function friend_for_keyword($post)
		{
			$this->db->select('name,city');
			$key = $post['keyword'];
			echo "Hello key :";
			echo $key;
			if($key == 'City' )
			{
				$this->db->like('city',$key);
			}
			// elseif ($key == 'Area' ) 
			// {
			// 	# code...
			// }
			elseif ($key == 'Name' )
			{
				echo "Name"+$key;
				$this->db->like('name',$key);
			}			
			$query=$this->db->get('user');
			$result=$query->result_array();
			return $result;
		}
}
	
?>