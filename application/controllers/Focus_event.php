<?php

//controller for Focus_event login  logout listing search Focus_event edit , add , delete all Focus_event functions
class Focus_event extends Bdgs_Controller {

     private  $js_css_array = array('bdgs_css'=>array('jquery.dataTables.min'),'bdgs_js'=>array('jquery.dataTables.min'));
     public function __construct() {
       
        parent::__construct($this->js_css_array);
        $this->load->library('user_agent');
        $this->load->library('encrypt');
    
    }
    public function add_focus_event() {
            
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
             
               
                $this->form_validation->set_rules('headline',  'Headline', 'trim|required');
                $this->form_validation->set_rules('event_date', 'Date', 'trim|required');
               
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(valfocus_event_idation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    
                    redirect(base_url('focus_event/add_focus_event'));
                    
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
                    $focus_event_focus_event_id = $this->Bdgs_model->insert('focus_event',$data);
                    
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
                         
                         $config['upload_path'] = './upload/focus_event/';

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
                            
                             redirect(base_url('Focus_event/add_focus_event'));

                         } else {
                             $uploaded_data = $this->upload->data();

                             $config['image_library'] = 'gd2';
                             $config['source_image'] = $uploaded_data['full_path'];

                             $config_i['new_image'] = './upload/focus_event/';
                             $this->load->library('image_lib', $config);
                             $this->image_lib->resize();
                             $this->Bdgs_model->insert('focus_event_image',array('event_image'=>  base_url('upload/focus_event/').'/'.$uploaded_data['file_name'],'focus_event_id'=>$focus_event_focus_event_id,'cover_image'=>$cover_image));
                         }
                     }
                     $i++;
                   }//foreach
                    
                   //exit;
                    redirect(base_url('Focus_event/focus_event_list'));
                    
                    
                }
                
            }else{
                
                $this->_render_admin('focus_event/add_focus_event', $data);
            }

        }
    
    public function focus_event_list() {
        
        $Focus_event_list = $this->Bdgs_model->get_all('focus_event'); 
        $data['focus_event_list'] = array();
        
        if ($Focus_event_list) {
            $data['focus_event_list'] = $Focus_event_list->result();
        }
        $this->_render_admin('focus_event/focus_event', $data);
    }

    /**
     * 
     * @param type $Focus_event_focus_event_id
     * view single Focus_event info 
     */
    public function view_focus_event($focus_event_id) {

        
        if ($Focus_event_data = $this->Bdgs_model->get_by('focus_event',array('focus_event_id'=>$focus_event_id))) {

            $data['focus_event_data'] = $Focus_event_data->row();
            $data['focus_event_image_data'] = $this->Bdgs_model->get_by('focus_event_image',array('focus_event_id'=>$focus_event_id));
           
        } else {
            $this->session->set_flashdata('error', get_string('not_found'));
            redirect(base_url('Focus_event/focus_event_list'));
        }// end of if Focus_event not found
        
        $this->_render_admin('Focus_event/view_focus_event', $data);
    }
    
    /**
     * 
     * @param type $Focus_event_focus_event_id
     * edit a single Focus_event
     */
    public function edit_Focus_event($Focus_event_focus_event_id) {
        
        
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
                
               $this->form_validation->set_rules('headline',  'Headline', 'trim|required');
                $this->form_validation->set_rules('event_date', 'Date', 'trim|required');
               
               
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    //var_dump($errors);exit;
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                 
                    redirect(base_url('Focus_event/edit_focus_event/').'/'.$Focus_event_focus_event_id);
                    
                } else {
                    
                    $data = array(
                        'headline'=>$this->input->post('headline'),
                        'location'=>$this->input->post('location'),
                        'event_date'=>$this->input->post('event_date'),
                        'elat'=>$this->input->post('elat'),
                        'elong'=>$this->input->post('elong'),
                        'fb_link'=>$this->input->post('fb_link'),
                    
                    );
                     $this->Bdgs_model->update('focus_event',$data,array('focus_event_id'=>$Focus_event_focus_event_id));
                    
                   //upload photo
                    $uploaded_data = false;
                   // 
                     
                    if ($_FILES['focus_eventimage']['name'] != NULL && $_FILES['focus_eventimage']['name'] != '') {
                        
                        $new_name = $_FILES['focus_eventimage']['name'];
                        
                        $config['upload_path'] = './upload/focus_event/';
                       
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['file_name'] = $new_name;
                        
                        $this->load->library('upload', $config);
                        
                        if (!$this->upload->do_upload("focus_eventimage")) {
                            $photo_error = $this->upload->display_errors();
                            $data['error'] = $photo_error;
                            $errors = $this->getErrors($photo_error);
                            $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            redirect(base_url('Focus_event/edit_focus_event/').'/'.$Focus_event_focus_event_id);
                            
                        } else {
                            $uploaded_data = $this->upload->data();
                            
                             $config['image_library'] = 'gd2';
                            $config['source_image'] = $uploaded_data['full_path'];
                            
                            $config_i['new_image'] = './upload/focus_event/';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            $this->Bdgs_model->update('focus_event',array('image'=>  base_url('upload/focus_event/').'/'.$uploaded_data['file_name']),array('focus_event_id'=>$Focus_event_focus_event_id));
                        }
                    }
                   
                    redirect(base_url('Focus_event/focus_event_list'));
                   
                }
            }
            else{
                 if ($Focus_event_data = $this->Bdgs_model->get_by('focus_event',array('focus_event_id'=>$Focus_event_focus_event_id))) {

                        $data['focus_event_data'] = $Focus_event_data->row();
                        $data['focus_event_image_data'] = $this->Bdgs_model->get_by('focus_event_image',array('focus_event_id'=>$Focus_event_focus_event_id));
   
                    } else {
                        $this->session->set_flashdata('error', get_string('not_found'));
                        redirect(base_url('Focus_event/focus_event_list'));
                    }// end of if Focus_event not found
                    $this->_render_admin('focus_event/edit_focus_event', $data);
            }
    }

    /**
     * 
     * @param type $Focus_event_focus_event_id
     * admin /non admin change
     */
    public function change_Focus_event_status($Focus_event_focus_event_id) {

        if ($Focus_event_data = $this->bdgs_model->get_by('Focus_event',array('Focus_event_focus_event_id'=>$Focus_event_focus_event_id))) {

            if ($Focus_event_update = $this->bdgs_model->update('Focus_event', array('is_active' => !($Focus_event_data->row()->is_active)), array('Focus_event_focus_event_id'=>$Focus_event_focus_event_id))) {

                $this->session->set_flashdata('success', get_string('edit_success'));
            } else {

                $this->session->set_flashdata('error', get_string('edit_error'));
            }
        } else {

            $this->session->set_flashdata('error', get_string('not_found'));
        }
        redirect(base_url('dashboard/Focus_events'));
    }

    

    function check_default($post_string) {
        return $post_string == '0' ? FALSE : TRUE;
    }
    public function detail($focus_event_id ,$title) {


        if ($Focus_event_data = $this->Bdgs_model->get_by('focus_event',array('focus_event_id'=>$focus_event_id))) {

            $data['focus_event_data'] = $Focus_event_data->row();
            $data['focus_event_image_data'] = $this->Bdgs_model->get_by('focus_event_image',array('focus_event_id'=>$focus_event_id));

        } else {
            $this->session->set_flashdata('error', get_string('not_found'));
            redirect(base_url('home'));
        }// end of if Focus_event not found

        $this->_render('events/single_focus', $data);
    }
    
}
// end of class
?>
