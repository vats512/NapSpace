<?php
class Home_model extends CI_Model
{
		public function __construct()
		{
			$this->load->database();
			$this->load->helper('url');
			$this->load->helper('cookie');
		}
		
		public function search_pg($city, $area="", $gender,$range="",$type="")
		{
			$limit = 30;
			$this->db->select('*');
	        $this->db->where('city',$city);
	        if($gender!="")
	        {
	        	$this->db->where('gender',$gender);
	        }
	        if($range!="")
	        {
	        	$arr = explode('_', $range);
	        	$min = $arr[0];
	        	$max = $arr[1];
	        	$this->db->where('price_from >= ',$min);
	        	$this->db->where('price_from <= ',$max);
	        	$this->db->where('price_to >= ',$min);
	        	$this->db->where('price_to <= ',$max);
	        }
	        if($type!="")
	        {
	        	$this->db->where('type',$type);
	        }
	        if($area!="")
	        {	
	        	$this->db->like('area',$area);
	        }
	        else
	        {
	        	$this->db->order_by('search_count', 'desc');
	        	$this->db->group_by("area"); 
	        }
	    	$this->db->limit($limit);
	        $query=$this->db->get('pg');
	        $result=$query->result_array();
	        
	        if($area=="")
        		$area="all";

        	$this->db->select('*');
        	$this->db->from('search');
        	$this->db->where('area',$area);
        	$query2=$this->db->get();
        	$row=$query2->num_rows();
        	if($row<=0)
        	{
		        $data = array(
	        		'area' => $area,
	        		'city' => $city,
	        		'count' => 1
        		);
        		$this->db->insert('search',$data);
	        }
	        else
	        {
	        	$sql="Update search set count=count+1 where area='".$area."'";
	        	$query1=$this->db->query($sql);
	        }
	        return $result;

		}
		public function get_popular_pg($city, $area, $no, $ids)
		{
			$this->db->select('*');
			$this->db->from('search');
			$this->db->where('city',$city);
			$this->db->order_by('count', 'desc');
			$this->db->limit($no);
			$query = $this->db->get();
			$result = $query->result_array();
			$final_arr = array();
			
			foreach($result as $key => $value)
			{
				$this->db->select('*');
				$this->db->from('pg');
				$this->db->where('area',$value['area']);
				if($ids != "")
				{
					$where = "id NOT IN (".$ids.")";
					$this->db->where($where);
				}
				$this->db->order_by('search_count', 'desc');
				$this->db->limit(1);
				$query = $this->db->get();
				$result2 = $query->row_array();
				array_push($final_arr, $result2);
			}
			return $final_arr;
		}
		public function get_area_suggestion($area,$city)
		{
			$limit = 5;
			$sql = "SELECT * FROM `pg` WHERE
				    (area like '$area%'
				    OR area like '%$area%'
				    OR area like '$area%') 
					AND city = '$city'
					GROUP BY area
					
					ORDER BY CASE 
						WHEN area LIKE '$area%' THEN 1
						WHEN area LIKE '%$area%' THEN 2
						WHEN area LIKE '%$area' THEN 3
				 		ELSE 5 
				 	END, area ASC

			 	LIMIT $limit;";
			 	
		$query = $this->db->query($sql);
		$result_list = $query->result_array();
        return $result_list;
	}
	public function get_pg_info($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('pg');
		$result = $query->row_array();
		return $result;
	}
	public function get_amenities($amenities)
	{
		$this->db->select('*');
		if(trim($amenities) != "")
		{
			$where = 'id IN ('.$amenities.')';
			$this->db->where($where);
		}
		else
		{
			$this->db->where('id','-5000');
		}	
		$query = $this->db->get('amenities');
		$result = $query->result_array();
		return $result;
	}
	public function set_pg_search($id)
	{
		$sql="Update pg set search_count=search_count+1 where id=".$id;
		$query1=$this->db->query($sql);
	}
	public function get_wishlist($id)
	{
		$myArr = array();
		
		if(!($id == NULL))
		{
			$this->db->select('shortlist');
			$this->db->where('id',$id);
			$query = $this->db->get('user');
			$result = $query->row_array();

			$myArr = explode(',', $result['shortlist']);
		}

		return $myArr;
	}
	public function in_wishlist($uid,$pg_id)
	{
		$this->db->select('shortlist');
		$this->db->where('id',$uid);
		$query = $this->db->get('user');
		$result = $query->row_array();
		$shortlist = explode(',', $result['shortlist']);
		if(in_array($pg_id, $shortlist))
			return TRUE;
		else
			return FALSE;
	}
	public function add_to_wishlist($pg_id, $id)
	{
		$this->db->select('shortlist');
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		$result = $query->row_array();

		$tmp_array = explode(',', $result['shortlist']);
		array_push($tmp_array, $pg_id);
		$tmp_array = array_unique(array_filter($tmp_array));

		$res = implode(',', $tmp_array);

		$data = array(
			'shortlist' => $res,
			);

		$this->db->where('id',$id);
		$this->db->update('user',$data);

	}

	public function remove_from_wishlist($pg_id, $id)
	{
		$this->db->select('shortlist');
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		$result = $query->row_array();

		$tmp_array = explode(',', $result['shortlist']);
		if(($key = array_search($pg_id, $tmp_array)) !== false)
    		unset($tmp_array[$key]);
		$tmp_array = array_unique(array_filter($tmp_array));

		$res = implode(',', $tmp_array);

		$data = array(
			'shortlist' => $res,
			);

		$this->db->where('id',$id);
		$this->db->update('user',$data);
	}
	public function get_wishlist_1($id)
	{
		$this->db->get('shortlist');
		$this->db->where('id',$id);
		$query=$this->db->get('user');
		$result=$query->result_array();
		return $result[0]['shortlist'];

	}
	public function get_images($id)
	{
		$this->db->select('form_no');
		$this->db->where('id',$id);
		$query=$this->db->get('pg');
		$result=$query->result_array();
		$directory = "img/pg_images/".$result[0]['form_no']."/";
					$filecount = 0;
					$files = glob($directory . "*");
					if ($files){
					$filecount = count($files);
					}
		$images=array();
		if($filecount==0)
		{
			array_push($images,"000/1.jpg");
		}
		else
		{
			for($i=1;$i<=$filecount;$i++)
			{
				$im=$result[0]['form_no']."/".$i.".jpg";
				array_push($images,$im);
			}
		}
		return $images;
	}
	public function get_address($id)
	{
		$this->db->select('address');
		$this->db->where('id',$id);
		$query=$this->db->get('pg');
		$result=$query->result_array();
		return $result[0]['address'];
	}
	public function subscribe($post)
	{
		$data=array(
			'email'=>$post['email']
			);
		$this->db->insert('newsletter',$data);
	}
}
?>