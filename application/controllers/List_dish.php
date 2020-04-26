<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class List_dish extends CI_Controller
{
	public function dish_list()
	{
		$this->load->model('Dish_model','dish');
		$data=$this->dish->get_dish_list();
		$this->load->view('list',array('data'=>$data));
	}
	public function dish_list_cust()
	{
		$this->load->model('Dish_model','dish');
		$data=$this->dish->get_dish_list();
		$this->load->view('list_cust',array('data'=>$data));
	}
}

