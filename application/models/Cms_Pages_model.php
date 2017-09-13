<?php 
class Cms_Pages_model extends CI_Model
{
	public function save_page($data){
		$new_page_insert_data = array(
				'page_title' => $this->input->post('page_title'),
				'page_short_description' => $this->input->post('page_short_description'),
				'page_description' => $this->input->post('page_description'),			
				'page_img' => $data					
			);
			$insert = $this->db->insert('cms_pages', $new_page_insert_data);
		    return $insert;
	}
	public function save_slider($data){
		$new_member_insert_data = array(
				'slider_title' => $this->input->post('slider_title'),
				'slider_tag_line' => $this->input->post('slider_tag_line'),
				'slider_description' => $this->input->post('slider_description'),			
				'slider_img' => $data					
			);
		$insert = $this->db->insert('slider', $new_member_insert_data);
	    return $insert;
	}
	public function save_portfolio_category($data){
		$portfolio_insert_data = array(
			'portfolio_category' => $this->input->post('project_cat')
			);
		$insert = $this->db->insert('add_portfolio_category', $portfolio_insert_data);
		return $insert;
	}
	public function save_portfolio($data){
		$insert_portfolio_record  = array(
			'project_cat' => $this->input->post('project_cat'),
			'project_title' => $this->input->post('project_title'),
			'project_description' => $this->input->post('project_description'),
			'project_img' => $data
			);
		$insert_portfolio = $this->db->insert('portfolio',$insert_portfolio_record);
		return $insert_portfolio;
	}
	public function save_blog($data){
		$insert_blog_record  = array(
			'blog_title' => $this->input->post('blog_title'),
			'blog_description' => $this->input->post('blog_description'),
			'blog_img' => $data,
			'blog_added' => time(),
			'blog_category' => $this->input->post('blog_category')
			);
		$insert_blog = $this->db->insert('blog',$insert_blog_record);
		return $insert_blog;
	}
	public function save_work($data){
		$insert_work_record  = array(
			'work_title' => $this->input->post('work_title'),
			'work_description' => $this->input->post('work_description')
			);
		$insert_work = $this->db->insert('work_process',$insert_work_record);
		return $insert_work;
	}
	public function save_section($data){
		$insert_section_record  = array(
			'section_title' => $this->input->post('section_title'),
			'section_description' => $this->input->post('section_description')
			);
		$insert_section = $this->db->insert('add_section',$insert_section_record);
		return $insert_section;
	}
	public function save_service($data){
		$insert_service_record  = array(
			'service_title' => $this->input->post('service_title'),
			'service_description' => $this->input->post('service_description')
			);
		$insert_service = $this->db->insert('add_service',$insert_service_record);
		return $insert_service;
	}
	public function save_team($data){
		$insert_team_record  = array(
			'job_title' => $this->input->post('job_title'),
			'job_description' => $this->input->post('job_description'),
			'job_member_name' => $this->input->post('job_member_name'),
			'team_member_img' => $data,
			'team_fb_url' => $this->input->post('team_fb_url'),
			'team_googleplus_url' => $this->input->post('team_googleplus_url'),
			'team_insta_url' => $this->input->post('team_insta_url'),
			'team_twitter_url' => $this->input->post('team_twitter_url')
			);
		$insert_team = $this->db->insert('our_team',$insert_team_record);
		return $insert_team;
	}
	public function delete_pages($id){
		$this->db->where('id', $id);
		$this->db->delete('cms_pages'); 
	}
}