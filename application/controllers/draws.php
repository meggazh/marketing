<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class draws extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->database();
		$this->load->model(array('drawsz'));
	}

	function index()
	{
		$data['daerah'] = $this->drawsz->ambil_data(0);
		$this->load->view('trx/draws',$data);
	}
	function cari_daerah()
	{
		$kode = $this->input->post('kode_parent');
		$data['daerah'] = $this->drawsz->ambil_data($kode);
		$num_rows = $data['daerah']->num_rows();;
		if($num_rows > 0)
		{?>
			<select class="tes">
			<?php
			foreach($data['daerah']->result() as $d)
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

	public function save_master(){

		$iduser = $this->session->userdata('userid');

		$last_id = $this->drawsz->save_master($iduser);

		echo json_encode(array('lastid'=>$last_id));
	}

	function save_detail(){

		$this->drawsz->save_detail();
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}

