<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dynamic_model extends CI_Model
{
    public function getDataDept()
    {
        return $this->db->get('dept')->result_array();
    }

    public function getDataPos($iddept)
    {
        return $this->db->get_where('post', ['dept_id' => $iddept])->result();
    }

    public function getDataWil($idpos)
    {
        return $this->db->get_where('wilayah', ['pos_id' => $idpos])->result();
    }

    public function getDataJbtn($iddept)
    {
        return $this->db->get_where('jbtn', ['jbtn_id' => $iddept])->result();
    }
}
