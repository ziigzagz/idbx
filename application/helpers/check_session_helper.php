<?php
defined('BASEPATH') or exit('No direct script access allowed');

function is_sf_login(){
	if(isset($_SESSION['session_info'])){
		if($_SESSION['session_info']->Type == "1"){
			return true;
		}
		else{
			return false;
		}
	}
	else{
		return false;
	}
}

function is_purchase_login(){
	if(isset($_SESSION['session_info'])){
		if($_SESSION['session_info']->Type == "2"){
			return true;
		}
		else{
			return false;
		}
	}
	else{
		return false;
	}
}
function is_security_login(){
	if(isset($_SESSION['session_info'])){
		if($_SESSION['session_info']->Type == "3"){
			return true;
		}
		else{
			return false;
		}
	}
	else{
		return false;
	}
}
function is_trainer_login(){
	if(isset($_SESSION['session_info'])){
		if($_SESSION['session_info']->Type == "4"){
			return true;
		}
		else{
			return false;
		}
	}
	else{
		return false;
	}
}
function is_manager_login(){
	if(isset($_SESSION['session_info'])){
		if($_SESSION['session_info']->Type == "5"){
			return true;
		}
		else{
			return false;
		}
	}
	else{
		return false;
	}
}

function is_memberhost_login(){
	if(isset($_SESSION['session_info']->MemberHostPID)){
		return true;
	}
	else{
		return false;
	}
}
