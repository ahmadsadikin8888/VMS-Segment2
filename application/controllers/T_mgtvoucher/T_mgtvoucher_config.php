<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_mgtvoucher_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->t_mgtvoucher_id	= 'ID';
		$this->t_mgtvoucher_nama_voucher	= 'NAMA_VOUCHER';
		$this->t_mgtvoucher_channel_payment	= 'CHANNEL_PAYMENT';
		$this->t_mgtvoucher_jenis_pembayaran	= 'JENIS_PEMBAYARAN';
		$this->t_mgtvoucher_jenis_cashback	= 'JENIS_CASHBACK';
		$this->t_mgtvoucher_percent_cashback	= 'PERCENT_CASHBACK';
		$this->t_mgtvoucher_nominal_cashback	= 'NOMINAL_CASHBACK';
		$this->t_mgtvoucher_start_datelive	= 'START_DATELIVE';
		$this->t_mgtvoucher_end_datelive	= 'END_DATELIVE';
		$this->t_mgtvoucher_wording	= 'WORDING';
		$this->t_mgtvoucher_image	= 'IMAGE';

		
		
		
		/*field_alias_database db*/
		$this->f_id	= 'id';
		$this->f_nama_voucher	= 'nama_voucher';
		$this->f_channel_payment	= 'channel_payment';
		$this->f_jenis_pembayaran	= 'jenis_pembayaran';
		$this->f_jenis_cashback	= 'jenis_cashback';
		$this->f_percent_cashback	= 'percent_cashback';
		$this->f_nominal_cashback	= 'nominal_cashback';
		$this->f_start_datelive	= 'start_datelive';
		$this->f_end_datelive	= 'end_datelive';
		$this->f_wording	= 'wording';
		$this->f_image	= 'image';

		
		
		
		/* CONFIG FORM LIST */
		/* field_alias_database => $title */	
		$this->table_column =array(
			$this->f_id	=> $this->t_mgtvoucher_id,
			$this->f_nama_voucher	=> $this->t_mgtvoucher_nama_voucher,
			$this->f_channel_payment	=> $this->t_mgtvoucher_channel_payment,
			$this->f_jenis_pembayaran	=> $this->t_mgtvoucher_jenis_pembayaran,
			$this->f_jenis_cashback	=> $this->t_mgtvoucher_jenis_cashback,
			$this->f_percent_cashback	=> $this->t_mgtvoucher_percent_cashback,
			$this->f_nominal_cashback	=> $this->t_mgtvoucher_nominal_cashback,
			$this->f_start_datelive	=> $this->t_mgtvoucher_start_datelive,
			$this->f_end_datelive	=> $this->t_mgtvoucher_end_datelive,
			$this->f_wording	=> $this->t_mgtvoucher_wording,
			$this->f_image	=> $this->t_mgtvoucher_image,
		);

	}

};









/* END */
/* Mohon untuk tidak mengubah informasi ini : */
/* Generated by YBS CRUD Generator 2021-06-07 06:19:40 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

