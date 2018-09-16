<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_asset extends CI_Model {

	// ============================================================== fungsi - fungsi insert ============================================================
	// fungsi model untuk menginsert data asset kedalam t_asset
	public function input($data_asset)
	{
		if ($this->db->insert('t_asset', $data_asset)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	// fungsi model untuk menginsert data tipe asset ke dalam t_asset_type
	public function insertTipe($data_tipe)
	{
		if ($this->db->insert('t_asset_type', $data_tipe)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	// fungsi model untuk menginsert data lokasi asset ke dalam t_lokasi
	public function insertLokasi($data_lokasi)
	{
		if ($this->db->insert('t_asset_lokasi', $data_lokasi)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
	// ============================================================== fungsi - fungsi update ============================================================
	
	// fungsi model untuk update data asset ke dalam t_asset
	public function update($data_asset, $asset_id)
	{
		if ($this->db->where('asset_id', $asset_id)->update('t_asset', $data_asset)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	// fungsi model untuk update data asset ke dalam t_asset_type
	public function updateTypeAsset($data_asset_type, $ta_id)
	{
		if ($this->db->where('ta_id', $ta_id)->update('t_asset_type', $data_asset_type)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function updateLokasi($data_lokasi)
	{
		if ($this->db->where('ta_id', $ta_id)->update('t_asset_type', $data_asset_type)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	// ============================================================== fungsi - fungsi show/get ============================================================
	// fungsi model untuk get data asset
	public function getData($pharam = array())
	{
		$this->db->select('*');
		$this->db->from('t_asset');
		$this->db->join('t_asset_lokasi','t_asset_lokasi.id_lok = t_asset.loc_id');

		if (array_key_exists('asset_id', $pharam)) {
			$this->db->where('asset_id', $pharam['asset_id']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;
		}else{
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result():FALSE;
		}

		return $result;
	}

	// fungsi model untuk get data lokasi asset
	public function getLokasi($pharam = array())
	{
		$this->db->select('*');
		$this->db->from('t_asset_lokasi');

		if (array_key_exists('id_lok', $pharam)) {
			$this->db->where('id_lok', $pharam['id_lok']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;
		}else{
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result():FALSE;
		}

		return $result;
	}

	// fungsi model untuk get data tipe asset
	public function getTypeAsset($pharam = array())
	{
		$this->db->select('*');
		$this->db->from('t_asset_type');

		if (array_key_exists('ta_status', $pharam)) {
			$this->db->where('ta_status',$pharam['ta_status']);
		}
		if (array_key_exists('ta_id', $pharam)) {
			$this->db->where('ta_id', $pharam['ta_id']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;
		}else{
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result():FALSE;
		}
		return $result;
	}


	// ============================================================== fungsi - fungsi count/sort/filtering ====================================================
	
	// fungsi model untuk menghitung data asset berdasarkan parameter yang dibutuhkan dengan return num_rows 
	public function countData($pharam = array())
	{
		$this->db->select('*');
		$this->db->from('t_asset');

		if (array_key_exists('order_by', $pharam)) {
			$this->db->order_by($pharam['order_by']);
			$this->db->where($pharam['order_by'], $pharam['order_data']);
		}

		$query = $this->db->get();
		$result = $query->num_rows();

		return $result;
	}

	
}