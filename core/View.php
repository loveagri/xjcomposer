<?php namespace core;

class View{

	protected $file;

	protected $vars = [12];

	public function make($file){
		$this->file = 'view/'.$file.'html';
		return $this;
	}

	public function with($name,$value){
		$this -> vars[$name] = $value;
		return $this;
	}

	public function __toString(){
		include $this->file;
		return '';
	}


    public function abc(){
        echo 66;
    }
}

