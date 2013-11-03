<?
	class Product extends CI_Controller{

		function Product()
		{
			parent::__construct();
			$data['menu'] = $this->load->view('_shared/menu','',TRUE);			
                        $data['header'] = $this->load->view('_shared/header',$data,TRUE);
                        $data['footer'] = $this->load->view('_shared/footer','',TRUE);
			$this->load->vars($data);
		}
				
		function index()
                {
                    redirect('home','refresh');
                }
                
//		function index()
//		{
//			$data['rs'] = $this->db_product->getproduct()->result_array();
//			$data['product'] = "All Product";
//			$data['title'] = "Product";
//			$data['content'] = $this->load->view('Product/index',$data,TRUE);
//			$this->load->view('_layout',$data);	
//		}
		
		
		
//		function noodle_index()
//		{
//			$data['product'] = "Noodle";
//			$data['rs'] = $this->db_product->getNdProduct()->result_array();
//			$data['title'] = "Product";
//			$data['content'] = $this->load->view('Product/noodle/index',$data,TRUE);
//			$this->load->view('_layout',$data);	
//		}
		
		function comfortable_index()
		{                        
			$data['rs'] = $this->db_product->getCfProduct()->result_array();
			$data['product'] = "Comfortable";
			$data['title'] = "Product";
			$data['content'] = $this->load->view('Product/comfortable/index',$data,TRUE);
			$this->load->view('_layout',$data);	
		}
		
		
		function hbaby_index()
		{

			$data['rs_nb'] = $this->db_product->get_hb_product("nb",2)->result_array();
			$data['rs_ml'] = $this->db_product->get_hb_product("ml",2)->result_array();
			$data['rs_tb'] = $this->db_product->get_hb_product("tb",2)->result_array();
			$data['rs_gs'] = $this->db_product->get_hb_product("gs",2)->result_array();
			
			$data['title'] = "Product";
			$data['content'] = $this->load->view('Product/hello_baby/index',$data,TRUE);
			$this->load->view('_layout',$data);	
		}
		
		
		function hbaby_babyml()
		{

			$data['rs'] = $this->db_product->get_hb_product("ml")->result_array();
			$data['product'] = "Baby M/L";
			$data['title'] = "Product";
			$data['content'] = $this->load->view('Product/hello_baby/_display',$data,TRUE);
			$this->load->view('_layout',$data);	
		}
		function hbaby_giftSet()
		{

			$data['rs'] = $this->db_product->get_hb_product("gs")->result_array();
			$data['product'] = "Gift Set";
			$data['title'] = "Product";
			$data['content'] = $this->load->view('Product/hello_baby/_display',$data,TRUE);
			$this->load->view('_layout',$data);	
		}
		function hbaby_newBorn()
		{

			$data['rs'] = $this->db_product->get_hb_product("nb")->result_array();
			$data['product'] = "New Born";
			$data['title'] = "Product";
			$data['content'] = $this->load->view('Product/hello_baby/_display',$data,TRUE);
			$this->load->view('_layout',$data);	
		}
		function hbaby_topBottom()
		{

			$data['rs'] = $this->db_product->get_hb_product("tb")->result_array();
			$data['product'] = "Top And Bottom";
			$data['title'] = "Product";
			$data['content'] = $this->load->view('Product/hello_baby/_display',$data,TRUE);
			$this->load->view('_layout',$data);	
		}
	}



?>