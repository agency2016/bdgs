˙<?php

//controller for Leaflet login  logout listing search Leaflet edit , add , delete all Leaflet functions
class Leaflet extends Bdgs_Controller {

     private  $js_css_array = array('bdgs_css'=>array('jquery.dataTables.min'),'bdgs_js'=>array('jquery.dataTables.min'));
     public function __construct() {
       
        parent::__construct($this->js_css_array);
        $this->load->library('user_agent');
        $this->load->library('encrypt');
       
       
       
    }
    public function add_leaflet() {
            
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
                
                $this->form_validation->set_rules('title',  'Headline', 'trim|required');
                $this->form_validation->set_rules('l_desc', 'Desc', 'trim|required');
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    
                    redirect(base_url('leaflet/add_leaflet'));
                    
                } else {
                    
                    $data = array(
                        'title'=>$this->input->post('title'),
                        
                        'b_date'=>$this->input->post('date'),
                    
                    );
                    $leaflet_id = $this->Bdgs_model->insert('leaflet',$data);
                    
                   //upload photo
                    $uploaded_data = false;
                   // 
                     
                    if ($_FILES['leafletimage']['name'] != NULL && $_FILES['leafletimage']['name'] != '') {
                        
                        $new_name = $_FILES['leafletimage']['name'];
                        
                        $config['upload_path'] = './upload/leaflet/';
                       
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['file_name'] = $new_name;
                         //var_dump($config);exit;
                        $this->load->library('upload', $config);
                        
                        if (!$this->upload->do_upload("leafletimage")) {
                            $photo_error = $this->upload->display_errors();
                            $data['error'] = $photo_error;
                            $errors = $this->getErrors($photo_error);
                            $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            //var_dump($errors);exit;
                            redirect(base_url('Leaflet/add_leaflet'));
                            
                        } else {
                            $uploaded_data = $this->upload->data();
                            
                             $config['image_library'] = 'gd2';
                            $config['source_image'] = $uploaded_data['full_path'];
                            
                            $config_i['new_image'] = './upload/leaflet/';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            $this->Bdgs_model->update('leaflet',array('image'=>  base_url('upload/leaflet/').'/'.$uploaded_data['file_name']),array('id'=>$leaflet_id));
                        }
                    }
                   
                    redirect(base_url('Leaflet/leaflet_list'));
                    
                    
                }
                
            }else{
                
                $this->_render_admin('leaflet/add_leaflet', $data);
            }

        }
    
    public function leaflet_list() {
        
        $Leaflet_list = $this->Bdgs_model->get_all('leaflet'); 
        $data['leaflet_list'] = array();
        
        if ($Leaflet_list) {
            $data['leaflet_list'] = $Leaflet_list->result();
        }
        $this->_render_admin('leaflet/leaflet', $data);
    }

    /**
     * 
     * @param type $Leaflet_id
     * view single Leaflet info 
     */
    public function view_leaflet($Leaflet_id) {

        
        if ($Leaflet_data = $this->Bdgs_model->get_by('leaflet',array('id'=>$Leaflet_id))) {

            $data['leaflet_data'] = $Leaflet_data->row();

           
        } else {
            $this->session->set_flashdata('error', get_string('not_found'));
            redirect(base_url('Leaflet/leaflet_list'));
        }// end of if Leaflet not found
        
        $this->_render_admin('Leaflet/view_leaflet', $data);
    }
    
    /**
     * 
     * @param type $Leaflet_id
     * edit a single Leaflet
     */
    public function edit_Leaflet($Leaflet_id) {
        
        
            $data= array();
            if ($this->input->server("REQUEST_METHOD") === "POST") {
                
                $this->form_validation->set_rules('title',  'Headline', 'trim|required');
                $this->form_validation->set_rules('date', 'Date', 'trim|required');
               
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    var_dump($errors);exit;
                    redirect(base_url('Leaflet/edit_leaflet/').'/'.$Leaflet_id);
                    
                } else {
                    
                    $data = array(
                        'title'=>$this->input->post('title'),
                        
                        'b_date'=>$this->input->post('date'),
                    
                    );
                     $this->Bdgs_model->update('leaflet',$data,array('id'=>$Leaflet_id));
                    
                   //upload photo
                    $uploaded_data = false;
                   // 
                     
                    if ($_FILES['leafletimage']['name'] != NULL && $_FILES['leafletimage']['name'] != '') {
                        
                        $new_name = $_FILES['leafletimage']['name'];
                        
                        $config['upload_path'] = './upload/leaflet/';
                       
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['file_name'] = $new_name;
                        
                        $this->load->library('upload', $config);
                        
                        if (!$this->upload->do_upload("leafletimage")) {
                            $photo_error = $this->upload->display_errors();
                            $data['error'] = $photo_error;
                            $errors = $this->getErrors($photo_error);
                            $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                            redirect(base_url('Leaflet/edit_leaflet/').'/'.$Leaflet_id);
                            
                        } else {
                            $uploaded_data = $this->upload->data();
                            
                             $config['image_library'] = 'gd2';
                            $config['source_image'] = $uploaded_data['full_path'];
                            
                            $config_i['new_image'] = './upload/leaflet/';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
                            $this->Bdgs_model->update('leaflet',array('image'=>  base_url('upload/leaflet/').'/'.$uploaded_data['file_name']),array('id'=>$Leaflet_id));
                        }
                    }
                   
                    redirect(base_url('Leaflet/leaflet_list'));
                   
                }
            }
            else{
                 if ($Leaflet_data = $this->Bdgs_model->get_by('leaflet',array('id'=>$Leaflet_id))) {

                        $data['leaflet_data'] = $Leaflet_data->row();
   
                    } else {
                        $this->session->set_flashdata('error', get_string('not_found'));
                        redirect(base_url('Leaflet/leaflet_list'));
                    }// end of if Leaflet not found
                    $this->_render_admin('leaflet/edit_leaflet', $data);
            }
    }

    /**
     * 
     * @param type $Leaflet_id
     * admin /non admin change
     */
    public function change_Leaflet_status($Leaflet_id) {

        if ($Leaflet_data = $this->bdgs_model->get_by('Leaflet',array('Leaflet_id'=>$Leaflet_id))) {

            if ($Leaflet_update = $this->bdgs_model->update('Leaflet', array('is_active' => !($Leaflet_data->row()->is_active)), array('Leaflet_id'=>$Leaflet_id))) {

                $this->session->set_flashdata('success', get_string('edit_success'));
            } else {

                $this->session->set_flashdata('error', get_string('edit_error'));
            }
        } else {

            $this->session->set_flashdata('error', get_string('not_found'));
        }
        redirect(base_url('dashboard/Leaflets'));
    }

    

    function check_default($post_string) {
        return $post_string == '0' ? FALSE : TRUE;
    }
    
}
// end of class
?>
