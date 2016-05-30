<?php

//controller for Event login  logout listing search Event edit , add , delete all Event functions
class Event extends Bdgs_Controller {

     private  $js_css_array = array('bdgs_css'=>array('jquery.dataTables.min'),'bdgs_js'=>array('jquery.dataTables.min'));
     public function __construct() {
       
        parent::__construct($this->js_css_array);
        $this->load->library('user_agent');
        $this->load->library('encrypt');
    
    }
    public function add_event() {
            
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
             
                $this->form_validation->set_rules('headline',  'Headline', 'trim|required');
                $this->form_validation->set_rules('event_date', 'Date', 'trim|required');
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(valevent_idation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    
                    redirect(base_url('event/add_event'));
                    
                } else {
                    
                    $data = array(
                        'headline'=>$this->input->post('headline'),
                        'location'=>$this->input->post('location'),
                        'event_date'=>$this->input->post('event_date'),
                        'elat'=>$this->input->post('elat'),
                        'elong'=>$this->input->post('elong'),
                        'sub_headline'=>$this->input->post('sub_headline'),
                        'event_detail_front'=>$this->input->post('event_detail_front'),
                        'event_detail_rest'=>$this->input->post('event_detail_rest'),
                    
                    );
                    $event_event_id = $this->Bdgs_model->insert('event',$data);
                    
                   //upload photo
                    $uploaded_data = false;
                   $i = 1;
                   foreach ($this->input->post('titles') as $key => $value) {
                        if((int)$this->input->post('cover') == $i){
                            $cover_image = 1;
                        }
                        else{
                            $cover_image = 0;
                        }
                        if ($_FILES['images']['name'][$key]!= NULL && $_FILES['images']['name'][$key] != '') {

                         $new_name = $_FILES['images']['name'][$key];
                         
                         $config['upload_path'] = './upload/event/';

                         $config['allowed_types'] = 'gif|jpg|png';
                         $config['file_name'] = $new_name;

                         $this->load->library('upload', $config);
                            $_FILES['photo']['name'] = $_FILES['images']['name'][$key];
                            $_FILES['photo']['type'] = $_FILES['images']['type'][$key];
                            $_FILES['photo']['tmp_name'] = $_FILES['images']['tmp_name'][$key];
                            $_FILES['photo']['error'] = $_FILES['images']['error'][$key];
                            $_FILES['photo']['size'] = $_FILES['images']['size'][$key];

                         if (!$this->upload->do_upload('photo')) {
                             $photo_error = $this->upload->display_errors();
                             $data['error'] = $photo_error;
                             $errors = $this->getErrors($photo_error);
                             $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            
                             redirect(base_url('Event/add_event'));

                         } else {
                             $uploaded_data = $this->upload->data();

                             $config['image_library'] = 'gd2';
                             $config['source_image'] = $uploaded_data['full_path'];

                             $config_i['new_image'] = './upload/event/';
                             $this->load->library('image_lib', $config);
                             $this->image_lib->resize();
                             $this->Bdgs_model->insert('event_image',array('event_image'=>  base_url('upload/event/').'/'.$uploaded_data['file_name'],'event_id'=>$event_event_id,'title'=>$value,'cover_image'=>$cover_image));
                         }
                     }
                     $i++;
                   }//foreach
                   $videos = $this->input->post('links');
                   foreach ($this->input->post('v_titles') as $key => $value) {
                       $this->Bdgs_model->insert('event_video',array('title'=> $value ,'event_id'=>$event_event_id,'video_link'=>$videos[$key]));
                   }
                   //exit;
                    redirect(base_url('Event/event_list'));
                  
                }
                
            }else{
                
                $this->_render_admin('event/add_event', $data);
            }

        }
    
    public function event_list() {
        
        $Event_list = $this->Bdgs_model->get_all('event'); 
        $data['event_list'] = array();
        
        if ($Event_list) {
            $data['event_list'] = $Event_list->result();
        }
        $this->_render_admin('event/event', $data);
    }

    /**
     * 
     * @param type $Event_event_id
     * view single Event info 
     */
    public function view_event($event_id) {

        
        if ($Event_data = $this->Bdgs_model->get_by('event',array('event_id'=>$event_id))) {

            $data['event_data'] = $Event_data->row();
            $data['event_image_data'] = $this->Bdgs_model->get_by('event_image',array('event_id'=>$event_id));
            $data['event_video_data'] = $this->Bdgs_model->get_by('event_video',array('event_id'=>$event_id));
           
        } else {
            $this->session->set_flashdata('error', get_string('not_found'));
            redirect(base_url('Event/event_list'));
        }// end of if Event not found
        
        $this->_render_admin('Event/view_event', $data);
    }
    
    /**
     * 
     * @param type $Event_event_id
     * edit a single Event
     */
    public function edit_Event($Event_event_id) {
        
        
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
                
               $this->form_validation->set_rules('headline',  'Headline', 'trim|required');
                $this->form_validation->set_rules('event_date', 'Date', 'trim|required');
               
               
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    //var_dump($errors);exit;
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                 
                    redirect(base_url('Event/edit_event/').'/'.$Event_event_id);
                    
                } else {
                    
                    $data = array(
                        'headline'=>$this->input->post('headline'),
                        'location'=>$this->input->post('location'),
                        'event_date'=>$this->input->post('event_date'),
                        'elat'=>$this->input->post('elat'),
                        'elong'=>$this->input->post('elong'),
                        'fb_link'=>$this->input->post('fb_link'),
                    
                    );
                     $this->Bdgs_model->update('event',$data,array('event_id'=>$Event_event_id));
                    
                   //upload photo
                    $uploaded_data = false;
                   // 
                     
                    if ($_FILES['eventimage']['name'] != NULL && $_FILES['eventimage']['name'] != '') {
                        
                        $new_name = $_FILES['eventimage']['name'];
                        $config['upload_path'] = './upload/event/';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['file_name'] = $new_name;
                        
                        $this->load->library('upload', $config);
                        
                        if (!$this->upload->do_upload("eventimage")) {
                            $photo_error = $this->upload->display_errors();
                            $data['error'] = $photo_error;
                            $errors = $this->getErrors($photo_error);
                            $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            redirect(base_url('Event/edit_event/').'/'.$Event_event_id);
                            
                        } else {
                            $uploaded_data = $this->upload->data();
                            
                             $config['image_library'] = 'gd2';
                            $config['source_image'] = $uploaded_data['full_path'];
                            
                            $config_i['new_image'] = './upload/event/';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            $this->Bdgs_model->update('event',array('image'=>  base_url('upload/event/').'/'.$uploaded_data['file_name']),array('event_id'=>$Event_event_id));
                        }
                    }
                   
                    redirect(base_url('Event/event_list'));
                   
                }
            }
            else{
                 if ($Event_data = $this->Bdgs_model->get_by('event',array('event_id'=>$Event_event_id))) {

                        $data['event_data'] = $Event_data->row();
                        $data['event_image_data'] = $this->Bdgs_model->get_by('event_image',array('event_id'=>$Event_event_id));
                        $data['event_video_data'] = $this->Bdgs_model->get_by('event_video',array('event_id'=>$Event_event_id));
   
                    } else {
                        $this->session->set_flashdata('error', get_string('not_found'));
                        redirect(base_url('Event/event_list'));
                    }// end of if Event not found
                    $this->_render_admin('event/edit_event', $data);
            }
    }

    /**
     * 
     * @param type $Event_event_id
     * admin /non admin change
     */
    public function change_Event_status($Event_event_id) {

        if ($Event_data = $this->bdgs_model->get_by('Event',array('Event_event_id'=>$Event_event_id))) {

            if ($Event_update = $this->bdgs_model->update('Event', array('is_active' => !($Event_data->row()->is_active)), array('Event_event_id'=>$Event_event_id))) {

                $this->session->set_flashdata('success', get_string('edit_success'));
            } else {

                $this->session->set_flashdata('error', get_string('edit_error'));
            }
        } else {

            $this->session->set_flashdata('error', get_string('not_found'));
        }
        redirect(base_url('dashboard/Events'));
    }

    

    function check_default($post_string) {
        return $post_string == '0' ? FALSE : TRUE;
    }
    //frontend 
    public function All(){
        $Event_list = $this->Bdgs_model->get_all_events_front(); 
        $data['event_list'] = array();
        
        if ($Event_list) {
            $data['event_list'] = $Event_list->result();
        }
        $Event_list = $this->Bdgs_model->get_all_focus_events_front(); 
        $data['focus_event_list'] = array();
        
        if ($Event_list) {
            $data['focus_event_list'] = $Event_list->result();
        }
        $this->_render('events/list', $data);
        
    }
    public function Next(){
        $Event_list = $this->Bdgs_model->get_next_event_front(); 
        $data['event_list'] = array();
        
        if ($Event_list) {
            $data['event_list'] = $Event_list->result();
        }
        $this->_render('events/next_list', $data);
    }
    /**
     * 
     * @param type $Event_event_id
     * view single Event info 
     */
    public function detail($event_id) {

        
        if ($Event_data = $this->Bdgs_model->get_by('event',array('event_id'=>$event_id))) {

            $data['event_data'] = $Event_data->row();
            $data['event_image_data'] = $this->Bdgs_model->get_by('event_image',array('event_id'=>$event_id));
            $data['event_video_data'] = $this->Bdgs_model->get_by('event_video',array('event_id'=>$event_id));
           
        } else {
            $this->session->set_flashdata('error', get_string('not_found'));
            redirect(base_url('Event/event_list'));
        }// end of if Event not found
        
        $this->_render('events/single', $data);
    }
}
// end of class
?>
