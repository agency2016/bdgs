<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bdgs_Controller extends CI_Controller {

    public $default_load_list = array(
        'bdgs_css' => array('bootstrap', 'font-awesome','sweetalert','jquery-ui','animate','bdgs','trumbowyg','hover','jssocials','jssocials-theme-flat'),
        'bdgs_js' => array('jquery-1.9.1.min', 'jquery.validate', 'jquery-ui.min', 'bootstrap','sweetalert.min','trumbowyg','jssocials'),
        'bdgs_font' => array(),
        'bdgs_css_footer' => array(),
        'bdgs_js_footer' => array('wow.min','bdgs')
    );
    private $page_data = array();
    private $template_data = array();
    private $title = false;
    private $description = false;
    private $keywords = false;
    private $author = false;
    protected $bdgs_login_user = array();

    public function __construct($extend_css_js = array()) {

        parent::__construct();
        $this->config->load('development/custom');
        $this->merging_extend_css_js($extend_css_js);
        $this->title = $this->config->item('site_title');
        $this->description = $this->config->item('site_description');
        $this->keywords = $this->config->item('site_keywords');
        $this->author = $this->config->item('site_author');
        $this->template_data['home_url'] = base_url();
        $session = ($this->session->userdata('bdgs_login_user'));

        if (is_array($session) && !empty($session)) {

            $this->bdgs_login_user = $this->session->userdata('bdgs_login_user');
            $this->template_data['bdgs_login_user'] = $this->bdgs_login_user;
        } else {
            $this->template_data['bdgs_login_user'] = array();
        }
    }

    /**
     * @param $extended_load_list
     */
    private function merging_extend_css_js($extended_load_list) {

        if (!empty($extended_load_list)) {
            foreach ($extended_load_list as $index => $list) {
                foreach ($list as $sort_list) {
                    if (!in_array($sort_list, $this->default_load_list[$index])) {
                        array_push($this->default_load_list[$index], $sort_list);
                    }
                }
            }
        }

        foreach ($this->default_load_list as $index => $list) {
            $this->template_data[$index] = $list;
        }
    }

    /**
     * @param $view
     * @param array $page_data
     * @param array $extend_css_js
     */
    public function _render($view, $page_data = array(), $extend_css_js = array()) {

        $this->benchmark->mark('code_start');

        if (!is_array($page_data)) {
            $page_data = array();
        }
        $only_content_view = false;

        if (array_key_exists('content_only', $page_data) && $page_data['content_only'] === 1) {
            $only_content_view = true;
        }
        $this->merging_extend_css_js($extend_css_js);

        $this->template_data['title'] = $this->title;
        $this->template_data['description'] = $this->description;
        $this->template_data['keywords'] = $this->keywords;
        $this->template_data['author'] = $this->author;
        if(!array_key_exists('meta_data', $page_data)){
            $page_data['meta_data']= array();
        }
        if(!array_key_exists('fb_data', $page_data)){
            $page_data['fb_data']= array();
        }
        if(!array_key_exists('twitter_data', $page_data)){
            $page_data['twitter_data']= array();
        }
        
        if (!$only_content_view) {
            $this->template_data['bdgs_header'] = $this->load->view('template/header', array_merge($this->template_data, $page_data), true);
            $this->template_data['bdgs_footer'] = $this->load->view('template/footer', array_merge($this->template_data, $page_data), true);
        }
        if (array_key_exists('user_only', $page_data) && $page_data['user_only'] === 1 && empty($this->bdgs_login_user)) {

            redirect(base_url());
        }
        $this->template_data['bdgs_page_content'] = $this->load->view('frontend/' . $view, $page_data, true);

        $this->template_data['bdgs_main_body'] = $this->load->view('template/main_body', $this->template_data, true);

        $this->load->view('template/skeleton', array_merge($this->template_data, $page_data));

        $this->benchmark->mark('code_end');
    }

    public function _render_admin($view, $page_data = array(), $extend_css_js = array()) {

        // render any page
        if (!is_array($page_data)) {
            $page_data = array();
        }
//        $page_data['all_categories_for_header'] = $this->bdgs_model->get_by('categories', array('type' => 1, 'publish_status' => 1));
        $only_content_view = false;

        if (array_key_exists('content_only', $page_data) && $page_data['content_only'] === 1) {
            $only_content_view = true;
        }
        $this->merging_extend_css_js($extend_css_js);

        $this->template_data['title'] = $this->title;
        $this->template_data['description'] = $this->description;
        $this->template_data['keywords'] = $this->keywords;
        $this->template_data['author'] = $this->author;
        if(!array_key_exists('meta_data', $page_data)){
            $page_data['meta_data']= array();
        }
        if(!array_key_exists('fb_data', $page_data)){
            $page_data['fb_data']= array();
        }
        if(!array_key_exists('twitter_data', $page_data)){
            $page_data['twitter_data']= array();
        }

        if (!$only_content_view) {
            $this->template_data['bdgs_header'] = $this->load->view('template/header', array_merge($this->template_data, $page_data), true);
            $this->template_data['bdgs_footer'] = $this->load->view('template/footer', array_merge($this->template_data, $page_data), true);
        }
        //i//f (!empty($this->bdgs_login_user) && $this->bdgs_login_user['bdgs_user_role'] == 3) {
        $this->template_data['bdgs_page_content'] = $this->load->view('admin/' . $view, $page_data, true);
        $this->template_data['bdgs_main_body'] = $this->load->view('template/main_body', $this->template_data, true);
        $this->load->view('template/skeleton', array_merge($this->template_data, $page_data));
        //} else {
        //redirect(base_url('home/'));
        //}
    }

    /**
     *
     * @param type $page
     * @param type $data
     * @param type $print
     * @return type
     */
    public function view($page, $data = array(), $print = true) {
        if ($print) {
            $this->load->view($page, $data, $print);
        } else {
            return $this->load->view($page, $data, false);
        }
    }

    /**
     * Simple function for debugging
     * Just pass the argument & it'll return the print_r value
     * @param $debugArray
     */
    public function debug($debugArray) {
        echo "<pre>";
        print_r($debugArray);
        echo "</pre>";
    }

    /**
     * Get the error strings given separatedly by validation errors
     * @param $errorString
     * @return array
     */
    function getErrors($errorString) {
        $return = array();
        $errors = explode('</p>', $errorString);
        foreach ($errors as $key => $value) {
            $error = substr($value, strpos($value, '<p>') + 3);
            if ($error == '') {
                continue;
            }
            $return[] = $error;
        }
        return $return;
    }

// end of function
}
