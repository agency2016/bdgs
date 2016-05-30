<?php

class Home extends Bdgs_Controller{
    
    public function index(){
        $data=array();
        $css_js=array();
         $data ['featured_event'] = $this->Bdgs_model->get_featured_event();
        $data ['next_event'] = $this->Bdgs_model->get_latest_next_event();
        $data ['event'] = $this->Bdgs_model->get_latest_event();

       
        $this->_render('home/home_v',$data,$css_js);
    }
    
    public function offer_ride(){
        $data=array();
        $css_js=array();
        $this->_render('ride/offer_ride_v',$data,$css_js);
    }

    public function contact(){
        $data ['contact'] = $this->Bdgs_model->get_all('contact_us');
        $this->_render('home/contact',$data);
    }
     public function about() {
       //  var_dump('i am here');
        $data ['about'] = $this->Bdgs_model->get_all('about_us');
        $this->_render('home/about',$data);
    }

    public function privacy() {
        $this->_render('home/privacy');
    }

    public function terms() {
        $this->_render('home/terms');
    }

    public
            function email_admin() {

        $this->config->load('development/custom');
        $config = $this->config->item('local_email');

        $this->load->library('form_validation');


        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($this->input->post('inputmail')); // change it to yours
        $this->email->to('adbd.test1@gmail.com'); // change it to yours
        $this->email->subject($this->input->post('email_subject'));
        $this->email->message($this->input->post('email_message'));
        $inser_a = array('name'=>$this->input->post('inputname'),'email'=>$this->input->post('inputmail'),'subject'=>$this->input->post('email_subject'),'comment'=>$this->input->post('email_message'),'status'=>0);
        $data ['contact'] = $this->Bdgs_model->insert('feedback',$inser_a);
        if ($this->email->send()) {
            $data['success_message'] = 'Email sent';
            $this->session->set_flashdata('success', $data['success_message']);
            redirect(base_url('home'));
        } else {
            $data['failure_message'] = "something wrong";
            $this->session->set_flashdata('error', $data['failure_message']);
            redirect(base_url('home'));
        }
    }
}// end of class

