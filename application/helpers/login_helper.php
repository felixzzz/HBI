<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function is_logged_in() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
    $user = $CI->session->userdata('username');
    if ($user==NULL)
    { 
        redirect('login','refresh');        
    }
    else 
    { 
    return true;            
    }
}

?>