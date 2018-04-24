<?php
class Admin_model extends CI_Model
{
		public function __construct()
		{
			$this->load->database();
			$this->load->helper('url');
			$this->load->helper('cookie');
		}
		// public function bhadako()
		// {

		// 	$this->db->select('*');
		// 	$query=$this->db->get('temp');
		// 	$result=$query->result_array();
		// 	foreach($result as $k)
		// 	{
		// 		$data=array('room_price'=>$k['room_price'],'rules'=>$k['rules']);
		// 		$this->db->where('id',$k['id']);
		// 		$this->db->update('pg',$data);
		// 	}
		// }
		public function view_search()
		{
			$this->db->select('*');
			$result=$this->db->get('search');
			return $result->result_array();
		}
		public function view_users()
		{
			$this->db->select('*');
			$result=$this->db->get('user');
			return $result->result_array();
		}
		public function pg_trends()
		{	
			$this->db->select('id,search_count,list_count,name,area');
			$query1=$this->db->get('pg');
			$result1=$query1->result_array();
			return $result1;
		}
		public function list_count()
		{
			$this->db->select('id,shortlist');
			$query=$this->db->get('user');
			$result=$query->result_array();
			for($i=0;$i<sizeof($result);$i++)
			{
				$k=explode(',',$result[$i]['shortlist']);
				foreach($k as $j)
				{
					$sql="Update pg set list_count=list_count+1 where id='".$j."'";
					$query2=$this->db->query($sql);	
				}
					
			}
		}
		public function get_owner()
		{
			$this->db->select('*');
			$query=$this->db->get('owner');
			$result=$query->result_array();
			return $result;
		}
		public function get_pg_request()
		{
			$this->db->select('*');
			$this->db->where('status','0');
			$query=$this->db->get('pg');
			$result=$query->result_array();
			return $result;
		}

		public function add_pg_request()
		{
			$this->db->select('*');
			$query=$this->db->get('pg_request');
			$result=$query->result_array();
			return $result;
		}

		public function delete_visited($id)
		{
			$query="delete from pg_request where id='".$id."'";
			$result=$this->db->query($query);
		}

		public function request_changes()
		{
			$this->db->select('*');
			$query=$this->db->get('request');
			$result=$query->result_array();
			return $result;
		}

		public function delete_handled($id)
		{
			$query="delete from request where id='".$id."'";
			$result=$this->db->query($query);
		}

		public function get_all_amenities()
		{
			$this->db->select('*');
			$query=$this->db->get('amenities');
			$result=$query->result_array();
			return $result;
		}

		public function get_all_rules()
		{
			$this->db->select('*');
			$this->db->where('status','1');
			$query=$this->db->get('rules');
			$result=$query->result_array();
			return $result;
		}

		public function pg_data_to_db($name, $address, $contact, $area, $lat, $long, $room_price, $gender, $vacant_beds, $city, $price_from, $price_to, $type, $form_no, $amenities, $rules,$property_desc)
		{
			$this->db->select('id');
			$this->db->where('contact',$contact);
			$query=$this->db->get('owner');
			$result=$query->row_array();

			$owner_id = $result['id'];

			#id,ownerid,name,address,area,amenities,room_price,rules,gender,vacant_beds,city,price_to,price_from,type,form_no
			
			$data=array('owner_id'=>$owner_id,'name'=>$name,'address'=>$address,'area'=>$area ,'latitude'=>$lat, 'longitude'=>$long, 'amenities'=>$amenities , 'room_price'=>$room_price,'rules'=>$rules,'gender'=>$gender,'vacant_beds'=>$vacant_beds ,'city'=>$city ,'price_to'=>$price_to,'price_from'=>$price_from
				,'type'=>$type,'form_no'=>$form_no);
  			$this->db->insert('pg',$data);
		}

		public function owner_data_to_db($name, $email, $contact, $password)
		{
			$data=array('name'=>$name , 'email'=>$email , 'contact'=>$contact , 'password'=>md5($password) , 'status'=>'1');
			$this->db->insert('owner',$data);
		}
}
?>