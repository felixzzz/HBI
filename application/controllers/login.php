<?php
    class Login extends CI_Controller{

        function index(){
                $this->load->helper('form');
                $data['title'] = "Hello Baby Indonesia";
                //$data['content'] = $this->load->view('Home/index',$data,TRUE);
                $this->load->view("Admin_page/login");		
        }

        function do_login(){
            $this->load->model('user_model','',TRUE);        
            $data_user = $this->input->post();        
            $result = $this->user_model->validate_user($data_user['username'],$data_user['password']);        
            if($result)
            {            
                redirect('admin/adminIndex','refresh');
            }
            else {
                redirect('admin','refresh');
            }
        }
        function forget_password(){
            
            ini_set("SMTP","localhost");
            ini_set("sendmail_from","test@mydomain.com");
            $to = "felix@salim.bz";
            $subject = "Test mail";
            $message = "Hello! This is a simple email message.";
            $from = "someonelse@example.com";
            $headers = "From:" . $from;
            mail($to,$subject,$message,$headers);
            echo "Mail Sent.";
            
            
            $config['mailtype'] = 'html';
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['smtp_host']           = "localhost";
            
            $config['protocol']='smtp';
            $config['smtp_host']='ssl://smtp.googlemail.com';
            $config['smtp_port']='465';
            $config['smtp_timeout']='30';
            $config['smtp_user']='felixzz.salim@gmail.com';
            $config['smtp_pass']='mywisdom';
            
            $config['charset']='utf-8';
            $config['newline']='\r\n';  
            
            
            $this->load->library('email',$config);
            
            $this->email->from('felixzz.salim@gmail.com', 'Hello Baby Indonesia');
            $this->email->to('felix@salim.bz');
            $this->email->set_newline("\r\n");  
            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');

            $this->email->send();

            echo $this->email->print_debugger();
        }
    }
?>