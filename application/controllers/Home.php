<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_desa');
    }


    public function index()
    {
        $data = array(
            'title'  => 'GIS Desa se Kecamatan Gajah',
            'title1' => 'GIS Desa',
            'desa'   => $this->m_desa->tampil(),
            'isi'   => 'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}

/* End of file Home.php */
