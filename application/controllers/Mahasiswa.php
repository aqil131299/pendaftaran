<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function daftar(){
        $data = array(
            'title' => 'Daftar Mahasiswa baru',
            'file' => 'daftar_mahasiswa',
        );
        $this->load->view('kampus', $data);
    }
	
    public function proses_daftar(){
        
        $data = array(
            'nama' => $this->input->post('nama'),
            'lahir' => $this->input->post('lahir'),
            'hp' => $this->input->post('hp'),
            
        );
        var_dump($data);die;
    }
	
}
