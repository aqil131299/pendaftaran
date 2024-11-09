<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

    /**
     * Mengambil semua data dari tabel
     * @param string $tabel - Nama tabel yang ingin diambil datanya
     * @return array - Mengembalikan array data dari tabel
     * 
     * Contoh Penggunaan:
     * $this->Crud_model->ambil_semua('nama_tabel');
     */
    public function ambil_semua($tabel) {
        return $this->db->get($tabel)->result_array();
    }

    /**
     * Mengambil satu data berdasarkan kondisi
     * @param string $tabel - Nama tabel
     * @param array $kondisi - Array kondisi, misalnya ['id' => 1]
     * @return array - Mengembalikan satu baris data
     * 
     * Contoh Penggunaan:
     * $this->Crud_model->ambil_satu('nama_tabel', ['id' => 1]);
     */
    public function ambil_satu($tabel, $kondisi) {
        return $this->db->get_where($tabel, $kondisi)->row_array();
    }

    /**
     * Menambahkan data ke tabel
     * @param string $tabel - Nama tabel
     * @param array $data - Data yang ingin ditambahkan (misalnya: ['nama' => 'Produk 1', 'harga' => 10000])
     * @return bool - Mengembalikan true jika berhasil, false jika gagal
     * 
     * Contoh Penggunaan:
     * $data = ['nama' => 'Produk 1', 'harga' => 10000];
     * $this->Crud_model->tambah_data('nama_tabel', $data);
     */
    public function tambah_data($tabel, $data) {
        return $this->db->insert($tabel, $data);
    }

    /**
     * Mengupdate data di tabel berdasarkan kondisi
     * @param string $tabel - Nama tabel
     * @param array $data - Data yang akan diupdate (misalnya: ['nama' => 'Produk Baru', 'harga' => 12000])
     * @param array $kondisi - Array kondisi, misalnya ['id' => 1]
     * @return bool - Mengembalikan true jika berhasil, false jika gagal
     * 
     * Contoh Penggunaan:
     * $data = ['nama' => 'Produk Baru', 'harga' => 12000];
     * $kondisi = ['id' => 1];
     * $this->Crud_model->ubah_data('nama_tabel', $data, $kondisi);
     */
    public function ubah_data($tabel, $data, $kondisi) {
        return $this->db->update($tabel, $data, $kondisi);
    }

    /**
     * Menghapus data di tabel berdasarkan kondisi
     * @param string $tabel - Nama tabel
     * @param array $kondisi - Array kondisi, misalnya ['id' => 1]
     * @return bool - Mengembalikan true jika berhasil, false jika gagal
     * 
     * Contoh Penggunaan:
     * $kondisi = ['id' => 1];
     * $this->Crud_model->hapus_data('nama_tabel', $kondisi);
     */
    public function hapus_data($tabel, $kondisi) {
        return $this->db->delete($tabel, $kondisi);
    }

    /**
     * Menghitung jumlah data pada tabel dengan kondisi tertentu (opsional)
     * @param string $tabel - Nama tabel
     * @param array $kondisi - Kondisi untuk filter data (opsional), misalnya ['status' => 'aktif']
     * @return int - Mengembalikan jumlah baris yang sesuai kondisi
     * 
     * Contoh Penggunaan:
     * $jumlah = $this->Crud_model->hitung_data('nama_tabel', ['status' => 'aktif']);
     */
    public function hitung_data($tabel, $kondisi = []) {
        if (!empty($kondisi)) {
            $this->db->where($kondisi);
        }
        return $this->db->count_all_results($tabel);
    }
}
