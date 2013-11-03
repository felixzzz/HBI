<?php
class Admin extends CI_Controller{
    
    function Admin(){        
            parent::__construct();
            is_logged_in();            
    }
    
    function adminIndex($cat="product"){                
        if($cat=="product")
        {
            $data['content'] = $this->showProduct();
            $data['title'] = "Product Management";
        }        
        if($cat=="change_password")
        {
            $data['content'] = $this->changePassword();
            $data['title'] = "Change Password";
        }        
        if($cat=="header_footer")
        {
            $data['content'] = $this->header_footer();
            $data['title'] = "Edit Header & Footer";
        }
        if($cat=="content")
        {            
            $data['content'] = $this->content_editor();
            $data['title'] = "Edit Content Detail";
            
        }        
        $data['cat']=$cat;
        
        $data['menu'] = $this->load->view("Admin_page/menu",$data,TRUE);
        $this->load->view("Admin_page/_admin_layout",$data);
    }
    
    function changePassword(){   
        $this->load->helper('form');
        return $this->load->view("Admin_page/change_pass",'',TRUE);
    }
    function content_editor(){   
        $this->load->helper('form');
        $data['img_url']= $this->content_model->getHomePict();
        $data['contact_us_content'] = $this->content_model->getContent("cu");
        $data['about_us_content'] = $this->content_model->getContent("au");
        return $this->load->view("Admin_page/content_editor",$data,TRUE);
    }
    function header_footer(){
        $this->load->helper('form');
        $data['header']= $this->content_model->getHeaderPict();
        $data['footer']= $this->content_model->getFooterPict();
        
        return $this->load->view("Admin_page/header_footer",$data,TRUE);
    }    
    function do_change_content($id){
        $data_user = $this->input->post();
        
        $this->content_model->setContent($id,$data_user['value']);
        redirect('admin/adminIndex/','refresh');        
    }
    function do_change_home_content(){
        //newpict
        $data_user = $this->input->post();
                
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = "home";
        $config['overwrite'] = TRUE;
        $config['max_size']    = '10000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        
        $this->load->library('upload', $config);        
        if ( ! $this->upload->do_upload("newpict"))
        {            
            $error = array('error' => $this->upload->display_errors());
            $this->adminIndex("content");            
        }
        else
        {         
            $uploaded_data = array('upload_data' => $this->upload->data());        
            $data = $this->upload->data();
            
            $this->content_model->setContent('home', $data["file_name"]);            
            
            redirect('admin/adminIndex','refresh');       
        }
        
    }
    function do_changePassword(){
        $this->load->model('user_model','',TRUE);
        $data_user = $this->input->post();
        if($data_user['newpass']==$data_user['confpass'])
        {
            $this->user_model->change_pass($data_user['newpass']);
        }
        else {
            redirect('admin/adminIndex','refresh');
        }
    }    
    function do_logout(){
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('home','refresh');
    }
    
    //PRODUCT
    function showProduct(){
        $data['cf'] = $this->db_product->getCfProduct()->result_array();        
        $data['hb_nb'] = $this->db_product->get_hb_product("nb")->result_array();
        $data['hb_ml'] = $this->db_product->get_hb_product("ml")->result_array();
        $data['hb_tb'] = $this->db_product->get_hb_product("tb")->result_array();
        $data['hb_gs'] = $this->db_product->get_hb_product("gs")->result_array();
        return $this->load->view("Admin_page/product_management",$data,TRUE);
        
    }
    function addProduct($err=""){
        $this->load->helper('form');
        $data['brand'] = $this->db_product->get_brand()->result_array();
        $data['product_type'] = $this->db_product->get_product_type()->result_array();
        $data['err']=$err;
        $this->load->view("Admin_page/add_product",$data);
    }
    function doAddProduct(){
        $data_user = $this->input->post();
        
        
        $product_type="";
        if($data_user['brand_id']=="hb")
        {$product_type=$data_user['product_type_id']."/";}
        
        $config['upload_path'] = './assets/img/Product/'.$data_user['brand_id'].'/'.$data_user['product_type_id'];
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $data_user['product_id'];
        $config['overwrite'] = TRUE;
        $config['max_size']    = '10000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        
        $this->load->library('upload', $config);
        //$this->upload->do_upload("picture");
        if ( ! $this->upload->do_upload("picture"))
        {            
            $error = array('error' => $this->upload->display_errors());
            $this->addProduct($error['error']);            
        }
        else
        {         
            $uploaded_data = array('upload_data' => $this->upload->data());        
            
            $data = array(
            'Product_ID' => $data_user['product_id'] ,
            'Brand_ID' => $data_user['brand_id'],
            'Description' => $data_user['description'],
            'Product_type_ID' => $data_user['product_type_id'],
            'Age' => $data_user['age'],
            'Picture' => $uploaded_data['upload_data']['file_name'],
            'Packaging' => $data_user['packaging']
            );
            
            $this->db->insert('ms_product', $data);
            redirect('admin/adminIndex','refresh');       
        }
        
        
    }        
    function editProduct($pid,$err=""){
        $this->load->helper('form');
        $data['rs'] = $this->db_product->get_product_by_id($pid)->row_array();
        $data['brand'] = $this->db_product->get_brand()->result_array();
        $data['product_type'] = $this->db_product->get_product_type()->result_array();
        $data['error']=$err;
        $this->load->view("Admin_page/edit_product",$data);        
    }
    function doEditProduct(){
        $data_user = $this->input->post();
               
        
        $product_type="";
        if($data_user['brand_id']=="hb")
        {$product_type=$data_user['product_type_id']."/";}
        
        $config['upload_path'] = './assets/img/Product/'.$data_user['brand_id'].'/'.$data_user['product_type_id'];
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $data_user['product_id'];
        $config['overwrite'] = TRUE;
        $config['max_size']    = '10000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        
        $this->load->library('upload', $config);
        //$this->upload->do_upload("picture");
        if ( ! $this->upload->do_upload("picture"))
        {
            
            $error = array('error' => $this->upload->display_errors());
            $this->editProduct($data_user['product_id'],$error['error']);
            
        }
        else
        {         
            $uploaded_data = array('upload_data' => $this->upload->data());        
            
                       
            $data = array(
            'Product_ID' => $data_user['product_id'] ,
            'Brand_ID' => $data_user['brand_id'],
            'Description' => $data_user['description'],
            'Product_type_ID' => $data_user['product_type_id'],
            'Age' => $data_user['age'],            
            'Packaging' => $data_user['packaging']
            );
            $this->db->where('Product_ID', $data_user['pid']);
            $this->db->update('ms_product', $data); 

            redirect('admin/adminIndex','refresh');
        }        
    }
    function doDeleteProduct($pid){
        $this->db->where('Product_ID', $pid);
        $this->db->delete('ms_product');
        redirect('admin/adminIndex','refresh');
    }
   
}
?>