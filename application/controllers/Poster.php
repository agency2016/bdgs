<?php

//controller for Poster login  logout listing search Poster edit , add , delete all Poster functions
class Poster extends Bdgs_Controller {

     private  $js_css_array = array('bdgs_css'=>array('jquery.dataTables.min'),'bdgs_js'=>array('jquery.dataTables.min'));
     public function __construct() {
       
        parent::__construct($this->js_css_array);
        $this->load->library('user_agent');
        $this->load->library('encrypt');
       
       
       
    }
    public function add_poster() {
            
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
                //var_dump($_FILES);exit;
               
                $this->form_validation->set_rules('title',  'Headline', 'trim|required');
                $this->form_validation->set_rules('date', 'Date', 'trim|required');
               
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    
                    redirect(base_url('poster/add_poster'));
                    
                } else {
                    
                    $data = array(
                        'title'=>$this->input->post('title'),
                        
                        'p_date'=>$this->input->post('date'),
                    
                    );
                    $poster_id = $this->Bdgs_model->insert('poster',$data);
                    
                   //upload photo
                    $uploaded_data = false;
                   // 
                     
                    if ($_FILES['posterimage']['name'] != NULL && $_FILES['posterimage']['name'] != '') {
                        
                        $new_name = $_FILES['posterimage']['name'];
                        
                        $config['upload_path'] = './upload/poster/';
                       
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['file_name'] = $new_name;
                         //var_dump($config);exit;
                        $this->load->library('upload', $config);
                        
                        if (!$this->upload->do_upload("posterimage")) {
                            $photo_error = $this->upload->display_errors();
                            $data['error'] = $photo_error;
                            $errors = $this->getErrors($photo_error);
                            $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            //var_dump($errors);exit;
                            redirect(base_url('Poster/add_poster'));
                            
                        } else {
                            $uploaded_data = $this->upload->data();
                            
                             $config['image_library'] = 'gd2';
                            $config['source_image'] = $uploaded_data['full_path'];
                            
                            $config_i['new_image'] = './upload/poster/';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            $this->Bdgs_model->update('poster',array('image'=>  base_url('upload/poster/').'/'.$uploaded_data['file_name']),array('id'=>$poster_id));
                        }
                    }
                   
                    redirect(base_url('Poster/poster_list'));
                    
                    
                }
                
            }else{
                
                $this->_render_admin('poster/add_poster', $data);
            }

        }
    
    public function poster_list() {
        
        $Poster_list = $this->Bdgs_model->get_all('poster'); 
        $data['poster_list'] = array();
        
        if ($Poster_list) {
            $data['poster_list'] = $Poster_list->result();
        }
        $this->_render_admin('poster/poster', $data);
    }

    /**
     * 
     * @param type $Poster_id
     * view single Poster info 
     */
    public function view_poster($Poster_id) {

        
        if ($Poster_data = $this->Bdgs_model->get_by('poster',array('id'=>$Poster_id))) {

            $data['poster_data'] = $Poster_data->row();

           
        } else {
            $this->session->set_flashdata('error', get_string('not_found'));
            redirect(base_url('Poster/poster_list'));
        }// end of if Poster not found
        
        $this->_render_admin('Poster/view_poster', $data);
    }
    
    /**
     * 
     * @param type $Poster_id
     * edit a single Poster
     */
    public function edit_Poster($Poster_id) {
        
        
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
                
                $this->form_validation->set_rules('title',  'Headline', 'trim|required');
                $this->form_validation->set_rules('date', 'Date', 'trim|required');
               
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    var_dump($errors);exit;
                    redirect(base_url('Poster/edit_poster/').'/'.$Poster_id);
                    
                } else {
                    
                    $data = array(
                        'title'=>$this->input->post('title'),
                        
                        'p_date'=>$this->input->post('date'),
                    
                    );
                     $this->Bdgs_model->update('poster',$data,array('id'=>$Poster_id));
                    
                   //upload photo
                    $uploaded_data = false;
                   // 
                     
                    if ($_FILES['posterimage']['name'] != NULL && $_FILES['posterimage']['name'] != '') {
                        
                        $new_name = $_FILES['posterimage']['name'];
                        
                        $config['upload_path'] = './upload/poster/';
                       
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['file_name'] = $new_name;
                        
                        $this->load->library('upload', $config);
                        
                        if (!$this->upload->do_upload("posterimage")) {
                            $photo_error = $this->upload->display_errors();
                            $data['error'] = $photo_error;
                            $errors = $this->getErrors($photo_error);
                            $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            redirect(base_url('Poster/edit_poster/').'/'.$Poster_id);
                            
                        } else {
                            $uploaded_data = $this->upload->data();
                            
                             $config['image_library'] = 'gd2';
                            $config['source_image'] = $uploaded_data['full_path'];
                            
                            $config_i['new_image'] = './upload/poster/';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            $this->Bdgs_model->update('poster',array('image'=>  base_url('upload/poster/').'/'.$uploaded_data['file_name']),array('id'=>$Poster_id));
                        }
                    }
                   
                    redirect(base_url('Poster/poster_list'));
                   
                }
            }
            else{
                 if ($Poster_data = $this->Bdgs_model->get_by('poster',array('id'=>$Poster_id))) {

                        $data['poster_data'] = $Poster_data->row();
   
                    } else {
                        $this->session->set_flashdata('error', get_string('not_found'));
                        redirect(base_url('Poster/poster_list'));
                    }// end of if Poster not found
                    $this->_render_admin('poster/edit_poster', $data);
            }
    }

    /**
     * 
     * @param type $Poster_id
     * admin /non admin change
     */
    public function change_Poster_status($Poster_id) {

        if ($Poster_data = $this->bdgs_model->get_by('Poster',array('Poster_id'=>$Poster_id))) {

            if ($Poster_update = $this->bdgs_model->update('Poster', array('is_active' => !($Poster_data->row()->is_active)), array('Poster_id'=>$Poster_id))) {

                $this->session->set_flashdata('success', get_string('edit_success'));
            } else {

                $this->session->set_flashdata('error', get_string('edit_error'));
            }
        } else {

            $this->session->set_flashdata('error', get_string('not_found'));
        }
        redirect(base_url('dashboard/Posters'));
    }

    

    function check_default($post_string) {
        return $post_string == '0' ? FALSE : TRUE;
    }
    
}
// end of class
?>
