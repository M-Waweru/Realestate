<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller{
	public function stepone(){
		if ($this->session->userdata('emailadd')!=''){
			$this->load->model('listing_model');

			$pagedata['areadata'] = $this->listing_model->retrieveLocations();

			$this->load->view('navbar');
			$this->load->view('addlisting1', $pagedata);
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('loginfirst', "Please sign in first before you can proceed");
			redirect(base_url('accounts/login'));
		}
	}

	public function addlisting(){
		$this->load->library('form_validation');

		// $this->form_validation->set_rules('fullname', 'Full Name', 'required');
		// $this->form_validation->set_rules('emailadd', 'Email address', 'required');
		// $this->form_validation->set_rules('pwd', 'Password', 'required');
		// echo '1';
		// if ($this->form_validation->run() == FALSE) {
		// 	// $this->load->view('addlisting1');
		// 	echo '1';
		// } else {
		$listingname = $this->input->post('listingname');
		$category = $this->input->post('category');
		$type = $this->input->post('type');
		$listingdesc = $this->input->post('listingdesc');
		$area = $this->input->post('area');
		$price = $this->input->post('price');
		$bedrooms = $this->input->post('bedrooms');
		$bathrooms = $this->input->post('bathrooms');
		echo '1';
			// File upload start
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 200;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->model('listing_model');

		if ($this->listing_model->addlisting($listingname, $category, $type, $listingdesc, $area, $price, $bedrooms, $bathrooms)){
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('upload_file'))
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
			// print_r($data);
				$filepath = $this->upload->data('file_path');
				$filename = $this->upload->data('file_name');
				// $this->load->view('upload_success', $data);
			}
			// File upload finish
			$this->listing_model->uploadMedia($filename, $filepath);
			echo "Successful";
			redirect(base_url());
		} else {
			echo "Failed";
		}
		// }
	}

	public function categorylisting(){
		$categoryname = $this->input->get('category');
		$this->load->model('listing_model');

		$listingdata['pagedata'] = $this->listing_model->retrieveCategoryListings($categoryname);
		$listingdata['pagename'] = $categoryname;

		$this->load->view('navbar');
		$this->load->view('listingpage', $listingdata);
		$this->load->view('footer');
	}

	public function typelisting(){
		$typename = $this->input->get('type');
		$this->load->model('listing_model');

		$listingdata['pagedata'] = $this->listing_model->retrieveTypeListings($typename);
		$listingdata['pagename'] = $typename;

		$this->load->view('navbar');
		$this->load->view('listingpage', $listingdata);
		$this->load->view('footer');
	}

	public function singlelisting(){
		$listingno = $this->input->get('listing_no');
		$this->load->model('listing_model');

		$listingdata['details'] = $this->listing_model->retrieveListing($listingno);
		$listingdata['media'] = $this->listing_model->retrieveMedia($listingno);

		$this->load->view('navbar');
		$this->load->view('singlelistingpage', $listingdata);
		$this->load->view('footer');	
	}
}

?>