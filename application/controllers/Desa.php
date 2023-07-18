<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Desa extends CI_Controller
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
            'title1' => 'Data Desa',
            'desa'   => $this->m_desa->tampil(),
            'isi'    => 'desa/v_desa'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function input()
    {
        $this->form_validation->set_rules('nama_desa', 'Nama Desa', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('telp', 'No Telp', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title'  => 'GIS Desa se Kecamatan Gajah',
                'title1' => 'Input Data Desa',
                'title2' => 'Pemetaan Desa',
                'isi'    => 'desa/v_add'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_desa'     => $this->input->post('nama_desa'),
                'alamat'        => $this->input->post('alamat'),
                'telp'          => $this->input->post('telp'),
                'latitude'      => $this->input->post('latitude'),
                'longitude'     => $this->input->post('longitude'),
                'deskripsi'     => $this->input->post('deskripsi'),
            );
            $this->m_desa->simpan($data);
            $this->session->set_flashdata('pesan', 'Data berhasil disimpan');

            redirect('desa');
        }
    }

    public function edit($id_desa)
    {
        $this->form_validation->set_rules('nama_desa', 'Nama Desa', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('telp', 'No Telp', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title'  => 'GIS Desa se Kecamatan Gajah',
                'title1' => 'Edit Data Desa',
                'title2' => 'Pemetaan Desa',
                'desa'   => $this->m_desa->detail($id_desa),
                'isi'    => 'desa/v_edit'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_desa'       => $id_desa,
                'nama_desa'     => $this->input->post('nama_desa'),
                'alamat'        => $this->input->post('alamat'),
                'telp'          => $this->input->post('telp'),
                'latitude'      => $this->input->post('latitude'),
                'longitude'     => $this->input->post('longitude'),
                'deskripsi'     => $this->input->post('deskripsi'),
            );
            $this->m_desa->edit($data);
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');

            redirect('desa');
        }
    }

    public function hapus($id_desa)
    {
        $data = array('id_desa' => $id_desa);
        $this->m_desa->hapus($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');

        redirect('desa');
    }
}

/* End of file Sekolah.php */
