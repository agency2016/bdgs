<?php

//controller for Banner login  logout listing search Banner edit , add , delete all Banner functions
class Banner extends Bdgs_Controller {

     private  $js_css_array = array('bdgs_css'=>array('jquery.dataTables.min'),'bdgs_js'=>array('jquery.dataTables.min'));
     public function __construct() {
       
        parent::__construct($this->js_css_array);
        $this->load->library('user_agent');
        $this->load->library('encrypt');
       
       
       
    }
    public function add_banner() {
            
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
                //var_dump($_FILES);exit;
               
                $this->form_validation->set_rules('title',  'Headline', 'trim|required');
                $this->form_validation->set_rules('date', 'Date', 'trim|required');
               
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    
                    redirect(base_url('banner/add_banner'));
                    
                } else {
                    
                    $data = array(
                        'title'=>$this->input->post('title'),
                        
                        'b_date'=>$this->input->post('date'),
                    
                    );
                    $banner_id = $this->Bdgs_model->insert('banner',$data);
                    
                   //upload photo
                    $uploaded_data = false;
                   // 
                     
                    if ($_FILES['bannerimage']['name'] != NULL && $_FILES['bannerimage']['name'] != '') {
                        
                        $new_name = $_FILES['bannerimage']['name'];
                        
                        $config['upload_path'] = './upload/banner/';
                       
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['file_name'] = $new_name;
                         //var_dump($config);exit;
                        $this->load->library('upload', $config);
                        
                        if (!$this->upload->do_upload("bannerimage")) {
                            $photo_error = $this->upload->display_errors();
                            $data['error'] = $photo_error;
                            $errors = $this->getErrors($photo_error);
                            $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            //var_dump($errors);exit;
                            redirect(base_url('Banner/add_banner'));
                            
                        } else {
                            $uploaded_data = $this->upload->data();
                            
                             $config['image_library'] = 'gd2';
                            $config['source_image'] = $uploaded_data['full_path'];
                            
                            $config_i['new_image'] = './upload/banner/';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            $this->Bdgs_model->update('banner',array('image'=>  base_url('upload/banner/').'/'.$uploaded_data['file_name']),array('id'=>$banner_id));
                        }
                    }
                   
                    redirect(base_url('Banner/banner_list'));
                    
                    
                }
                
            }else{
                
                $this->_render_admin('banner/add_banner', $data);
            }

        }
    
    public function banner_list() {
        
        $Banner_list = $this->Bdgs_model->get_all('banner'); 
        $data['banner_list'] = array();
        
        if ($Banner_list) {
            $data['banner_list'] = $Banner_list->result();
        }
        $this->_render_admin('banner/banner', $data);
    }

    /**
     * 
     * @param type $Banner_id
     * view single Banner info 
     */
    public function view_banner($Banner_id) {

        
        if ($Banner_data = $this->Bdgs_model->get_by('banner',array('id'=>$Banner_id))) {

            $data['banner_data'] = $Banner_data->row();

           
        } else {
            $this->session->set_flashdata('error', get_string('not_found'));
            redirect(base_url('Banner/banner_list'));
        }// end of if Banner not found
        
        $this->_render_admin('Banner/view_banner', $data);
    }
    
    /**
     * 
     * @param type $Banner_id
     * edit a single Banner
     */
    public function edit_Banner($Banner_id) {
        
        
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
                
                $this->form_validation->set_rules('title',  'Headline', 'trim|required');
                $this->form_validation->set_rules('date', 'Date', 'trim|required');
               
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    var_dump($errors);exit;
                    redirect(base_url('Banner/edit_banner/').'/'.$Banner_id);
                    
                } else {
                    
                    $data = array(
                        'title'=>$this->input->post('title'),
                        
                        'b_date'=>$this->input->post('date'),
                    
                    );
                     $this->Bdgs_model->update('banner',$data,array('id'=>$Banner_id));
                    
                   //upload photo
                    $uploaded_data = false;
                   // 
                     
                    if ($_FILES['bannerimage']['name'] != NULL && $_FILES['bannerimage']['name'] != '') {
                        
                        $new_name = $_FILES['bannerimage']['name'];
                        
                        $config['upload_path'] = './upload/banner/';
                       
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['file_name'] = $new_name;
                        
                        $this->load->library('upload', $config);
                        
                        if (!$this->upload->do_upload("bannerimage")) {
                            $photo_error = $this->upload->display_errors();
                            $data['error'] = $photo_error;
                            $errors = $this->getErrors($photo_error);
                            $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            redirect(base_url('Banner/edit_banner/').'/'.$Banner_id);
                            
                        } else {
                            $uploaded_data = $this->upload->data();
                            
                             $config['image_library'] = 'gd2';
                            $config['source_image'] = $uploaded_data['full_path'];
                            
                            $config_i['new_image'] = './upload/banner/';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            $this->Bdgs_model->update('banner',array('image'=>  base_url('upload/banner/').'/'.$uploaded_data['file_name']),array('id'=>$Banner_id));
                        }
                    }
                   
                    redirect(base_url('Banner/banner_list'));
                   
                }
            }
            else{
                 if ($Banner_data = $this->Bdgs_model->get_by('banner',array('id'=>$Banner_id))) {

                        $data['banner_data'] = $Banner_data->row();
   
                    } else {
                        $this->session->set_flashdata('error', get_string('not_found'));
                        redirect(base_url('Banner/banner_list'));
                    }// end of if Banner not found
                    $this->_render_admin('banner/edit_banner', $data);
            }
    }

    /**
     * 
     * @param type $Banner_id
     * admin /non admin change
     */
    public function change_Banner_status($Banner_id) {

        if ($Banner_data = $this->bdgs_model->get_by('Banner',array('Banner_id'=>$Banner_id))) {

            if ($Banner_update = $this->bdgs_model->update('Banner', array('is_active' => !($Banner_data->row()->is_active)), array('Banner_id'=>$Banner_id))) {

                $this->session->set_flashdata('success', get_string('edit_success'));
            } else {

                $this->session->set_flashdata('error', get_string('edit_error'));
            }
        } else {

            $this->session->set_flashdata('error', get_string('not_found'));
        }
        redirect(base_url('dashboard/Banners'));
    }

    

    function check_default($post_string) {
        return $post_string == '0' ? FALSE : TRUE;
    }
    
}
// end of class
?>
