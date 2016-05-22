<?php

class Centrl extends Bdgs_Controller {

    function __construct($extend_css_js = array()) {
        parent::__construct($extend_css_js);
        
    }

    /*
     * get all category item with pagination
     */

    public function centrl_list() {
    
        $data['record'] = $this->Bdgs_model->get_all('centrl_comittee');
        //var_dump($data);exit;
        $css_js_for_home = array();
        $this->_render_admin('centrl/centrl', $data, $css_js_for_home);
    }

    /*
     * added item in database
     */

    public function add() {

       
        $this->form_validation->set_rules('c_desc', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
            
            $category_desc = ($this->input->post('c_desc'));
            $data = array(
                
                'c_desc' => "$category_desc"
            );
            $data['get_insert_id'] = $this->Bdgs_model->insert('centrl_comittee',$data);
            if ($data['get_insert_id']) {

            } else {

            }
        }
    }

    /*
     * delete category item from database
     */

    public function delete() {
        echo $id = $this->input->post('edit_id');
        $data['get_insert_id'] = $this->Bdgs_model->delete('centrl_comittee',array('id'=>$id));
        echo "deleted";
    }
    /**
     * 
     */

    public function edit() {
       
        $this->form_validation->set_rules('c_desc', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
            $_id = $this->input->post('edit_id');
           
            $_desc = $this->input->post('c_desc');
            $data = array(
                
                'c_desc' => "$_desc"
            );
            $data['get_edit_id'] = $this->Bdgs_model->update('centrl_comittee', $data,array('id'=>$_id));
        }
    }

}