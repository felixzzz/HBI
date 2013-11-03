<?

class Content_model extends CI_Model{
       
    function getHomePict()
    {
        $name=$this->db->query('Select * from ms_content Where content_id="home"')->row_array();
        return base_url()."assets/img/".$name['value'];
    }
    
    function setContent($id,$value){
        $data = array(
                'content_id' => $id,
                'value' => $value                    
                );  
       
        $this->db->where('content_id', $id);
        $this->db->update('ms_content', $data); 
    }
    
    function getContent($id)
    {
        return $this->db->query('Select * from ms_content Where content_id="'.$id.'"')->row_array();
    }        
    
    function getHeaderPict()
    {
        
        $header["bg"]=base_url()."assets/img/header_footer/".$this->db->query('Select * from ms_content Where content_id="header_bg"')->row()->value;
        $header["fb"]=base_url()."assets/img/header_footer/".$this->db->query('Select * from ms_content Where content_id="header_fb"')->row()->value;
        $header["hb"]=base_url()."assets/img/header_footer/".$this->db->query('Select * from ms_content Where content_id="header_hb"')->row()->value;
        
        return $header;
    }
    
    function getfooterPict()
    {
        
        $footer["home"]=base_url()."assets/img/header_footer/".$this->db->query('Select * from ms_content Where content_id="footer_home"')->row()->value;
        $footer["au"]=base_url()."assets/img/header_footer/".$this->db->query('Select * from ms_content Where content_id="footer_au"')->row()->value;
        $footer["cu"]=base_url()."assets/img/header_footer/".$this->db->query('Select * from ms_content Where content_id="footer_cu"')->row()->value;
        
        return $footer;
    }
}
?>