<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		$data['products'] = $this->Product_m->get();
		$data['content'] = "pages/home";
		$this->load->view('main', $data);
	}

	public function add()
	{
		$data['content'] = "pages/add";
		$this->load->view('main', $data);
	}

	public function save()
	{
		$created = date('Y-m-d H:i:s');
		$data = [
			'name' 			=> $this->input->post('name', true),
			'price' 		=> $this->input->post('price', true),
			'stock' 		=> $this->input->post('stock', true),
			'is_sell' 		=> $this->input->post('is_sell', true),
			'created_at' 	=> $created,
		];
		$this->Product_m->save($data);
		$this->session->set_flashdata('success', 'Produk Berhasil Ditambahkan');
		redirect('main');
	}
}
