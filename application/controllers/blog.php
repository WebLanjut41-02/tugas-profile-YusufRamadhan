<?php
	defined('BASEPATH') OR exit('No direct script are allowed');

	class blog extends CI_Controller{

		function index(){
			$this->load->view('blog/index');
		}

		function gallery(){
			$this->load->view('blog/gallery');
		}

		function portofolio(){
			$this->load->view('blog/portofolio');
		}

		function comment()
		{
			$comment= array('comment' =>$this->input->post('comment'));
			$this->load->view('blog/comment',$comment);
		}
	}
?>
