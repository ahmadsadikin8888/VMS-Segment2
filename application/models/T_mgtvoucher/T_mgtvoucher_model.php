<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_mgtvoucher_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			t_mgtvoucher.id as id,
			t_mgtvoucher.nama_voucher as nama_voucher,
			t_mgtvoucher.channel_payment as channel_payment,
			t_mgtvoucher.jenis_pembayaran as jenis_pembayaran,
			t_mgtvoucher.jenis_cashback as jenis_cashback,
			t_mgtvoucher.percent_cashback as percent_cashback,
			t_mgtvoucher.nominal_cashback as nominal_cashback,
			t_mgtvoucher.start_datelive as start_datelive,
			t_mgtvoucher.end_datelive as end_datelive,
			t_mgtvoucher.wording as wording,
			t_mgtvoucher.image as image,
			t_mgtvoucher.kode_voucher as kode_voucher,
			t_mgtvoucher.already_subscribe as already_subscribe,
			t_mgtvoucher.periode_time as periode_time,
			t_mgtvoucher.minimum_payment as minimum_payment,
			t_mgtvoucher.max_nominal as max_nominal,
			t_mgtvoucher.special_day as special_day,
			t_mgtvoucher.regional as regional,
			t_mgtvoucher.witel as witel,
			t_mgtvoucher.addon as addon,
			t_mgtvoucher.type_customer as type_customer,
			t_mgtvoucher.type_hvc as type_hvc,
			t_mgtvoucher.val_nominal as val_nominal,
			t_mgtvoucher.val_percent as val_percent,
			t_mgtvoucher.limited_val as limited_val,
			t_mgtvoucher.islimited as islimited,
			t_mgtvoucher.unlimited as unlimited,
		');
		
		$this->datatables->from('t_mgtvoucher');

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			't_mgtvoucher.id as id',
			't_mgtvoucher.nama_voucher as nama_voucher',
			't_mgtvoucher.channel_payment as channel_payment',
			't_mgtvoucher.jenis_pembayaran as jenis_pembayaran',
			't_mgtvoucher.jenis_cashback as jenis_cashback',
			't_mgtvoucher.percent_cashback as percent_cashback',
			't_mgtvoucher.nominal_cashback as nominal_cashback',
			't_mgtvoucher.start_datelive as start_datelive',
			't_mgtvoucher.end_datelive as end_datelive',
			't_mgtvoucher.wording as wording',
			't_mgtvoucher.image as image',
			't_mgtvoucher.kode_voucher as kode_voucher',
			't_mgtvoucher.already_subscribe as already_subscribe',
			't_mgtvoucher.periode_time as periode_time',
			't_mgtvoucher.minimum_payment as minimum_payment',
			't_mgtvoucher.max_nominal as max_nominal',
			't_mgtvoucher.special_day as special_day',
			't_mgtvoucher.regional as regional',
			't_mgtvoucher.witel as witel',
			't_mgtvoucher.addon as addon',
			't_mgtvoucher.type_customer as type_customer',
			't_mgtvoucher.type_hvc as type_hvc',
			't_mgtvoucher.val_nominal as val_nominal',
			't_mgtvoucher.val_percent as val_percent',
			't_mgtvoucher.limited_val as limited_val',
			't_mgtvoucher.islimited as islimited',
			't_mgtvoucher.unlimited as unlimited',
		
		);
		$this->db->select($afield);

		$this->db->order_by('t_mgtvoucher.id', 'ASC');
		return $this->db->get('t_mgtvoucher')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			't_mgtvoucher.id as id',
			't_mgtvoucher.nama_voucher as nama_voucher',
			't_mgtvoucher.channel_payment as channel_payment',
			't_mgtvoucher.jenis_pembayaran as jenis_pembayaran',
			't_mgtvoucher.jenis_cashback as jenis_cashback',
			't_mgtvoucher.percent_cashback as percent_cashback',
			't_mgtvoucher.nominal_cashback as nominal_cashback',
			't_mgtvoucher.start_datelive as start_datelive',
			't_mgtvoucher.end_datelive as end_datelive',
			't_mgtvoucher.wording as wording',
			't_mgtvoucher.image as image',
			't_mgtvoucher.kode_voucher as kode_voucher',
			't_mgtvoucher.already_subscribe as already_subscribe',
			't_mgtvoucher.periode_time as periode_time',
			't_mgtvoucher.minimum_payment as minimum_payment',
			't_mgtvoucher.max_nominal as max_nominal',
			't_mgtvoucher.special_day as special_day',
			't_mgtvoucher.regional as regional',
			't_mgtvoucher.witel as witel',
			't_mgtvoucher.addon as addon',
			't_mgtvoucher.type_customer as type_customer',
			't_mgtvoucher.type_hvc as type_hvc',
			't_mgtvoucher.val_nominal as val_nominal',
			't_mgtvoucher.val_percent as val_percent',
			't_mgtvoucher.limited_val as limited_val',
			't_mgtvoucher.islimited as islimited',
			't_mgtvoucher.unlimited as unlimited',

		
		);
		$this->db->select($afield);

		$this->db->where('t_mgtvoucher.id', $id);
		$this->db->order_by('t_mgtvoucher.id', 'ASC');
		return $this->db->get('t_mgtvoucher')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('t_mgtvoucher.id <>',$id);

		$q = $this->db->get_where('t_mgtvoucher', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('t_mgtvoucher', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('t_mgtvoucher.id', $id);
		$this->db->update('t_mgtvoucher', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('t_mgtvoucher.id',$data);	
	
			$this->db->delete('t_mgtvoucher');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}


};

/* END */
/* Mohon untuk tidak mengubah informasi ini : */
/* Generated by YBS CRUD Generator 2021-06-07 06:19:40 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/
