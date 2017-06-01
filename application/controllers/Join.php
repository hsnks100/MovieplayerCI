<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller {

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
	public function index()
	{
        $this->load->database(); 
        $this->load->model('join_model');

        $data['result'] = $this->join_model->getData();
        $data['page_title'] = "CI Hello World App!";

        $this->load->view('join_view',$data);

	}
    public function join_ok(){
        $this->load->model('join_model');
        $this->join_model->add(array(
            'name'=>$this->input->get('name'),
            'age'=>$this->input->get('age'),
            'email'=>$this->input->get('email')
        )); 
    }
}

