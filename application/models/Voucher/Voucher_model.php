<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voucher_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json($user_id){
		$this->datatables->select('
			voucher.id as id,
			voucher.nama_voucher as nama_voucher,
			voucher.channel_payment as channel_payment,
			voucher.jenis_pembayaran as jenis_pembayaran,
			voucher.jenis_cashback as jenis_cashback,
			voucher.percent_cashback as percent_cashback,
			voucher.nominal_cashback as nominal_cashback,
			voucher.max_nominal as max_nominal,
			voucher.start_datelive as start_datelive,
			voucher.end_datelive as end_datelive,
			voucher.wording as wording,
			voucher.image as image,
			voucher.kode_voucher as kode_voucher,
			voucher.is_active as is_active,
			voucher.already_subscribe as already_subscribe,
			voucher.periode_time as periode_time,
			voucher.special_day as special_day,
			voucher.special_day_date as special_day_date,
			voucher.minimum_payment as minimum_payment,
			voucher.regional as regional,
			voucher.witel as witel,
			voucher.addon as addon,
			voucher.type_customer as type_customer,
			voucher.type_hvc as type_hvc,
			voucher.islimited as islimited,
			voucher.limit_voucher as limit_voucher,
			voucher.user_input as user_input,
		');
		
		$this->datatables->from('voucher');

		$this->datatables->where('voucher.user_input',$user_id);
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all($user_id){
		$afield = array(
			'voucher.id as id',
			'voucher.nama_voucher as nama_voucher',
			'voucher.channel_payment as channel_payment',
			'voucher.jenis_pembayaran as jenis_pembayaran',
			'voucher.jenis_cashback as jenis_cashback',
			'voucher.percent_cashback as percent_cashback',
			'voucher.nominal_cashback as nominal_cashback',
			'voucher.max_nominal as max_nominal',
			'voucher.start_datelive as start_datelive',
			'voucher.end_datelive as end_datelive',
			'voucher.wording as wording',
			'voucher.image as image',
			'voucher.kode_voucher as kode_voucher',
			'voucher.is_active as is_active',
			'voucher.already_subscribe as already_subscribe',
			'voucher.periode_time as periode_time',
			'voucher.special_day as special_day',
			'voucher.special_day_date as special_day_date',
			'voucher.minimum_payment as minimum_payment',
			'voucher.regional as regional',
			'voucher.witel as witel',
			'voucher.addon as addon',
			'voucher.type_customer as type_customer',
			'voucher.type_hvc as type_hvc',
			'voucher.islimited as islimited',
			'voucher.limit_voucher as limit_voucher',
			'voucher.user_input as user_input',
		
		);
		$this->db->select($afield);
		$this->db->where('voucher.user_input',$user_id);
		$this->db->order_by('voucher.id', 'ASC');
		return $this->db->get('voucher')->result_array();
   }


	public function get_by_id($id,$user_id){
		$afield = array(
			'voucher.id as id',
			'voucher.nama_voucher as nama_voucher',
			'voucher.channel_payment as channel_payment',
			'voucher.jenis_pembayaran as jenis_pembayaran',
			'voucher.jenis_cashback as jenis_cashback',
			'voucher.percent_cashback as percent_cashback',
			'voucher.nominal_cashback as nominal_cashback',
			'voucher.max_nominal as max_nominal',
			'voucher.start_datelive as start_datelive',
			'voucher.end_datelive as end_datelive',
			'voucher.wording as wording',
			'voucher.image as image',
			'voucher.kode_voucher as kode_voucher',
			'voucher.is_active as is_active',
			'voucher.already_subscribe as already_subscribe',
			'voucher.periode_time as periode_time',
			'voucher.special_day as special_day',
			'voucher.special_day_date as special_day_date',
			'voucher.minimum_payment as minimum_payment',
			'voucher.regional as regional',
			'voucher.witel as witel',
			'voucher.addon as addon',
			'voucher.type_customer as type_customer',
			'voucher.type_hvc as type_hvc',
			'voucher.islimited as islimited',
			'voucher.limit_voucher as limit_voucher',
			'voucher.user_input as user_input',
		
		);
		$this->db->select($afield);
		$this->db->where('voucher.user_input',$user_id);
		$this->db->where('voucher.id', $id);
		$this->db->order_by('voucher.id', 'ASC');
		return $this->db->get('voucher')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data,$user_id){
		$this->db->where('voucher.id <>',$id);
		$this->db->where('voucher.user_input',$user_id);
		$q = $this->db->get_where('voucher', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data,$user_id){
	 	$data['user_input'] = $user_id;
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('voucher', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data,$user_id){
		$this->db->where('voucher.user_input',$user_id);
		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('voucher.id', $id);
		$this->db->update('voucher', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data,$user_id){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('voucher.id',$data);	
			$this->db->where('voucher.user_input',$user_id);
			$this->db->delete('voucher');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}


};

/* END */
/* Mohon untuk tidak mengubah informasi ini : */
/* Generated by YBS CRUD Generator 2021-10-14 10:06:38 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/
