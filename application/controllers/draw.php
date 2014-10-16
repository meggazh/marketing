<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Draw extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library(array('auth','Datatables'));
		$this->load->helper(array('url'));
		$this->load->model(array('m_draw'));
		//$this->load->helper('notif');
		$this->load->view('master/bg_top');
		//$this->load->model('m_crud');
		//$this->template->title('Pembelian');
		//$this->auth->logged_in();
       // $this->template->set('top',$this->load->view('theme/top','',TRUE));
        //$this->template->set('sidebar',$this->load->view('theme/sidebar','',TRUE));
	}

	function index(){
		$this->load->view('trx/draw');
		//$this->template->load('default','page/vpembelian');

	}

	public function customer()
	{
		$data['customer'] = $this->m_draw->ambil_data(0);
		//$this->template->load('default','page/vtrpembelian',$data);
	}
	//public function save_master(){

	//	$iduser = $this->session->userdata('userid');

	///	$last_id = $this->m_pembelian->save_master($iduser);
//
	//	echo json_encode(array('lastid'=>$last_id));
	//}

	function save_detail(){

		$this->m_pembelian->save_detail();
	}

	function get_all(){
		$this->datatables->set_database('post');
		$this->datatables->select('txndrawhdr.TxnDrawHdrID,TxnDrawHdrStatus,mstsalespic.MstSalesPICName')
        ->from('txndrawhdr')
        ->join('mstsalespic','txndrawhdr.MstSalesPICID=mstsalespic.TxnDrawHdrID','INNER')
		//->join('mstcus','txndrawhdr.MstSalesPICID=mstsalespic.TxnDrawHdrID','INNER')
        ->unset_column('txndrawhdr.TxnDrawHdrID')
        ->add_column('aksi',
        	'<button class="btn btn-xs btn-flat btn-primary" onclick="view($1)">
        	<i class="fa fa-search"></i></button> 
        	<button class="btn btn-xs btn-flat btn-success" onclick="edit($1)">
        	<i class="fa fa-edit"></i></button> 
        	<button class="btn btn-xs btn-flat btn-danger" onclick="delete($1)">
        	<i class="fa fa-times"></i></button>','txndrawhdr.TxnDrawHdrID');
        
        echo $this->datatables->generate();
	}
	function cari_customer()
	{
		$kode = $this->input->post('MstCustIDName');
		$data['customer'] = $this->dropdown_model->ambil_data($kode);
		$num_rows = $data['customer']->num_rows();;
		if($num_rows > 0)
		{?>
			<select class="parent_daerah">
			<?php
			foreach($data['customer']->result() as $d)
			{?>
				<option value="<?php echo $d->MstCustID; ?>"><?php echo $d->MstCustIDName; ?></option>
			<?php
			}?>
			</select>
		<?php	
		}
		else
		{
			echo '<div class="hasil">Datanya masih kosong mas brow....!!!!</div>';
		}
	}
}