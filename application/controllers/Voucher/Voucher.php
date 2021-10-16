<?php
require APPPATH. '/controllers/Voucher/Voucher_config.php';

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voucher extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('Voucher/Voucher_model','tmodel');
		$this->log_key ='log_Voucher';
		$this->title = new Voucher_config();
   }


	public function index(){
		$data = array(
			'title_page_big'		=> 'DAFTAR',
			'title'					=> $this->title,
			'link_refresh_table'	=> site_url().'Voucher/Voucher/refresh_table/'.$this->_token,
			'link_create'			=> site_url().'Voucher/Voucher/create',
			'link_update'			=> site_url().'Voucher/Voucher/update',
			'link_delete'			=> site_url().'Voucher/Voucher/delete_multiple',
		);
		
		$this->template->load('Voucher/Voucher_list',$data);
	}

	public function refresh_table($token){
		if($token==$this->_token){
			$row = $this->tmodel->json($this->_user_id);
			
			//encode id 
			$tm = time();
			$this->session->set_userdata($this->log_key,$tm);
			$x = 0;
			foreach($row['data'] as $val){
				$idgenerate = _encode_id($val['id'],$tm);
				$row['data'][$x]['id'] = $idgenerate;
				$x++;
			}
			
			$o = new Outputview();
			$o->success	= 'true';
			$o->serverside	= 'true';
			$o->message	= $row;
			
			echo $o->result();
			

		}else{
			redirect('Auth');
		}
	}

	public function create(){
		$data = array(
			'title_page_big'		=> 'Buat Baru',
			'title'					=> $this->title,
			'link_save'				=> site_url().'Voucher/Voucher/create_action',
			'link_back'				=> $this->agent->referrer(),			
		);
		
		$this->template->load('Voucher/Voucher_form',$data);

	}

	public function create_action(){
		$data 	= $this->input->post('data_ajax',true);
		$val	= json_decode($data,true);
		$o		= new Outputview(); 

		/* 
		*	untuk mengganti message output
		* tambahkan perintah : $o->message = 'isi pesan'; 
 		* sebelum perintah validasi.
		* ex.
		* 	$o->message = 'halo ini pesan baru';
		* 	if(!$o->not_empty($val['descriptions'],'#descriptions')){
		*		echo $o->result();	
		*		return;
		*  	}
		*
		*/	

		//mencegah data kosong
		if(!$o->not_empty($val['nama_voucher'],'#nama_voucher')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('nama_voucher'=>$val['nama_voucher']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#nama_voucher')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['channel_payment'],'#channel_payment')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('channel_payment'=>$val['channel_payment']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#channel_payment')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['jenis_pembayaran'],'#jenis_pembayaran')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('jenis_pembayaran'=>$val['jenis_pembayaran']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#jenis_pembayaran')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['jenis_cashback'],'#jenis_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('jenis_cashback'=>$val['jenis_cashback']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#jenis_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['percent_cashback'],'#percent_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('percent_cashback'=>$val['percent_cashback']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#percent_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['nominal_cashback'],'#nominal_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('nominal_cashback'=>$val['nominal_cashback']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#nominal_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['max_nominal'],'#max_nominal')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('max_nominal'=>$val['max_nominal']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#max_nominal')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['start_datelive'],'#start_datelive')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('start_datelive'=>$val['start_datelive']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#start_datelive')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['end_datelive'],'#end_datelive')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('end_datelive'=>$val['end_datelive']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#end_datelive')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['wording'],'#wording')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('wording'=>$val['wording']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#wording')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['image'],'#image')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('image'=>$val['image']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#image')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['kode_voucher'],'#kode_voucher')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('kode_voucher'=>$val['kode_voucher']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#kode_voucher')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['is_active'],'#is_active')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('is_active'=>$val['is_active']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#is_active')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['already_subscribe'],'#already_subscribe')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('already_subscribe'=>$val['already_subscribe']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#already_subscribe')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['periode_time'],'#periode_time')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('periode_time'=>$val['periode_time']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#periode_time')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['special_day'],'#special_day')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('special_day'=>$val['special_day']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#special_day')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['special_day_date'],'#special_day_date')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('special_day_date'=>$val['special_day_date']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#special_day_date')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['minimum_payment'],'#minimum_payment')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('minimum_payment'=>$val['minimum_payment']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#minimum_payment')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['regional'],'#regional')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('regional'=>$val['regional']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#regional')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['witel'],'#witel')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('witel'=>$val['witel']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#witel')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['addon'],'#addon')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('addon'=>$val['addon']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#addon')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['type_customer'],'#type_customer')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('type_customer'=>$val['type_customer']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#type_customer')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['type_hvc'],'#type_hvc')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('type_hvc'=>$val['type_hvc']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#type_hvc')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['islimited'],'#islimited')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('islimited'=>$val['islimited']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#islimited')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['limit_voucher'],'#limit_voucher')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('limit_voucher'=>$val['limit_voucher']);
		$exist = $this->tmodel->if_exist('',$field,$this->_user_id);
		if(!$o->not_exist($exist,'#limit_voucher')){
			echo $o->result();	
			return;
		}

		unset($val['id']);
		$success = $this->tmodel->insert($val,$this->_user_id);
		echo $o->auto_result($success);

	}

	public function update($id){
		$id 				= $this->security->xss_clean($id);
		$id_generate		= $id;
		
		/** proses decode id 
		* important !! tempdata digunakan sbagai antisipasi
		* perubahan session saat membuka tab baru secara bersamaan
		**/
		$this->log_temp	= $this->session->userdata($this->log_key);
		$this->session->set_tempdata($id,$this->log_temp,300);
		
		//mengembalikan id asli
		$id = _decode_id($id,$this->log_temp);
		
		$row = $this->tmodel->get_by_id($id,$this->_user_id);
		
		if($row){
			$data = array(
				'title_page_big'		=> 'Buat Baru',
				'title'					=> $this->title,
				'link_save'				=> site_url().'Voucher/Voucher/update_action',
				'link_back'				=> $this->agent->referrer(),
				'data'					=> $row,
				'id'					=> $id_generate,
			);
			
			$this->template->load('Voucher/Voucher_form',$data);
		}else{
			redirect($this->agent->referrer());
		}
	}

	public function update_action(){
		$data 	= $this->input->post('data_ajax',true);
		$val	= json_decode($data,true);
		$this->log_temp		= $this->session->tempdata($val['id']);
		$val['id']				= _decode_id($val['id'],$this->log_temp);
		
		$o		= new Outputview(); 
			
		/* 
		*	untuk mengganti message output
		* tambahkan perintah : $o->message = 'isi pesan'; 
 		* sebelum perintah validasi.
		* ex.
		* 	$o->message = 'halo ini pesan baru';
		* 	if(!$o->not_empty($val['descriptions'],'#descriptions')){
		*		echo $o->result();	
		*		return;
		*  	}
		*
		*/			

		//mencegah data kosong
		if(!$o->not_empty($val['nama_voucher'],'#nama_voucher')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('nama_voucher'=>$val['nama_voucher']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#nama_voucher')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['channel_payment'],'#channel_payment')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('channel_payment'=>$val['channel_payment']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#channel_payment')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['jenis_pembayaran'],'#jenis_pembayaran')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('jenis_pembayaran'=>$val['jenis_pembayaran']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#jenis_pembayaran')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['jenis_cashback'],'#jenis_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('jenis_cashback'=>$val['jenis_cashback']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#jenis_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['percent_cashback'],'#percent_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('percent_cashback'=>$val['percent_cashback']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#percent_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['nominal_cashback'],'#nominal_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('nominal_cashback'=>$val['nominal_cashback']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#nominal_cashback')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['max_nominal'],'#max_nominal')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('max_nominal'=>$val['max_nominal']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#max_nominal')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['start_datelive'],'#start_datelive')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('start_datelive'=>$val['start_datelive']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#start_datelive')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['end_datelive'],'#end_datelive')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('end_datelive'=>$val['end_datelive']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#end_datelive')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['wording'],'#wording')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('wording'=>$val['wording']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#wording')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['image'],'#image')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('image'=>$val['image']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#image')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['kode_voucher'],'#kode_voucher')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('kode_voucher'=>$val['kode_voucher']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#kode_voucher')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['is_active'],'#is_active')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('is_active'=>$val['is_active']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#is_active')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['already_subscribe'],'#already_subscribe')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('already_subscribe'=>$val['already_subscribe']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#already_subscribe')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['periode_time'],'#periode_time')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('periode_time'=>$val['periode_time']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#periode_time')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['special_day'],'#special_day')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('special_day'=>$val['special_day']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#special_day')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['special_day_date'],'#special_day_date')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('special_day_date'=>$val['special_day_date']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#special_day_date')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['minimum_payment'],'#minimum_payment')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('minimum_payment'=>$val['minimum_payment']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#minimum_payment')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['regional'],'#regional')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('regional'=>$val['regional']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#regional')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['witel'],'#witel')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('witel'=>$val['witel']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#witel')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['addon'],'#addon')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('addon'=>$val['addon']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#addon')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['type_customer'],'#type_customer')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('type_customer'=>$val['type_customer']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#type_customer')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['type_hvc'],'#type_hvc')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('type_hvc'=>$val['type_hvc']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#type_hvc')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['islimited'],'#islimited')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('islimited'=>$val['islimited']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#islimited')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['limit_voucher'],'#limit_voucher')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('limit_voucher'=>$val['limit_voucher']);
		$exist = $this->tmodel->if_exist($val['id'],$field,$this->_user_id);
		if(!$o->not_exist($exist,'#limit_voucher')){
			echo $o->result();	
			return;
		}


		$success = $this->tmodel->update($val['id'],$val,$this->_user_id);
		echo $o->auto_result($success);

	}

	public function delete_multiple(){
		$data=$this->input->get('data_ajax',true);
		$val=json_decode($data,true);
		$data = explode(',',$val['data_delete']);

		//get key generate
		$log_id = $this->session->userdata($this->log_key);
		$xx=0;
		foreach($data as $value){
			$value =  _decode_id($value,$log_id);
			//menganti ke id asli
			$data[$xx] = $value;
			$xx++;	
		}
		
		$success = $this->tmodel->delete_multiple($data,$this->_user_id);
		
		$o = new Outputview();
		
		//create message
		if($success){
			$o->success 	= 'true';
			$o->message	= 'Data berhasil di hapus !';
		}else{
			$o->success 	= 'false';
			$o->message	= 'Opps..Gagal menghapus data !!';
		}
		
		
		echo $o->result();
	
	}



};

/* END */
/* Mohon untuk tidak mengubah informasi ini : */
/* Generated by YBS CRUD Generator 2021-10-14 10:06:38 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

