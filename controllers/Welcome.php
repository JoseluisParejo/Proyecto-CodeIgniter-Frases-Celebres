<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Welcome_model');
	}
	public function index()
	{
		$data['file']= file('/etc/passwd');
		$this->load->library('pro');
		$data['news']=$this->pro->show('http://ep00.epimg.net/rss/elpais/portada.xml');
		$this->load->view('welcome_message',$data);
	}
	public function autores($id=null) {
        if($id===null){
        	$data['autores'] = $this->Welcome_model->getAutores($id);
	    	$this->load->view('autores',$data);
        }
        else{
            $data['unAutor'] = $this->Welcome_model->getUnAutor($id);
            $data['frases'] = $this->Welcome_model->getAutores($id);
	        $this->load->view('autores1',$data);
        }
    }
}
