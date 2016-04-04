<?php

class About_us extends Bdgs_Controller {

    function __construct($extend_css_js = array()) {
        parent::__construct($extend_css_js);
        
    }

    /*
     * get all category item with pagination
     */

    public function about_list() {
    
        $data['record'] = $this->Bdgs_model->get_all('about_us');
        $css_js_for_home = array();
        $this->_render_admin('about_us', $data, $css_js_for_home);
    }

    /*
     * added item in database
     */

    public function add() {

       
        $this->form_validation->set_rules('desc', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
            
            $category_desc = ($this->input->post('desc'));
            $data = array(
                
                'a_desc' => "$category_desc"
            );
            $data['get_insert_id'] = $this->Bdgs_model->insert('about_us',$data);
            if ($data['get_insert_id']) {
//                echo "successfully added, id is : " . $data['get_insert_id'];
            } else {
//                echo "database error! message not send";
            }
        }
    }

    /*
     * delete category item from database
     */

    public function delete() {
        echo $id = $this->input->post('cat_id');
        $data['get_insert_id'] = $this->Bdgs_model->delete($id);
        echo "deleted";
    }

    public function edit() {
       
        $this->form_validation->set_rules('desc', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
            $property_category_id = $this->input->post('edit_id');
           
            $category_desc = $this->input->post('desc');
            $data = array(
                
                'a_desc' => "$category_desc"
            );
            $data['get_edit_id'] = $this->Bdgs_model->update('about_us',array('id'=>$property_category_id), $data);
        }
    }

}
