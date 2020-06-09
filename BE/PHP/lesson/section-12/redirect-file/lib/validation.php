<?php 
	function is_username($username)
	{
		$patern = "/^[A-Za-z0-9_\.]{6,32}$/";
		if (!preg_match($patern, $username, $matchs))
			return false;		
		return true;
	}

	function is_password($password)
	{
		$patern = "/^([A-Z]){1}([\w.\_!@#$%^&*()]+){5,31}$/";
		if (!preg_match($patern, $password, $matchs))
			return false;		
		return true;
	}

	function error_form($label_field)
	{
		global $error;
		if(!empty($error[$label_field]))
			return $error[$label_field];
	}

function get_value($label_field){
	global $$label_field;
	if(!empty($$label_field)) return $$label_field;
}

	


