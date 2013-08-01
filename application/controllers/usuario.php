<?php defined('SYSPATH') OR die('No direct access allowed.');


class Usuario_Controller extends Template_Controller{
	
	public $template = 'kohana/template';
	
	public function index(){
		
		$this->template->content = new View('welcome_content');
		
		$this->template->title = 'Welcome to Kohana!';
	}
		
}