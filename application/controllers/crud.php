<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('modeldata');
                $this->load->helper('url');
	}

	function index(){
		$data['user'] = $this->modeldata->tampil_data()->result();
		$this->load->view('viewtampil',$data);
	}

	function add(){
		$this->load->view('viewinput');
	}

	function addaksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->modeldata->input_data($data,'user');
		redirect('crud/index');
	}

	function delete($id){
		$where = array('id' => $id);
		$this->modeldata->hapus_data($where,'user');
		redirect('crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->modeldata->edit_data($where,'user')->result();
		$this->load->view('viewedit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
	
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->modeldata->update_data($where,$data,'user');
		redirect('crud/index');
	}
}