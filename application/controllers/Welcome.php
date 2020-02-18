<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct()
	 {
		 parent::__construct();
		 $this->load->model('Mwelcome');
		 $this->load->helper('smiley');
         $this->load->library('table');
	 }
	 
	public function test()
	{
		echo "Ini Mencoba";
	}
	
	public function hitung_luas()
	{
		$panjang = $this->input->post('panjang');
		$lebar = $this->input->post('lebar');
		$data['luaspp']=$this->Mwelcome->luas($panjang,$lebar);
		$this->load->view('input',$data);
	}
	
	public function index()
        {
			error_reporting(0);
			
			if(isset($_POST['komentar'])){
				$komen_net = $_POST['komentar'];
				$str = parse_smileys ($komen_net, 'project/smileys');
			}
			
			//$str = 'Here are some smileys: :-)  ;-)';
			//$str = parse_smileys($str, 'project/smileys');
			//echo $str;
			
            $image_array = get_clickable_smileys('project/smileys', 'komentar');
            $col_array = $this->table->make_columns($image_array, 8);
				
            $data['smiley_table'] = $this->table->generate($col_array);
			$data['komentar'] = $str;
            $this->load->view('smiley_view', $data);
        }
}