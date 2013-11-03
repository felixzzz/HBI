<?php
	class Home extends CI_Controller{

		function Home(){
                    parent::__construct();
                    $data['menu'] = $this->load->view('_shared/menu','',TRUE);
                    $data['header'] = $this->load->view('_shared/header',$data,TRUE);                        
                    $this->load->vars($data);
		}		
                function getFooter($id){
                    $result = $this->content_model->getContent($id);
                    $footer['extra']="";
                    if($result['value']!=''){                        
                        $footer['extra'] = "<img src='".base_url()."assets/img/header_footer/".$result['value']."'";
                    }
                        
                    return $footer;
                }
                
                
		function index(){
			$data['title'] = "Hello Baby Indonesia";                        
                        $data['img_url']= $this->content_model->getHomePict();                        
			$data['content'] = $this->load->view('Home/index',$data,TRUE);
                        
                        $footer = $this->getFooter("footer_home"); 
                        $data['footer'] = $this->load->view('_shared/footer',$footer,TRUE);
                        
			$this->load->view("_layout",$data);			
		}		
		function aboutUs(){						
                    $data['title'] = "About Us";
                    $data['content_detail'] = $this->content_model->getContent("au");
                    $data['content'] = $this->load->view('About_us/index',$data,TRUE);
                        
                    $footer = $this->getFooter("footer_au"); 
                    $data['footer'] = $this->load->view('_shared/footer',$footer,TRUE);
                    
                    $this->load->view('_layout',$data);
		}		
		function contactUs(){			
			$data['title'] = "Contact Us";
			$data['content_detail'] = $this->content_model->getContent("cu");
                        $data['content'] = $this->load->view('Contact_us/index',$data,TRUE);
                        
                        $footer = $this->getFooter("footer_cu");                        
                        $data['footer'] = $this->load->view('_shared/footer',$footer,TRUE);
                        
			$this->load->view('_layout',$data);
		}	
	}
?>