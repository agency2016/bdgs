<?php

class Dashboard extends Bdgs_Controller{
    
    public function index(){
        $data=array();
        $css_js=array();
        $this->_render_admin('dashboard',$data,$css_js);
    }
     public function about_us(){
        $data=array();
        $css_js=array();
        $this->_render_admin('about_us',$data,$css_js);
    }
     public function analysis(){
        $data=array();
        $css_js=array();
        $this->_render_admin('analysis',$data,$css_js);
    }
     public function banner(){
        $data=array();
        $css_js=array();
        $this->_render_admin('banner',$data,$css_js);
    }
     public function central_committee(){
        $data=array();
        $css_js=array();
        $this->_render_admin('central_committee',$data,$css_js);
    }
     public function constitution(){
        $data=array();
        $css_js=array();
        $this->_render_admin('constitution',$data,$css_js);
    }
     public function contact_us(){
        $data=array('meta_data'=>array('test'=>'hello'));
        $css_js=array();
        $this->_render_admin('contact_us',$data,$css_js);
    }
     public function donate(){
        $data=array();
        $css_js=array();
        $this->_render_admin('donate',$data,$css_js);
    }
     public function event(){
        $data=array();
        $css_js=array();
        $this->_render_admin('event',$data,$css_js);
    }
     public function event_image(){
        $data=array();
        $css_js=array();
        $this->_render_admin('event_image',$data,$css_js);
    }
     public function event_video(){
        $data=array();
        $css_js=array();
        $this->_render_admin('event_video',$data,$css_js);
    }
     public function focus_event(){
        $data=array();
        $css_js=array();
        $this->_render_admin('focus_event',$data,$css_js);
    }
     public function focus_event_image(){
        $data=array();
        $css_js=array();
        $this->_render_admin('focus_event_image',$data,$css_js);
    }
     public function leaflet(){
        $data=array();
        $css_js=array();
        $this->_render_admin('leaflet',$data,$css_js);
    }
     public function next_event(){
        $data=array();
        $css_js=array();
        $this->_render_admin('next_event',$data,$css_js);
    }
     public function postar(){
        $data=array();
        $css_js=array();
        $this->_render_admin('postar',$data,$css_js);
    }
     public function user(){
        $data=array();
        $css_js=array();
        $this->_render_admin('user',$data,$css_js);
    }
    
}

