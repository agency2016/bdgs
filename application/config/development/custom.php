<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['site_title'] = 'Gono songhoti';
$config['site_description'] = 'Gono songhoti';
$config['site_author'] = 'Maria zaman';
$config['site_keywords'] = 'Gono songhoti';

$config['googleplus']['application_name'] = 'Bdgs';
$config['googleplus']['client_id']        = '767006765182-0rcrii6bu4cjtfrmcsb4e65keuj6ot8f.apps.googleusercontent.com';
$config['googleplus']['client_secret']    = '4MFCufi_hx5jeupy60yjqtGu';
$config['googleplus']['redirect_uri']     = 'http://localhost/agencydelta/bdgs';
$config['googleplus']['api_key']          = 'AIzaSyC0AKCcp7DiBbUNPv2nwZrzF48ZyAtApBU';
$config['googleplus']['scopes']           = array('email');

$config['local_email'] = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'bdgs.info@gmail.com', // change it to yours
            'smtp_pass' => 'bdgs2016', // change it to yours
            'mailtype' => 'html',
            'charset' => 'UTF-8',
            'wordwrap' => TRUE
          );


/* End of file custom.php */
/* Location: ./application/config/development/custom.php */