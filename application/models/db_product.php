<?

class Db_product extends CI_Model{
	function getproduct()
	{
		$query = $this->db->query('Select * from ms_product_type');		
		return $query;
	}
	function getCfProduct()
	{
		$query = $this->db->query('Select * from ms_product WHERE Brand_ID LIKE "cf" ');		
		return $query;
	}	
	function getNdProduct()
	{

		$query = $this->db->query('Select * from ms_product WHERE Brand_ID LIKE "nd" ');
                
		return $query;
	}

	function get_hb_product($type, $limit = "100")
	{
            
            if($limit=="100")
            {
		$query = $this->db->query('Select * from ms_product WHERE Brand_ID LIKE "hb" AND Product_type_ID like "'.$type.'" LIMIT '.$limit.' ');
		return $query;
            }
            else 
            {
                $query = $this->db->query('Select * from ms_product WHERE Brand_ID LIKE "hb" AND Product_type_ID like "'.$type.'"  ORDER BY RAND() LIMIT '.$limit.'');
		return $query;
            }
	}
        
        function get_product_by_id($pid)
        {
            $query = $this->db->query('Select * from ms_product WHERE Product_ID like "'.$pid.'" ');
            return $query;
        }
        function get_brand()
        {
            $query = $this->db->query('Select * from ms_brand');
            return $query;
        }
        function get_product_type()
        {
            $query = $this->db->query('Select * from ms_product_type WHERE Product_Type_Id NOT like "cf" AND Product_Type_Id NOT like "nd"');
            return $query;
        }
}

?>