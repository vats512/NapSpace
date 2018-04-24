<?php
class Owner_model extends CI_Model
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
			$this->db->from('owner');
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
					$this->session->set_userdata('owner_id',$result[0]->id);
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
		public function register_owner($name,$email,$contact,$password)
		{
			$this->db->select('id');
			$this->db->where('email',$email);
			$this->db->or_where('contact',$contact);
			$query=$this->db->get('owner');
			if($query->num_rows()==0)
			{
				$data=array('name'=>$name,'email'=>$email,'contact'=>$contact,'password'=>md5($password));
				$this->db->insert('owner',$data);

				$this->session->set_user('owner_id',$this->db->insert_id());
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function set_active()
		{
			
			$id=$this->session->userdata('owner_id');
			$this->db->where('id',$id);
			$data=array('status'=>'1');
			$this->db->update('owner',$data);

		}
		public function otp_generation()
		{
			$a="0123456789";
			$shuffle=str_shuffle($a);
			$otp=substr($shuffle, 1,4);
			return $otp;
		}

		public function add_pg_request($id,$address,$landmark,$contact)
		{
			//echo $landmark;
			$data=array('owner_id'=>$id,'address'=>$address,'contact'=>$contact,'landmark'=>$landmark);
			$this->db->insert('pg_request',$data);

		}

		public function get_pg($id)
		{
			$this->db->select('id,name,address,area,city,room_price,gender');
			$this->db->where('owner_id',$id);
			$query=$this->db->get('pg');
			$result=$query->result_array();

			return $result;
		}
		public function change_request($data)
		{
			$this->db->insert('request',$data);
			
		}


}

?>