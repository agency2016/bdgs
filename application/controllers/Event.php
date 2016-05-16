<?php

//controller for analysis login  logout listing search analysis edit , add , delete all analysis functions
class Event extends Bdgs_Controller {

    
    public function  e_list() {
        
       
        $data['analysis_list'] = array();
        
        $this->_render('events/list', $data);
    }
    public function  single() {
        
       
        $data['analysis_list'] = array();
        
        $this->_render('events/single', $data);
    }

    
    
}
// end of class
?>


