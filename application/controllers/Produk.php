<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Produk');
    }

    public function index()
    {
        $data['judul'] = "Tampil Data Produk";
        $data['tampil'] = $this->M_Produk->tampil()->result();
        $this->load->view('produk/tampil', $data, FALSE);
    }

    public function input()
    {
        $data['judul'] = "Input Produk Baru";
        $this->load->view('produk/input', $data, FALSE);
    }

    public function save()
    {
        $id = $this->input->post('id');
        $kode_produk = $this->input->post('kode_produk');
        $nama_produk = $this->input->post('nama_produk');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $data = array(
            'id'   => $id,
            'kode_produk'   => $kode_produk,
            'nama_produk'   => $nama_produk,
            'harga'         => $harga,
            'stok'          => $stok
        );

        $this->M_Produk->save($data);
        redirect('produk', 'refresh');
    }

    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->delete('produk');
        redirect('produk', 'refresh');
    }
}
