<?php

class katalog_model extends CI_model{
    public function getAllProduk()
    {
        return $this->db->get('katalog')->result_array();
    }

    public function tambahDataProduk() 
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "url" => $this->input->post('url'),
            "kategori" => $this->input->post('kategori')
        ];

        $this->db->insert('katalog', $data);
    }

    public function hapusDataProduk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('katalog');
    }

    public function getKatalogById($id)
    {
        return $this->db->get_where('katalog', ['id' => $id])->row_array();
    }

    public function ubahDataProduk()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "url" => $this->input->post('url', true),
            "kategori" => $this->input->post('kategori')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('katalog', $data);
    }

    public function cariProduk() {
        $keyword = $this->input->post('keyword');

        $this->db->like('nama', $keyword);
        $this->db->or_like('kategori', $keyword);

        return $this->db->get('katalog')->result_array();
    }
}