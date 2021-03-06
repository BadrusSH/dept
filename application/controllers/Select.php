<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Select extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dynamic_model');
    }

    public function index()
    {
        $data['dept'] 		= $this->Dynamic_model->getDataDept();
		$this->load->view('getdata',$data);
    }

    public function getPos()
    {
        $iddept = $this->input->post('id');
        $data = $this->Dynamic_model->getDataPos($iddept);
        $output = '<option value="">--Pilih Pos-- </option>';
        foreach ($data as $row) {
                    $output .= '<option value="' . $row->pos_id . '"> ' . $row->pos_nama . '</option>';
            }        
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function getWil()
    {
        $idpos = $this->input->post('id');
        $data = $this->Dynamic_model->getDataWil($idpos);
        $output = '<option value="">--Pilih Wilayah-- </option>';
        foreach ($data as $row) {
                    $output .= '<option value="' . $row->wil_id . '"> ' . $row->wil_nama . '</option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function getJbtn()
    {
        $iddept = $this->input->post('id');
        $data = $this->Dynamic_model->getDataJbtn($iddept);
        $output = '<option value="">--Pilih Jabatan-- </option>';
        foreach ($data as $row) {
                    $output .= '<option value="' . $row->jbtn_id . '"> ' . $row->jbtn_nama . '</option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
}
