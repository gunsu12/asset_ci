<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_log extends CI_Model {

	// ============================================================== fungsi - fungsi insert ============================================================
	// fungsi model untuk menginsert data log asset kedalam t_asset_log
	public function input($data_log)
	{
		if ($this->db->insert('t_asset_log', $data_log)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	// ============================================================== fungsi - fungsi update ============================================================
	// fungsi model untuk update data asset ke dalam t_asset
	public function edit($data_log, $log_id)
	{
		if ($this->db->where('log_id', $log_id)->update('t_asset_log', $data_log)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	// ============================================================== fungsi - fungsi delete ============================================================
	// fungsi model untuk delete data asset
	public function delete($log_id)
	{
		if ($this->db->where('log_id',$log_id)->delete('t_asset_log')) {
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
		$this->db->from('t_asset_log');
		
		if (array_key_exists('asset_id', $pharam)) {
			$this->db->where('asset_id', $pharam['asset_id']);
		}

		if (array_key_exists('log_id', $pharam)) {
			$this->db->where('log_id', $pharam['log_id']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;
		}else{
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result():FALSE;
		}

		return $result;
	}

	// ============================================================== fungsi - fungsi count/sort/filtering ====================================================

	// fungsi model untuk menghitung data log asset berdasarkan parameter yang dibutuhkan dengan return num_rows 
	public function countDataLog($pharam = array())
	{
		$this->db->select('*');
		$this->db->from('t_asset_log');

		$query = $this->db->get();
		$result = $query->num_rows();

		return $result;
	}

}