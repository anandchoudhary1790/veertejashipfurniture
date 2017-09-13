<?php 
/**
* 
*/
class Pages_model extends CI_Model
{
	public function save_logo($data)
	{
		$logo_insert = array(
				'logo_img' => $data					
			);
			$insert = $this->db->insert('site_logo', $logo_insert);
		    return $insert;

	}

	
}