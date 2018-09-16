<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'asset';

// master data tipe asset
$route['tipe_asset'] = 'asset/asset_master_tipe';
$route['tipe_asset/add'] = 'asset/asset_master_tipe_add';
$route['tipe_asset/update/(:num)'] = 'asset/asset_master_tipe_update/$1';
$route['tipe_asset/nonaktif/(:num)'] = 'asset/asset_master_tipe_nonaktif/$1';

// master data lokasi asset
$route['data_lokasi'] = 'asset/asset_master_lokasi';
$route['data_lokasi/add'] = 'asset/asset_master_lokasi_add';
$route['data_lokasi/update/(:num)'] = 'asset/asset_master_lokasi_update/$1';
$route['data_lokasi/nonaktif/(:num)'] = 'asset/asset_master_lokasi_nonaktif/$1';

// penilaian 
$route['penilaian/input'] = 'asset/asset_penilaian_input';

//mutasi
$route['mutasi'] = 'asset/mutasi';

// asset manipulation
$route['asset'] = 'asset/asset_all';
$route['asset_tambah'] = 'asset/asset_add';
$route['asset_edit/(:num)'] = 'asset/asset_update/$1';
$route['asset_detil/(:num)'] = 'asset/asset_detil/$1';
$route['asset_log_add'] = 'asset/asset_log';
$route['asset_log_delete/(:num)/(:num)'] = 'asset/asset_log_delete/$1/$2';

// parameter
$route['parameter'] = 'asset/parameter';

// laporan asset 
$route['laporan_log_asset'] = 'asset/asset_log_report';

// root ke error page
$route['404_override'] = 'welcome/page_notfound';
$route['translate_uri_dashes'] = FALSE;
