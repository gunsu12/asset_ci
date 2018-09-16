<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model('m_asset');
	    $this->load->model('m_log');
	}

	public function index()
	{
		$data['page_title'] = "Master Asset";
		$data['page_tree'] = "dashboard";
		$data['page_menu'] = "dashboard";

		$data['count_asset_all'] = $this->m_asset->countData(array());
		$data['count_asset_baik'] = $this->m_asset->countData(array('order_by' => 'asset_kondisi', 'order_data' => 'baik'));
		$data['count_asset_rusak'] = $this->m_asset->countData(array('order_by' => 'asset_kondisi', 'order_data' => 'rusak'));
		$data['count_asset_log'] = $this->m_log->countDataLog(array());

		$data['assets'] = $this->m_asset->getData(array());
		$this->load->view('dashboard',$data);
	}

	public function asset_all()
	{
		$data['page_title'] = "Master Asset";
		$data['page_tree'] = "asset";
		$data['page_menu'] = "list";

		$data['assets'] = $this->m_asset->getData(array());
		$data['types'] = $this->m_asset->getTypeAsset(array('ta_status' => 'aktif'));

		$this->load->view('list-asset',$data);
	}

	public function asset_add()
	{
		$data['page_title'] = "Master Asset";
		$data['page_tree'] = "asset";
		$data['page_menu'] = "input";

		$data['lokasis'] = $this->m_asset->getLokasi(array());
		$data['types'] = $this->m_asset->getTypeAsset(array('ta_status' => 'aktif'));

		$this->form_validation->set_rules('nama','nama asset','required');
		$this->form_validation->set_rules('lokasi','lokasi','required');
		$this->form_validation->set_rules('ip','ip','required');
		$this->form_validation->set_rules('tipe','tipe','required');
		$this->form_validation->set_rules('tanggalmsk','tanggal masuk','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('input-asset', $data);
		}else{
			$time = strtotime(set_value('tanggalmsk'));

			$newformat = date('Y-m-d',$time);

			$data_asset = array(
				'asset_kode' => set_value('kode'),
				'asset_nama' => set_value('nama'),
				'loc_id' => set_value('lokasi'),
				'asset_type' => set_value('tipe'),
				'asset_ip' => set_value('ip'),
				'asset_processor' => set_value('proccessor'),
				'asset_ram' => set_value('ram'),
				'asset_hdd' => set_value('hdd'),
				'asset_os' => set_value('os'),
				'asset_password_pc' => set_value('remote'),
				'asset_tanggal_masuk' => $newformat,
				'asset_batas_pemakaian' => set_value('batas'),
				'asset_nilai' => set_value('nilai'),
				'asset_keterangan' => set_value('keterangan'),
				'asset_kondisi' => set_value('kondisi'),
				'asset_pengguna' => set_value('pengguna')
			);

			$input_asset = $this->m_asset->input($data_asset);

			if ($input_asset != FALSE) {
				$this->session->set_flashdata('info','data asset berhasil disimpan');
				redirect('asset');
			}else{
				$this->session->set_flashdata('info','data asset gagal disimpan');
				redirect('asset_tambah');
			}
		}
	}

	public function asset_update($asset_id)
	{
		$data['page_title'] = "Master Asset";
		$data['page_tree'] = "asset";
		$data['page_menu'] = "list";

		$data['lokasis'] = $this->m_asset->getLokasi(array());
		$data['types'] = $this->m_asset->getTypeAsset(array('ta_status' => 'aktif'));
		$data['asset'] = $this->m_asset->getData(array('asset_id' => $asset_id));

		$this->form_validation->set_rules('nama','nama asset','required');
		$this->form_validation->set_rules('lokasi','lokasi','required');
		$this->form_validation->set_rules('ip','ip','required');
		$this->form_validation->set_rules('tipe','tipe','required');
		$this->form_validation->set_rules('tanggalmsk','tanggal masuk','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('update-asset', $data);
		}else{
			$time = strtotime(set_value('tanggalmsk'));

			$newformat = date('Y-m-d',$time);

			$data_asset = array(
				'asset_kode' => set_value('kode'),
				'asset_nama' => set_value('nama'),
				'loc_id' => set_value('lokasi'),
				'asset_type' => set_value('tipe'),
				'asset_ip' => set_value('ip'),
				'asset_processor' => set_value('proccessor'),
				'asset_ram' => set_value('ram'),
				'asset_hdd' => set_value('hdd'),
				'asset_os' => set_value('os'),
				'asset_password_pc' => set_value('remote'),
				'asset_tanggal_masuk' => $newformat,
				'asset_batas_pemakaian' => set_value('batas'),
				'asset_nilai' => set_value('nilai'),
				'asset_keterangan' => set_value('keterangan'),
				'asset_kondisi' => set_value('kondisi'),
				'asset_pengguna' => set_value('pengguna')
			);

			$uptade_asset = $this->m_asset->update($data_asset, $asset_id);

			if ($uptade_asset != FALSE) {
				$this->session->set_flashdata('info','data asset berhasil disimpan');
				redirect('asset');
			}else{
				$this->session->set_flashdata('info','data asset gagal disimpan');
				redirect('asset_update/'.$asset_id);
			}
		}
	}

	public function asset_detil($asset_id)
	{
		$data['page_title'] = "Master Asset";
		$data['page_tree'] = "asset";
		$data['page_menu'] = "list";

		$data['asset'] = $this->m_asset->getData(array('asset_id' => $asset_id));
		$data['asset_id'] = $asset_id;

		$data['logs'] = $this->m_log->getData(array('asset_id' => $asset_id));

		$this->load->view('detail-asset',$data);
	}

	// fungsi untuk tambah log perbaikan asset

	public function asset_log()
	{
		$this->form_validation->set_rules('petugas','petugas','required');
		$this->form_validation->set_rules('problem','kerusakan','required');

		if ($this->form_validation->run() != FALSE) {
			$time = strtotime(set_value('date'));

			$newformat = date('Y-m-d',$time);
			$data_log = array(
				'asset_id' => set_value('asset_id'),
				'log_petugas' => set_value('petugas'),
				'log_problem' => set_value('problem'),
				'log_tindakan' => set_value('tindakan'),
				'log_date' => $newformat
			);

			$input_log = $this->m_log->input($data_log);

			if ($input_log != FALSE) {
				if (set_value('asset_id') == 0) {
					$this->session->set_flashdata('info','Log berhasil di input');
					redirect('');
				}else{	
					$this->session->set_flashdata('info','Log berhasil di input');
					redirect('asset_detil/'.set_value('asset_id'));
				}
			}else{
				$this->session->set_flashdata('info','Log gagal di input');
				redirect('asset_detil/'.set_value('asset_id'));
			}
		}else{
			if (set_value('asset_id') == 0) {
				$this->session->set_flashdata('info','Log gagal di input petugas atau kerusakan harus diisi');
				redirect('');
			}else{
				$this->session->set_flashdata('info','Log gagal di input petugas atau kerusakan harus diisi');
				redirect('asset_detil/'.$asset_id);
			}
		}
	}

	public function asset_log_delete($asset_id, $log_id)
	{
		$hapus_log = $this->m_log->delete($log_id);

		if ($hapus_log != FALSE) {
			$this->session->set_flashdata('info','Log berhasil di hapus');
			redirect('asset_detil/'.$asset_id);
		}else{
			$this->session->set_flashdata('info','Log gagal dihapus');
			redirect('asset_detil/'.$asset_id);
		}
	}


	// ini fungsi untuk menampilakn halaman dan data master tipe asset 

	public function asset_master_tipe()
	{
		$data['page_title'] = "Master Tipe Asset";
		$data['page_tree'] = "master";
		$data['page_menu'] = "tipe";

		// memanggil data tipe asset dengan fungsi getTypeAsset di model asset
		$data['types'] = $this->m_asset->getTypeAsset(array());

		$this->load->view('list-tipe',$data);
	}

	// ini fungsi untuk menambahkan tipe asset yang menangkap inputan dari halaman data asset 
	public function asset_master_tipe_add()
	{
		$this->form_validation->set_rules('tipe','tipe','required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('warning','Data gagal disimpan, nama tipe harus diisi');
			redirect('tipe_asset');
		}else{
			$data_tipe = array(
				'ta_name' => set_value('tipe'),
				'ta_status' => set_value('status'),
				'ta_keterangan' => set_value('keterangan')
			);

			$insert_tipe = $this->m_asset->insertTipe($data_tipe);

			if ($insert_tipe != FALSE) {
				$this->session->set_flashdata('success','Data berhasil disimpan');
				redirect('tipe_asset');
			}else{
				$this->session->set_flashdata('warning','Data gagal disimpan');
				redirect('tipe_asset');
			}
		}
	}

	// fungsi untuk menampilkan master lokasi
	public function asset_master_lokasi()
	{
		$data['page_title'] = "Master Tipe Asset";
		$data['page_tree'] = "master";
		$data['page_menu'] = "lokasi";

		// memanggil data tipe asset dengan fungsi getTypeAsset di model asset
		$data['lokasis'] = $this->m_asset->getLokasi(array());

		$this->load->view('list-lokasi',$data);
	}

	// fungsi untuk proses penambahan data lokasi
	public function asset_master_lokasi_add()
	{
		$this->form_validation->set_rules('kode','kode','required');
		$this->form_validation->set_rules('lokasi','lokasi','required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('warning','Data gagal disimpan, * harus diisi');
			redirect('data_lokasi');
		}else{
			$data_lokasi = array(
				'id_lok' => set_value('kode'),
				'lokasi' => set_value('lokasi')
			);

			$insert_lokasi = $this->m_asset->insertLokasi($data_lokasi);

			if ($insert_lokasi != FALSE) {
				$this->session->set_flashdata('success','Data berhasil disimpan');
				redirect('data_lokasi');
			}else{
				$this->session->set_flashdata('warning','Data gagal disimpan');
				redirect('data_lokasi');
			}
		}
	}

	// fungsi menampilkan halaman report log 
	public function asset_log_report()
	{
		$data['page_title'] = "Master Tipe Asset";
		$data['page_tree'] = "report";
		$data['page_menu'] = "log";

		$this->load->view('laporan-log',$data);
	}

	public function parameter()
	{
		$data['page_title'] = "Master Tipe Asset";
		$data['page_tree'] = "master";
		$data['page_menu'] = "parameter";

		$this->load->view('list-parameter',$data);
	}

	public function asset_penilaian_input()
	{
		$data['page_title'] = "List Penilaian Asset";
		$data['page_tree'] = "asset";
		$data['page_menu'] = "penilaian";

		$this->load->view('list-penilaian',$data);
	}

	public function mutasi()
	{
		$data['page_title'] = "List Mutasi Asset";
		$data['page_tree'] = "asset";
		$data['page_menu'] = "mutasi";

		$this->load->view('list-mutasi',$data);
	}

}
