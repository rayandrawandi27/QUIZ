<?php class News_model extends CI_Model {
	
	public function __construct(){
		$this->load->database();
		}
	
	public function get_news($slug = FALSE){
		if ($slug === FALSE){
			$query = $this->db->get('barangg');
			
			return $query->result_array();
		}
		
		$query = $this->db->get_where('barangg', array('slug' => $slug));
	
		return $query->row_array();
	}
	
	public function get_news_by_id($kode = 0){
		if ($kode === 0){
			$query = $this->db->get('barangg');
			
			return $query->result_array();
		}
		
		$query = $this->db->get_where('barangg', array('kode' => $kode));
		
		return $query->row_array();	
	}
	
	public function set_news($kode = 0){
		$this->load->helper('url');
		$slug = url_title($this->input->post('kode'), 'dash', TRUE);
		$data = array('kode' => $this->input->post('kode'), 'nama' => $this->input->post('nama'), 'jumlah' => $this->input->post('jumlah'), 'harga' => $this->input->post('harga'), 'total' => $this->input->post('total'));
		
		if ($kode == 0){
			return $this->db->insert('barangg', $data);
		} else {
			$this->db->where('kode', $kode);
		
			return $this->db->update('barangg', $data);
		}
	}
		
	public function delete_news($kode){
		$this->db->where('kode', $kode);
		
		return $this->db->delete('barangg');
		}
} 