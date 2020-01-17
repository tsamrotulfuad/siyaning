<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemohon extends CI_Model {

    var $table = 'tbl_pemohon';
    var $primary = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function buat_kode()
    {
        $this->db->select('RIGHT(tbl_berkas.noreg,4) as kode', FALSE);
        $this->db->order_by('noreg','DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_berkas');
        if($query->num_rows() <> 0 ){
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        }
        else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodejadi = "TR".$kodemax;
        return $kodejadi;
    }

    public function tampil($ktp)
    {
        $query = $this->db->query("SELECT * FROM tbl_pemohon WHERE ktp='". $ktp ."'")->row(0);
        return $query;
    }

    public function admin_tampil()
    {
        $query = $this->db->query("SELECT * FROM tbl_pemohon");
        return $query;
    }

    public function simpan($object)
    {
        $query = $this->db->insert($this->table, $object);
        return $query;
    }

    public function tampil_ubah($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_pemohon WHERE id='". $id ."'");
		return $query;
    }

    public function tampilpemohon($id)
    {
        $nama = $this->session->userdata('nama');
        $query = $this->db->query("SELECT * FROM $this->table WHERE nama='". $nama ."' GROUP BY $this->primary DESC")->result();
        return $query;
    }

    public function ubah($id, $object)
	{
		$this->db->where($this->primary, $id);
		$query = $this->db->update($this->table, $object);
		return $query;
	}

	public function hapus($id)
	{
		$query = $this->db->query("DELETE FROM tbl_pemohon WHERE id='" . $id ."'");
		return $query;
	}

	public function filter($id) {
		$query = $this->db->query("SELECT * FROM tbl_pemohon WHERE id='". $id ."'")->row(0);
		return $query;
    }

}