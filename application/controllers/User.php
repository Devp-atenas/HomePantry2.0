<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){

		// load base_url
		$this->load->helper('url');

		// Check form submit or not
		if($this->input->post('upload') != NULL ){
			$data = array();
			if(!empty($_FILES['file']['name'])){
				// Set preference
				$config['upload_path'] = 'uploads/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size']    = '100';	// max_size in kb
				$config['file_name'] = $_FILES['file']['name'];
				//Load upload library
				$this->load->library('upload',$config);
				// File upload
				if($this->upload->do_upload('file')){
					// Get data about the file
					$uploadData = $this->upload->data();
					$filename = $uploadData['file_name'];
					$data['response'] = 'successfully uploaded '.$filename;
				}else{
					$data['response'] = 'failed';
				}
			}else{
				$data['response'] = 'failed';
			}
			// load view
			$this->load->view('user_view',$data);
		}else{
			// load view
			$this->load->view('user_view');
		}
	}

}
