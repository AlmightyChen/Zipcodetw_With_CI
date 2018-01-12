<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private function construct(){

	}
	public function index(){

		//台灣地址
		$address = "台北市信義區";

		//記得要加 2>&1
		$command ='python python/zipcode.py "'.$address.'" 2>&1';

		//執行並接收資料
		$output = shell_exec($command);

		echo $output;
	}
}
