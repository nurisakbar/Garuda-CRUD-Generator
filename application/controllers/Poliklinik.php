<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Poliklinik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_poliklinik_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','poliklinik/tbl_poliklinik_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_poliklinik_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_poliklinik_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_poliklinik' => $row->id_poliklinik,
		'nama_poliklinik' => $row->nama_poliklinik,
	    );
            $this->template->load('template','poliklinik/tbl_poliklinik_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('poliklinik'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('poliklinik/create_action'),
	    'id_poliklinik' => set_value('id_poliklinik'),
	    'nama_poliklinik' => set_value('nama_poliklinik'),
	);
        $this->template->load('template','poliklinik/tbl_poliklinik_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_poliklinik' => $this->input->post('nama_poliklinik',TRUE),
	    );

            $this->Tbl_poliklinik_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('poliklinik'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_poliklinik_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('poliklinik/update_action'),
		'id_poliklinik' => set_value('id_poliklinik', $row->id_poliklinik),
		'nama_poliklinik' => set_value('nama_poliklinik', $row->nama_poliklinik),
	    );
            $this->template->load('template','poliklinik/tbl_poliklinik_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('poliklinik'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_poliklinik', TRUE));
        } else {
            $data = array(
		'nama_poliklinik' => $this->input->post('nama_poliklinik',TRUE),
	    );

            $this->Tbl_poliklinik_model->update($this->input->post('id_poliklinik', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('poliklinik'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_poliklinik_model->get_by_id($id);

        if ($row) {
            $this->Tbl_poliklinik_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('poliklinik'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('poliklinik'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_poliklinik', 'nama poliklinik', 'trim|required');

	$this->form_validation->set_rules('id_poliklinik', 'id_poliklinik', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_poliklinik.xls";
        $judul = "tbl_poliklinik";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Poliklinik");

	foreach ($this->Tbl_poliklinik_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_poliklinik);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_poliklinik.doc");

        $data = array(
            'tbl_poliklinik_data' => $this->Tbl_poliklinik_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('poliklinik/tbl_poliklinik_doc',$data);
    }

}

/* End of file Poliklinik.php */
/* Location: ./application/controllers/Poliklinik.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-27 14:51:15 */
/* http://harviacode.com */