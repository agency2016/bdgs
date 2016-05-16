<?php

//controller for analysis login  logout listing search analysis edit , add , delete all analysis functions
class Analysis extends Bdgs_Controller {

     private  $js_css_array = array('bdgs_css'=>array('jquery.dataTables.min'),'bdgs_js'=>array('jquery.dataTables.min'));
     public function __construct() {
       
        parent::__construct($this->js_css_array);
        $this->load->library('user_agent');
        $this->load->library('encrypt');
        $this->load->library('upload');
       
       
    }
    public function add_analysis() {
            
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
                
                $this->form_validation->set_rules('address', get_string('address'), 'trim|xss_clean');
                $this->form_validation->set_rules('full_name_bn',  get_string('name'), 'trim|xss_clean|required');
                $this->form_validation->set_rules('phone', get_string('phone'), 'trim|xss_clean|numeric|required');
                $this->form_validation->set_rules('email', get_string('emailaddress'), 'trim|xss_clean|required|is_unique[analysis.email]');
               
                $this->form_validation->set_message('check_default', get_string('jquery_select_box_error'));

                if ($this->form_validation->run() == false) {
                    $errors = $this->getErrors(validation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    
                    redirect(base_url('dashboard/analysis/new'));
                    
                } else {
                    
                    $data = array(
                        'full_name_bn'=>$this->input->post('full_name_bn'),
                        'email'=>$this->input->post('email'),
                        'mobile_number'=>$this->input->post('phone'),
                        'password'=>  randomPassword(),
                        'signup_date'=>date("Y-m-d"),
                        'is_active'=>1,
                        'role'=>$this->input->post('role')
                    
                    );
                    $analysis_id = $this->bdgs_model->insert('analysis',$data);
                    if($analysis_id){
                        $data = array(
                        'analysis_id'=>$analysis_id,
                        'address_bn'=>$this->input->post('address'),
                        
                        
                        );
                        $this->bdgs_model->insert('analysis_profile',$data);
                        $email = $this->input->post('email');
                        $key = 'DRUGBDAGENCYDELTA';

                        $encrypted_string = $this->encrypt->encode($email, $key);
                        $encrypted_string = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);

                        $message = 'Hello! ' . $this->input->post('full_name_bn') . 
                                    '<br/> Reset Your Password From This : '
                                    .' <a href="' . base_url('member/password_change') . 
                                    '/' . $encrypted_string . '">Link</a>';
                        $from = 'adbdtest1@gmail.com';
                        $subject = "DrugBd reset password";

                        $sendmail = bdgs_mail($email, $from, $subject, $message);
                        $data['success'] = $this->session->set_flashdata('success', get_string('add_success'));
                        redirect(base_url('dashboard/analysiss'));
                    }
                    else{
                        $data['error'] = $this->session->set_flashdata('error', get_string('add_error'));
                        redirect(base_url('dashboard/analysis/new'));
                    }
                    
                }
                
            }else{
                
                $this->_render_admin('analysis/add_analysis', $data);
            }

        }
    
    public function analysis_list() {
        
        $analysis_list = $this->Bdgs_model->get_all('analysis'); 
        $data['analysis_list'] = array();
        
        if ($analysis_list) {
            $data['analysis_list'] = $analysis_list->result();
        }
        $this->_render_admin('analysis/analysis', $data);
    }

    /**
     * 
     * @param type $analysis_id
     * view single analysis info 
     */
    public function view_analysis($analysis_id) {

        
        if ($analysis_data = $this->Bdgs_model->get_by('analysis',array('id'=>$analysis_id))) {

            $data['analysis_data'] = $analysis_data->row();

           
        } else {
            $this->session->set_flashdata('error', get_string('not_found'));
            redirect(base_url('dashboard/analysiss'));
        }// end of if analysis not found
        
        $this->_render_admin('analysis/view_analysis', $data);
    }
    
    /**
     * 
     * @param type $analysis_id
     * edit a single analysis
     */
    public function edit_analysis($analysis_id) {
        
        
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {

                $this->form_validation->set_rules('address', get_string('address'), 'trim|xss_clean');
                $this->form_validation->set_rules('full_name_bn',  get_string('name'), 'trim|xss_clean|required');
                $this->form_validation->set_rules('phone', get_string('phone'), 'trim|xss_clean|numeric|required');
                $this->form_validation->set_rules('email', get_string('emailaddress'), 'trim|xss_clean|required');
              
                $this->form_validation->set_message('check_default', get_string('jquery_select_box_error'));

                if ($this->form_validation->run() == false) {
                    $errors = $this->getErrors(validation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    
                    redirect(base_url('dashboard/analysis/edit/'.$analysis_id));
                    
                } else {
                    
                    $data = array(
                        'full_name_bn'=>$this->input->post('full_name_bn'),
                        'email'=>$this->input->post('email'),
                        'mobile_number'=>$this->input->post('phone'),
                        'password'=>  randomPassword(),
                        'signup_date'=>date("Y-m-d"),
                        'is_active'=>1,
                        'role'=>$this->input->post('role')
                    
                    );
                    $analysis_update = $this->bdgs_model->update('analysis',$data,array('analysis_id'=>$analysis_id));
                   
                    if($analysis_update){
                        
                        $profile_data = array(
                        'analysis_id'=>$analysis_id,
                        'address_bn'=>$this->input->post('address'),
                     );
            
                        if ($analysis_profile_data = $this->bdgs_model->get_by('analysis_profile',array('analysis_id'=>$analysis_id))) {
                            $this->bdgs_model->update('analysis_profile',$profile_data,array('analysis_id'=>$analysis_id));
                            
                        } else {
                            $this->bdgs_model->insert('analysis_profile',$profile_data);
                        }
                        $data['success'] = $this->session->set_flashdata('success', get_string('edit_success'));
                        redirect(base_url('dashboard/analysis/view/'.$analysis_id));
                        
                    }
                }
            }
            else{
                 if ($analysis_data = $this->Bdgs_model->get_by('analysis',array('id'=>$analysis_id))) {

                        $data['analysis_data'] = $analysis_data->row();

                       
                    } else {
                        $this->session->set_flashdata('error', get_string('not_found'));
                        redirect(base_url('dashboard/analysiss'));
                    }// end of if analysis not found
                    $this->_render_admin('analysis/edit_analysis', $data);
            }
    }

    /**
     * 
     * @param type $analysis_id
     * admin /non admin change
     */
    public function change_analysis_status($analysis_id) {

        if ($analysis_data = $this->bdgs_model->get_by('analysis',array('analysis_id'=>$analysis_id))) {

            if ($analysis_update = $this->bdgs_model->update('analysis', array('is_active' => !($analysis_data->row()->is_active)), array('analysis_id'=>$analysis_id))) {

                $this->session->set_flashdata('success', get_string('edit_success'));
            } else {

                $this->session->set_flashdata('error', get_string('edit_error'));
            }
        } else {

            $this->session->set_flashdata('error', get_string('not_found'));
        }
        redirect(base_url('dashboard/analysiss'));
    }

    

    function check_default($post_string) {
        return $post_string == '0' ? FALSE : TRUE;
    }
    
}
// end of class
?>
