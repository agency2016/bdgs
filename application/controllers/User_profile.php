<?php

class User_profile extends Drives_Controller {
    private  $js_css_array = array('drives_css'=>array(),'drives_js'=>array('display'));

    public function __construct() {
       
        parent::__construct($this->js_css_array);
       
    }
    public function my_profile() {
        $data = array();
        $css_js = array();
        $this->_render('user/user_profile', $css_js);
    }

    public function user_info() {
        $data = array();
        $css_js = array();

        if (is_array($this->session->userdata('drives_login_user')) && array_key_exists('drives_user_id', $this->session->userdata('drives_login_user'))) {
            $options = array(
                'user_id' => $this->session->userdata('drives_login_user')['drives_user_id']
            );

            $data['record'] = $this->Drives_model->get_by('user', $options);
            $record = json_encode($data['record']->row());
        } else {
            $record = false;
        }

        echo $record;
    }

    public function edit_profile() {
        $data = array();
        $css_js = array();

//        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $postdata = file_get_contents("php://input");
            $request = json_decode($postdata);
            $data['fname'] = $request->fname;
            $data['lname'] = $request->lname;
            echo json_encode($data);
//        } else {
//            $this->load->view('form_v');
//        }

    }

}
