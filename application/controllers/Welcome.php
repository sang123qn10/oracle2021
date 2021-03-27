<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//http://localhost/Codeignite_3/Crud/displaydata
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function hello()
	{
		$data['pageName']= 'home';
		$data['pageName1']= 'hello';
		
 		$this->load->view('start',$data);
	
		 $this->load->library('session');
		 $_SESSION['key']= 'Huy';
		 $this->session->set_userdata('name', 'Huy');
		 $newdata = array(
			 'username' => 3,
			 'email' => 'johndoe@some-site.com',
			 'logged_in' => FALSE
			 );
		 $this->session->set_userdata($newdata);
		 echo $this->session->userdata('email');
		 $name = $this->session->userdata('email');
		 echo $name;

		 $this->session->unset_userdata($newdata);
		 $this->session->unset_userdata('key');
		echo '<br>';
		 foreach($newdata as $x => $y){
			 echo $x.' '.$y.'<br>';
			
		 }

	}
	
}
