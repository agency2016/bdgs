<?php

//controller for Next_event login  logout listing search Next_event edit , add , delete all Next_event functions
class Next_event extends Bdgs_Controller {

     private  $js_css_array = array('bdgs_css'=>array('jquery.dataTables.min'),'bdgs_js'=>array('jquery.dataTables.min'));
     public function __construct() {
       
        parent::__construct($this->js_css_array);
        $this->load->library('user_agent');
        $this->load->library('encrypt');
    
    }
    public function add_next_event() {
            
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
             
               
                $this->form_validation->set_rules('headline',  'Headline', 'trim|required');
                $this->form_validation->set_rules('event_date', 'Date', 'trim|required');
               
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(valnext_event_idation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    
                    redirect(base_url('next_event/add_next_event'));
                    
                } else {
                    
                    $data = array(
                        'headline'=>$this->input->post('headline'),
                        'location'=>$this->input->post('location'),
                        'event_date'=>$this->input->post('event_date'),
                        'elat'=>$this->input->post('elat'),
                        'elong'=>$this->input->post('elong'),
                        'fb_link'=>$this->input->post('fb_link'),
                        'content'=>$this->input->post('content'),
                    
                    );
                    $next_event_next_event_id = $this->Bdgs_model->insert('next_event',$data);
                    
                   //upload photo
                    $uploaded_data = false;
                   // 
                     
                    if ($_FILES['next_eventimage']['name'] != NULL && $_FILES['next_eventimage']['name'] != '') {
                        
                        $new_name = $_FILES['next_eventimage']['name'];
                        
                        $config['upload_path'] = './upload/next_event/';
                       
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['file_name'] = $new_name;
                        
                        $this->load->library('upload', $config);
                        
                        if (!$this->upload->do_upload("next_eventimage")) {
                            $photo_error = $this->upload->display_errors();
                            $data['error'] = $photo_error;
                            $errors = $this->getErrors($photo_error);
                            $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            //var_dump($errors);exit;
                            redirect(base_url('Next_event/add_next_event'));
                            
                        } else {
                            $uploaded_data = $this->upload->data();
                            
                             $config['image_library'] = 'gd2';
                            $config['source_image'] = $uploaded_data['full_path'];
                            
                            $config_i['new_image'] = './upload/next_event/';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            $this->Bdgs_model->update('next_event',array('image'=>  base_url('upload/next_event/').'/'.$uploaded_data['file_name']),array('next_event_id'=>$next_event_next_event_id));
                        }
                    }
                   
                    redirect(base_url('Next_event/next_event_list'));
                    
                    
                }
                
            }else{
                
                $this->_render_admin('next_event/add_next_event', $data);
            }

        }
    
    public function next_event_list() {
        
        $Next_event_list = $this->Bdgs_model->get_all('next_event'); 
        $data['next_event_list'] = array();
        
        if ($Next_event_list) {
            $data['next_event_list'] = $Next_event_list->result();
        }
        $this->_render_admin('next_event/next_event', $data);
    }

    /**
     * 
     * @param type $Next_event_next_event_id
     * view single Next_event info 
     */
    public function view_next_event($next_event_id) {

        
        if ($Next_event_data = $this->Bdgs_model->get_by('next_event',array('next_event_id'=>$next_event_id))) {

            $data['next_event_data'] = $Next_event_data->row();

           
        } else {
            $this->session->set_flashdata('error', get_string('not_found'));
            redirect(base_url('Next_event/next_event_list'));
        }// end of if Next_event not found
        
        $this->_render_admin('Next_event/view_next_event', $data);
    }
    
    /**
     * 
     * @param type $Next_event_next_event_id
     * edit a single Next_event
     */
    public function edit_Next_event($Next_event_next_event_id) {
        
        
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
                
               $this->form_validation->set_rules('headline',  'Headline', 'trim|required');
                $this->form_validation->set_rules('event_date', 'Date', 'trim|required');
               
               
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    //var_dump($errors);exit;
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                 
                    redirect(base_url('Next_event/edit_next_event/').'/'.$Next_event_next_event_id);
                    
                } else {
                    
                    $data = array(
                        'headline'=>$this->input->post('headline'),
                        'location'=>$this->input->post('location'),
                        'event_date'=>$this->input->post('event_date'),
                        'elat'=>$this->input->post('elat'),
                        'elong'=>$this->input->post('elong'),
                        'fb_link'=>$this->input->post('fb_link'),
                        'content'=>$this->input->post('content'),
                    
                    );
                     $this->Bdgs_model->update('next_event',$data,array('next_event_id'=>$Next_event_next_event_id));
                    
                   //upload photo
                    $uploaded_data = false;
                   // 
                     
                    if ($_FILES['next_eventimage']['name'] != NULL && $_FILES['next_eventimage']['name'] != '') {
                        
                        $new_name = $_FILES['next_eventimage']['name'];
                        
                        $config['upload_path'] = './upload/next_event/';
                       
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['file_name'] = $new_name;
                        
                        $this->load->library('upload', $config);
                        
                        if (!$this->upload->do_upload("next_eventimage")) {
                            $photo_error = $this->upload->display_errors();
                            $data['error'] = $photo_error;
                            $errors = $this->getErrors($photo_error);
                            $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            redirect(base_url('Next_event/edit_next_event/').'/'.$Next_event_next_event_id);
                            
                        } else {
                            $uploaded_data = $this->upload->data();
                            
                             $config['image_library'] = 'gd2';
                            $config['source_image'] = $uploaded_data['full_path'];
                            
                            $config_i['new_image'] = './upload/next_event/';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            $this->Bdgs_model->update('next_event',array('image'=>  base_url('upload/next_event/').'/'.$uploaded_data['file_name']),array('next_event_id'=>$Next_event_next_event_id));
                        }
                    }
                   
                    redirect(base_url('Next_event/next_event_list'));
                   
                }
            }
            else{
                 if ($Next_event_data = $this->Bdgs_model->get_by('next_event',array('next_event_id'=>$Next_event_next_event_id))) {

                        $data['next_event_data'] = $Next_event_data->row();
   
                    } else {
                        $this->session->set_flashdata('error', get_string('not_found'));
                        redirect(base_url('Next_event/next_event_list'));
                    }// end of if Next_event not found
                    $this->_render_admin('next_event/edit_next_event', $data);
            }
    }

    /**
     * 
     * @param type $Next_event_next_event_id
     * admin /non admin change
     */
    public function change_Next_event_status($Next_event_next_event_id) {

        if ($Next_event_data = $this->bdgs_model->get_by('Next_event',array('Next_event_next_event_id'=>$Next_event_next_event_id))) {

            if ($Next_event_update = $this->bdgs_model->update('Next_event', array('is_active' => !($Next_event_data->row()->is_active)), array('Next_event_next_event_id'=>$Next_event_next_event_id))) {

                $this->session->set_flashdata('success', get_string('edit_success'));
            } else {

                $this->session->set_flashdata('error', get_string('edit_error'));
            }
        } else {

            $this->session->set_flashdata('error', get_string('not_found'));
        }
        redirect(base_url('dashboard/Next_events'));
    }

    

    function check_default($post_string) {
        return $post_string == '0' ? FALSE : TRUE;
    }
    
}
// end of class
?>
