<?

class User_model extends CI_Model{
    
    function validate_user($user,$pass)
    {
        $this->load->library('session');
        $this -> db -> select('username, password');
        $this -> db -> from('ms_user');
        $this -> db -> where('username = ' . "'" . $user . "'");
        $this -> db -> where('password = ' . "'" . $pass . "'");
        $this -> db -> limit(1);
        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            $newdata = array(
                   'username'  => $user,                   
                   'logged_in' => TRUE
                   );
            $this->session->set_userdata($newdata);
            
            //$this->session->set_userdata('username', $user);
            
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    
    function change_pass($pass)
    {
        $this->load->library('session');
        $session = $this->session->all_userdata();
        
                
        $data = array(
                'password' => $pass
                );
        $this->db->where('username', $session['username']);
        $this->db->update('ms_user', $data); 
    }
    
}
?>