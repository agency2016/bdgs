<?php


class User extends Drives_Controller
{
    public function profile($product_id = '')
    {
        $this->_render('user/user_profile');
    }

    public function register()
    {
        if (!$this->input->server('REQUEST_METHOD') === 'POST') {
		
            $this->response(array('error' => 'Missing post data: fname'), 400);
	}
	else{
            $_POST= json_decode(file_get_contents('php://input'), TRUE);
            $data = $_POST;
            
            $rdata['error'] = '';
            $rdata['success'] = '';
            $rdata['user'] = array();
            
            $this->form_validation->set_rules('first_name', 'First Name', 'required|trim|max_length[90]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('re_password', 'Password Confirmation', 'required|matches[password]');


            if ($this->form_validation->run() == FALSE) {
                $rdata['error'] = validation_errors();
            } else {
                $insert_data = array(
                    'fname' => $data['first_name'] .' '.$data['last_name'],
                    'email' => $data['email'],
                    'password' => md5($data['password']),
                    'signup_date' => date('Y-m-d'),
                    'is_active' => 1,
                );

                $insert_id = $this->Drives_model->insert('user', $insert_data);
                if ($insert_id) {
                    $rdata['error'] = '';
                    $getdata = array(
                                        'email' => $data['email'],
                                        'user_id' => $insert_id
                                    );
                    $rdata['success'] = 'Successfully logged in';

                    $user_information = $this->Drives_model->get_by('user', $getdata);
                    $rdata['user'] = $user_information->row();
                    $this->setLoginSession($user_information);
                    
                } else {
                    $rdata['error'] = "Something went wrong !!";
                }
            }

            echo json_encode($rdata);
        } 
    }

    public function login()
    {
        if (!$this->input->server('REQUEST_METHOD') === 'POST') {
		
            $this->response(array('error' => 'Missing post data: fname'), 400);
	}
	else{
            $_POST= json_decode(file_get_contents('php://input'), TRUE);
            $data = $_POST;
            
            $rdata['error'] = '';
            $rdata['success'] = '';
            $rdata['user'] = array();
            
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
           

            if ($this->form_validation->run() == FALSE) {
                $rdata['error'] = validation_errors();
                
            } else {
                $get_data = array(
                    'email' => $data['email'],
                    'password' => md5($data['password'])
                );
                $user_information = $this->Drives_model->get_by('user', $get_data);
                if ($user_information) {
                    $rdata['error'] = '';
                    $rdata['user'] = $user_information->row();
                    $this->setLoginSession($user_information);
                    $rdata['success'] = 'Successfully Logged in';
                } else {
                    $rdata['error'] = "Email or Password not match";
                }
            }
            echo json_encode($rdata);
        }
    }

    /**
     * password reset request using email
     */
    public function password_reset_request()
    {

        if (!$this->input->server('REQUEST_METHOD') === 'POST') {
		
            $this->response(array('error' => 'Missing post data: fname'), 400);
	}
	else{

            $this->load->library('encrypt');

            $_POST= json_decode(file_get_contents('php://input'), TRUE);
            $data = $_POST;
            
            $rdata['error'] = '';
            $rdata['success'] = '';

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            if ($this->form_validation->run() == FALSE) {
                $rdata['error'] = validation_errors();
            } else {
                $find_data = array(
                    'email' => $data['email']
                );
                $user_email_exist = $this->Drives_model->get_by('user', $find_data);
                if ($user_email_exist) {

                    $email = $data['email'];
                    
                    $key = 'DRIVESAGENCYDELTA';

                    $encrypted_string = $this->encrypt->encode($email, $key);
                    $encrypted_string = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);

                    $message = 'Hello! ' . $user_email_exist->row()->fname .
                                '<br/> Reset Your Password From This : '
                                . ' <a href="' . base_url('user/changePassword') .
                                '/' . $encrypted_string . '">Link</a>';
                    
                    $from = 'adbdtest1@gmail.com';
                    $subject = "Drives reset password";

                    //send email
                    $this->config->load('development/custom');
                    $config = $this->config->item('local_email');
                    
                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from($from); // change it to yours
                    $this->email->to($email); // change it to yours
                    $this->email->subject($subject);
                    $this->email->message($message);

                    if ($this->email->send()) {
                        $rdata['success'] = "Mail Send Successfully To " . $email;
                        $rdata['error'] = '';
                    } else {
                        $rdata['error'] = "Something Went Wrong";
                    }
                } else {
                    $rdata['error'] = "Email address not found";
                }
            }
            echo json_encode($rdata);
        } 
    }
    /**
     * password reset request using email
     */
    public function changePassword($email='')
    {
        $data = array();
        
        $data['user_mail'] = $email;

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            
        }
        else {
            
            $this->_render('user/change_password',$data);
        }
    }
    public function updatePassword() {
        $rdata =  array('success'=>'','error'=>'','user'=>array());
        if (!$this->input->server('REQUEST_METHOD') === 'POST') {
		
                $this->response(array('error' => 'Missing post data: fname'), 400);
        }
        else{
            $data = json_decode(file_get_contents('php://input'), TRUE);
            var_dump($data);exit;
            $this->load->library('encrypt');

                //$get_email = $this->input->post('user_mail');
                $get_email = str_replace(array('-', '_', '~'), array('+', '/', '='), $get_email);
                $key = 'DRUGBDAGENCYDELTA';
                $user_mail = $this->encrypt->decode($get_email, $key);

                $data = array(
                    'password' => md5($this->input->post('password'))
                );
                $options = array(
                    'email' => $user_mail
                );
                
                if ($this->drugbd_model->update('user', $data, $options)) {
                    $this->session->set_flashdata('success','Password changed successfully');
                    redirect(base_url('home'));
                } else {
                    $this->session->set_flashdata('error','Password does not match');
                    redirect(base_url('member/password_change/'.$get_email));
                }
        }
    
    }
    public function fblogin() {
        $rdata =  array('success'=>'','error'=>'','user'=>array());
        if (!$this->input->server('REQUEST_METHOD') === 'POST') {
		
                $this->response(array('error' => 'Missing post data: fname'), 400);
        }
        else{
                $data = json_decode(file_get_contents('php://input'), TRUE);
                if(is_array($data) && array_key_exists('response', $data)){
                    $response = $data['response'];
                    if(is_array($response)){
                        $data = array(
                            'email' => $response['email'],
                            'password' => md5($response['id'])
                        );
                        $user_information = $this->Drives_model->get_by('user', $data);
                        if ($user_information) {
                            $this->setLoginSession($user_information);
                            $rdata['success'] = 'Successfully logged in';
                            $rdata['user'] = $user_information->row();
                        }
                        else{
                            //if user with this mail already exists
                            $check_user = $this->Drives_model->get_by('user', array('email' => $response['email']));
                            if($check_user){
                                $rdata['error'] = 'Email alreary exists';
                            }
                            else{
                                $fbid = $response['id'];
                                $data = array(
                                    'fname' => $response['name'],
                                    'email' => $response['email'],
                                    'password' => md5($response['id']),
                                    'signup_date' => date('Y-m-d'),
                                    'is_active' => 1,
                                    'pic'=> 'http://graph.facebook.com/'.$fbid.'/picture'
                                );

                                $insert_id = $this->Drives_model->insert('user', $data);
                                if ($insert_id) {
                                    $data = array(
                                        'email' => $response['email'],
                                        'password' => md5($response['id'])
                                    );
                                    $rdata['success'] = 'Successfully logged in';
                                    
                                    $user_information = $this->Drives_model->get_by('user', $data);
                                    $rdata['user'] = $user_information->row();
                                    $this->setLoginSession($user_information);
                                }
                             }// if user not exist
                        }
                    }//if response is a array
                }//if data 
                echo  json_encode($rdata);
        }//if post data true
    }//end of func
    public function setLoginSession($user_information) {
        
                    $user_information = $user_information->row();
                    $sessiondata = array(
                        'drives_user_name' => $user_information->fname,
                        'drives_logged_in' => TRUE,
                        'drives_user_email' => $user_information->email,
                        'drives_user_id' => $user_information->user_id,
                        'drives_user_photo' => $user_information->pic
                    );
                    $this->session->set_userdata('drives_login_user', $sessiondata);
    }
    public function getLoginSession() {
        if($this->session->userdata('drives_login_user')){
            echo json_encode($this->session->userdata('drives_login_user'));
        }
        else{
            echo '';
        }
    }
    // This function call from AJAX
    public function logout() {

        $this->session->unset_userdata('drives_login_user');
        session_destroy();
        
    }
}

