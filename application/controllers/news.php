<?php class News extends CI_Controller {       
	public function __construct(){         
		parent::__construct();
		$this->load->model('news_model');         
		$this->load->helper('url_helper');     
	}       
	
	public function index(){         
		$data['news'] = $this->news_model->get_news();         
		$data['title'] = 'News archive';           
		$this->load->view('templates/header', $data);         
		$this->load->view('news/index', $data);         
		$this->load->view('templates/footer');     
	}       
	
	public function view($slug = NULL){
		$data['news_item'] = $this->news_model->get_news($slug);                  
		
		if (empty($data['news_item'])){             
			show_404();         
		}           
		
		$data['kode'] = $data['news_item']['kode'];
		$this->load->view('templates/header', $data);         
		$this->load->view('news/view', $data);         
		$this->load->view('templates/footer');     
	}          
	
	public function create(){         
		$this->load->helper('form');         
		$this->load->library('form_validation');           
		$data['title'] = 'Create a news item';           
		$this->form_validation->set_rules('kode', 'kode', 'required');         
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		
		if ($this->form_validation->run() === FALSE){             
			$this->load->view('templates/header', $data);             
			$this->load->view('news/create');             
			$this->load->view('templates/footer');           
		}else{             
			$this->news_model->set_news();             
			$this->load->view('templates/header', $data);             
			$this->load->view('news/checkout');             
			$this->load->view('templates/footer');   
			//
			+redirect( base_url().'index.php/news');     			
		}   		
	}          
	
	public function tambah(){
		$data['news'] = $this->news_model->get_news();         
		$data['title'] = 'News archive';           
		$this->load->view('templates/header', $data);         
		$this->load->view('news/create', $data);         
		$this->load->view('templates/footer'); 
	}
	
	public function edit(){         
		$kode = $this->uri->segment(3);                  
		
		if (empty($kode)){             
			show_404();         
		}                  
		
		$this->load->helper('form');         
		$this->load->library('form_validation');                  
		$data['title'] = 'Edit a news item';                 
		$data['news_item'] = $this->news_model->get_news_by_id($kode);
		$this->form_validation->set_rules('kode', 'kode', 'required');         
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('total', 'total', 'required');       
		
		if ($this->form_validation->run() === FALSE){             
			$this->load->view('templates/header', $data);             
			$this->load->view('news/edit', $data);             
			$this->load->view('templates/footer');
		}else{             
			$this->news_model->set_news($kode);             
			//$this->load->view('news/success');             
			redirect( base_url().'index.php/news');         
		}     
	}          
	
	public function delete(){         
		$kode = $this->uri->segment(3);                  
		
		if (empty($kode)){             
			show_404();
		}                          
		
		$news_item = $this->news_model->get_news_by_id($kode);                  
		$this->news_model->delete_news($kode);                 
		
		redirect( base_url() . 'index.php/news');             
	} 
	
	public function checkout(){   
		$this->load->helper('form');         
		$this->load->library('form_validation');                  
		$data['title'] = 'Checkout item';                 
	
		//$this->load->helper('form');         
		//$this->load->library('form_validation');           
		//$data['title'] = 'Create a news item'; 
		$this->form_validation->set_rules('kode', 'kode', 'required');         
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		//$this->form_validation->set_rules('total', 'total', 'required'); 
		//$kode = $this->input->post('kode');
		//$nama = $this->input->post('nama');
		//$jumlah = $this->input->post('jumlah');
		//$this->load->view('checkout',$data);
		
		if ($this->form_validation->run() === FALSE){             
			$this->load->view('templates/header', $data);             
			$this->load->view('news/create');             
			$this->load->view('templates/footer');           
		}else{        
			$harga = $this->input->post('harga');
			$jumlah = $this->input->post('jumlah');
			$data = array('data' => $_POST, 'title' => "checkout", 'total' => $harga * $jumlah );
			//$this->news_model->set_news();             
			$this->load->view('templates/header', $data);             
			$this->load->view('news/checkout');             
			$this->load->view('templates/footer');   
		///redirect( base_url().'index.php/news');     			
		}   		
	} 
} 