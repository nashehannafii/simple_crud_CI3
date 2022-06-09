<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Crud extends CI_Model {

    function getData(){
        $query = $this->db->get('crud');
        return $query->result();
    }

    function insertData($data){
        $this->db->insert('crud', $data);
    }

    function insertDataPelanggaran($data){
        $this->db->insert('pelanggaran', $data);
    }
    
    function getDetailData($id){
        $this->db->where('id_crud', $id);
        $query = $this->db->get('crud');
        return $query->row();
    }

    function getDetailDataPelanggaran($id){
        // echo '<pre>';print_r($id);die;
        $this->db->select('*');
        $this->db->from('Pelanggaran');
        $this->db->where([
            'id_crud' => $id
        ]);
        // $query = $this->db->get('pelanggaran');
        // echo '<pre>';print_r($this->db->get()->result_array());die;
        return $this->db->get()->result_array();
    }

    function updateData($id, $data){
        // echo '<pre>';print_r($data);die;
        $this->db->where('id_crud', $id);
        $this->db->update('crud', $data);
    }

    function deleteData($id){
        $this->db->where('id_crud', $id);
        $this->db->delete('crud');
    }

    function deletePelanggaran($id){
        $this->db->where('id_pelanggaran', $id);
        $this->db->delete('pelanggaran');
    }
}