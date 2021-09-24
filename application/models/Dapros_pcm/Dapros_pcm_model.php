<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dapros_pcm_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			dapros_pcm.id as id,
			dapros_pcm.ncli as ncli,
			dapros_pcm.nama as nama,
			dapros_pcm.pstn1 as pstn1,
			dapros_pcm.no_speedy as no_speedy,
			dapros_pcm.facebook as facebook,
			dapros_pcm.verfi_fb as verfi_fb,
			dapros_pcm.twitter as twitter,
			dapros_pcm.verfi_twitter as verfi_twitter,
			dapros_pcm.relasi as relasi,
			dapros_pcm.email as email,
			dapros_pcm.email_lain as email_lain,
			dapros_pcm.handphone as handphone,
			dapros_pcm.nama_pastel as nama_pastel,
			dapros_pcm.alamat as alamat,
			dapros_pcm.kota as kota,
			dapros_pcm.waktu_psb as waktu_psb,
			dapros_pcm.kec_speedy as kec_speedy,
			dapros_pcm.billing as billing,
			dapros_pcm.payment as payment,
			dapros_pcm.tgl_lahir as tgl_lahir,
			dapros_pcm.status as status,
			dapros_pcm.date_created as date_created,
			dapros_pcm.hub_pemilik as hub_pemilik,
			dapros_pcm.veri_distribusi as veri_distribusi,
			dapros_pcm.veri_count as veri_count,
			dapros_pcm.veri_status as veri_status,
			dapros_pcm.veri_call as veri_call,
			dapros_pcm.veri_keterangan as veri_keterangan,
			dapros_pcm.distrib_agent as distrib_agent,
			dapros_pcm.veri_lup as veri_lup,
			dapros_pcm.lup as lup,
			dapros_pcm.division as division,
			dapros_pcm.witel as witel,
			dapros_pcm.kandatel as kandatel,
			dapros_pcm.regional as regional,
			dapros_pcm.nik as nik,
			dapros_pcm.no_kk as no_kk,
			dapros_pcm.nama_ibu_kandung as nama_ibu_kandung,
			dapros_pcm.path as path,
			dapros_pcm.instagram as instagram,
			dapros_pcm.handphone_lain as handphone_lain,
			dapros_pcm.opsi_call as opsi_call,
			dapros_pcm.jk as jk,
			dapros_pcm.email3 as email3,
			dapros_pcm.email4 as email4,
			dapros_pcm.email5 as email5,
			dapros_pcm.hp3 as hp3,
			dapros_pcm.hp4 as hp4,
			dapros_pcm.hp5 as hp5,
			dapros_pcm.sumber as sumber,
			dapros_pcm.id_campaign as id_campaign,
		');
		
		$this->datatables->from('dapros_pcm');

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'dapros_pcm.id as id',
			'dapros_pcm.ncli as ncli',
			'dapros_pcm.nama as nama',
			'dapros_pcm.pstn1 as pstn1',
			'dapros_pcm.no_speedy as no_speedy',
			'dapros_pcm.facebook as facebook',
			'dapros_pcm.verfi_fb as verfi_fb',
			'dapros_pcm.twitter as twitter',
			'dapros_pcm.verfi_twitter as verfi_twitter',
			'dapros_pcm.relasi as relasi',
			'dapros_pcm.email as email',
			'dapros_pcm.email_lain as email_lain',
			'dapros_pcm.handphone as handphone',
			'dapros_pcm.nama_pastel as nama_pastel',
			'dapros_pcm.alamat as alamat',
			'dapros_pcm.kota as kota',
			'dapros_pcm.waktu_psb as waktu_psb',
			'dapros_pcm.kec_speedy as kec_speedy',
			'dapros_pcm.billing as billing',
			'dapros_pcm.payment as payment',
			'dapros_pcm.tgl_lahir as tgl_lahir',
			'dapros_pcm.status as status',
			'dapros_pcm.date_created as date_created',
			'dapros_pcm.hub_pemilik as hub_pemilik',
			'dapros_pcm.veri_distribusi as veri_distribusi',
			'dapros_pcm.veri_count as veri_count',
			'dapros_pcm.veri_status as veri_status',
			'dapros_pcm.veri_call as veri_call',
			'dapros_pcm.veri_keterangan as veri_keterangan',
			'dapros_pcm.distrib_agent as distrib_agent',
			'dapros_pcm.veri_lup as veri_lup',
			'dapros_pcm.lup as lup',
			'dapros_pcm.division as division',
			'dapros_pcm.witel as witel',
			'dapros_pcm.kandatel as kandatel',
			'dapros_pcm.regional as regional',
			'dapros_pcm.nik as nik',
			'dapros_pcm.no_kk as no_kk',
			'dapros_pcm.nama_ibu_kandung as nama_ibu_kandung',
			'dapros_pcm.path as path',
			'dapros_pcm.instagram as instagram',
			'dapros_pcm.handphone_lain as handphone_lain',
			'dapros_pcm.opsi_call as opsi_call',
			'dapros_pcm.jk as jk',
			'dapros_pcm.email3 as email3',
			'dapros_pcm.email4 as email4',
			'dapros_pcm.email5 as email5',
			'dapros_pcm.hp3 as hp3',
			'dapros_pcm.hp4 as hp4',
			'dapros_pcm.hp5 as hp5',
			'dapros_pcm.sumber as sumber',
			'dapros_pcm.id_campaign as id_campaign',
		
		);
		$this->db->select($afield);

		$this->db->order_by('dapros_pcm.id', 'ASC');
		return $this->db->get('dapros_pcm')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'dapros_pcm.id as id',
			'dapros_pcm.ncli as ncli',
			'dapros_pcm.nama as nama',
			'dapros_pcm.pstn1 as pstn1',
			'dapros_pcm.no_speedy as no_speedy',
			'dapros_pcm.facebook as facebook',
			'dapros_pcm.verfi_fb as verfi_fb',
			'dapros_pcm.twitter as twitter',
			'dapros_pcm.verfi_twitter as verfi_twitter',
			'dapros_pcm.relasi as relasi',
			'dapros_pcm.email as email',
			'dapros_pcm.email_lain as email_lain',
			'dapros_pcm.handphone as handphone',
			'dapros_pcm.nama_pastel as nama_pastel',
			'dapros_pcm.alamat as alamat',
			'dapros_pcm.kota as kota',
			'dapros_pcm.waktu_psb as waktu_psb',
			'dapros_pcm.kec_speedy as kec_speedy',
			'dapros_pcm.billing as billing',
			'dapros_pcm.payment as payment',
			'dapros_pcm.tgl_lahir as tgl_lahir',
			'dapros_pcm.status as status',
			'dapros_pcm.date_created as date_created',
			'dapros_pcm.hub_pemilik as hub_pemilik',
			'dapros_pcm.veri_distribusi as veri_distribusi',
			'dapros_pcm.veri_count as veri_count',
			'dapros_pcm.veri_status as veri_status',
			'dapros_pcm.veri_call as veri_call',
			'dapros_pcm.veri_keterangan as veri_keterangan',
			'dapros_pcm.distrib_agent as distrib_agent',
			'dapros_pcm.veri_lup as veri_lup',
			'dapros_pcm.lup as lup',
			'dapros_pcm.division as division',
			'dapros_pcm.witel as witel',
			'dapros_pcm.kandatel as kandatel',
			'dapros_pcm.regional as regional',
			'dapros_pcm.nik as nik',
			'dapros_pcm.no_kk as no_kk',
			'dapros_pcm.nama_ibu_kandung as nama_ibu_kandung',
			'dapros_pcm.path as path',
			'dapros_pcm.instagram as instagram',
			'dapros_pcm.handphone_lain as handphone_lain',
			'dapros_pcm.opsi_call as opsi_call',
			'dapros_pcm.jk as jk',
			'dapros_pcm.email3 as email3',
			'dapros_pcm.email4 as email4',
			'dapros_pcm.email5 as email5',
			'dapros_pcm.hp3 as hp3',
			'dapros_pcm.hp4 as hp4',
			'dapros_pcm.hp5 as hp5',
			'dapros_pcm.sumber as sumber',
			'dapros_pcm.id_campaign as id_campaign',
		
		);
		$this->db->select($afield);

		$this->db->where('dapros_pcm.id', $id);
		$this->db->order_by('dapros_pcm.id', 'ASC');
		return $this->db->get('dapros_pcm')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('dapros_pcm.id <>',$id);

		$q = $this->db->get_where('dapros_pcm', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('dapros_pcm', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('dapros_pcm.id', $id);
		$this->db->update('dapros_pcm', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('dapros_pcm.id',$data);	
	
			$this->db->delete('dapros_pcm');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}


};

/* END */
/* Mohon untuk tidak mengubah informasi ini : */
/* Generated by YBS CRUD Generator 2021-06-06 20:21:10 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/
