<?php
class matakuliah extends ci_controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks'),
        ];

        $this->load->view('view-data-matakuliah', $data);
    }
}