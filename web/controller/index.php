<?php namespace web\controller;

use core\View;

class Index
{
	protected $view;

	public function __construct(){
		$this->view = new View();

	}

	public function show(){
		return $this->veiw->make('index');
	}

	public function post(){
echo 'xj';
	}
}
