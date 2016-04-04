<?php

class Home extends Bdgs_Controller{
    
    public function index(){
        $data=array();
        $css_js=array('bdgs_js'=>array('jssor.slider.mini','slider'));
        $this->_render('home/home_v',$data,$css_js);
    }
    
    public function offer_ride(){
        $data=array();
        $css_js=array();
        $this->_render('ride/offer_ride_v',$data,$css_js);
    }

    public function contact(){
        
        $this->_render('home/contact');
    }
     public function about() {
        $this->_render('home/about');
    }

    public function privacy() {
        $this->_render('home/privacy');
    }

    public function terms() {
        $this->_render('home/terms');
    }

   

    public function email_admin() {
        
        if (!$this->input->server('REQUEST_METHOD') === 'POST') {
		
            $this->response(array('error' => 'Missing post data: fname'), 400);
	}
	else{
            $_POST= json_decode(file_get_contents('php://input'), TRUE);
            $data = $_POST;
	}
        $data['error'] = '';
        $data['success'] = '';
        $this->config->load('development/custom');
        $config = $this->config->item('local_email');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('msg_body', 'Message Body', 'trim|required');
        $validation = $this->form_validation->run();
        
        if (!$validation) {
            $data['error'] = validation_errors();
        }
        else{
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($data['emailAddress']); // change it to yours
            $this->email->to('adbd.test1@gmail.com'); // change it to yours
            $this->email->subject($data['subject']);
            $this->email->message($data['msg_body']);

            if ($this->email->send()) {
                $data['success'] = 'Email has been sent !!';

            } else {
                $data['error'] = 'Something went wrong';

            }
        }
       
        echo json_encode($data);
    }// end of function
}// end of class

