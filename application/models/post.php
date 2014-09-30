<?php 

	class Post extends CI_Model{

		public function get_posts($end=20,$start=0){
			$this->db->select()->from('posts')->where('active',1)
				 ->limit($end,$start);

			$query = $this->db->get();
			return $query->result_array();
		}
	}
 ?>