<?php

class Request {
	
	protected $data = array();

	public static function getParams ()
	{
	
	}

	public static function getParam ($key, $default_value = '')
	{
	
	}


	public static function getPost ($key = '', $default_value = '')
	{
		$this->data = $_POST;
		if ($key != '') {
			return $this->data;	
		}		
		$return_value = isset($this->data[$key]) ? $this->data[$key] : $default_value;

		return $return_value;
	}
}

