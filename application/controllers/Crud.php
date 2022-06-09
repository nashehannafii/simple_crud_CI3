<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Crud');
	}

	public function index()
	{
		$queryData = $this->M_Crud->getData();
		$data = array('queryData' => $queryData);
		// echo '<pre>';print_r($data);die;
		$this->load->view('crud/view', $data);
	}
    
	public function insert()
	{
		$this->load->view('crud/insert');
	}

	public function update($id)
	{
		$queryDetailData = $this->M_Crud->getDetailData($id);
		$data = array('queryData' => $queryDetailData);
		$this->load->view('crud/update', $data);
	}
	
	public function insert_data()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$data = array(
			'nama' => $nama,
			'email' => $email
		);
		// echo '<pre>';print_r($data);die;
		$this->M_Crud->insertData($data);
		redirect(base_url(''));
	}

	public function update_data()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$data = array(
			'id_crud' => $id,
			'nama' => $nama,
			'email' => $email
		);
		// echo '<pre>';print_r($data);die;
		$this->M_Crud->UpdateData($id, $data);
		redirect(base_url(''));
	}

	public function pelanggaran($id)
	{
		$queryData = $this->M_Crud->getDetailData($id);
		$data = array('data' => $queryData);
		$this->load->view('crud/pelanggaran', $data);
	}

	public function insert_data_pelanggaran()
	{
		$id = $this->input->post('id');
		$pelanggaran = $this->input->post('pelanggaran');

		$data = array(
			'pelanggaran' => $pelanggaran,
			'id_crud' => $id,
		);
		// echo '<pre>';print_r($data);die;
		$this->M_Crud->insertDataPelanggaran($data);
		redirect(base_url(''));
	}

	public function data_pelanggaran($id)
	{
		// echo '<pre>';print_r($id);die;
		$queryData = $this->M_Crud->getDetailDataPelanggaran($id);
		$data = array('data' => $queryData);
		// echo '<pre>';print_r($data);die;
		$this->load->view('crud/data_pelanggaran', $data);
	}

	public function deleteData($id)
	{
		$this->M_Crud->deleteData($id);
		redirect(base_url());
	}

	public function deletePelanggaran($id)
	{
		$this->M_Crud->deletePelanggaran($id);
		redirect(base_url());
	}
	
}
