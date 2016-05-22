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
                
               
                $this->form_validation->set_rules('headline',  'Headline', 'trim|required');
                $this->form_validation->set_rules('writer', 'Writer', 'trim|required');
                $this->form_validation->set_rules('desc','DESC', 'trim|required');
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    var_dump($errors);exit;
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    redirect(base_url('Analysis/add_analysis'));
                    
                } else {
                    
                    $data = array(
                        'headline'=>$this->input->post('headline'),
                        'writer'=>$this->input->post('writer'),
                        'a_desc'=>$this->input->post('desc'),
                        'a_date'=>$this->input->post('date'),
                    
                    );
                    $analysis_id = $this->Bdgs_model->insert('analysis',$data);
                    
                   
                    redirect(base_url('dashboard/analysis'));
                    
                    
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

                $this->form_validation->set_rules('headline',  'Headline', 'trim|required');
                $this->form_validation->set_rules('writer', 'Writer', 'trim|required');
                $this->form_validation->set_rules('desc','DESC', 'trim|required');
               
                if ($this->form_validation->run() == false) {
                    
                    $errors = $this->getErrors(validation_errors());
                    //var_dump($errors);exit;
                    $data['error'] = $this->session->set_flashdata('error', implode('<br>', $errors));
                    redirect(base_url('Analysis/add_analysis'));
                    
                } else {
                    
                    $data = array(
                        'headline'=>$this->input->post('headline'),
                        'writer'=>$this->input->post('writer'),
                        'a_desc'=>$this->input->post('desc'),
                        'a_date'=>$this->input->post('date'),
                    
                    );
                    
                    
                    $analysis_update = $this->Bdgs_model->update('analysis',$data,array('id'=>$analysis_id));
                    redirect(base_url('dashboard/analysis'));
                   
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
