<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rest_test extends CI_Controller {
  public function index()
  {
    $this->load->helper('url');
    $this->load->view('rest/index');
  }

  public function client_request()
  {
    $this->load->helper('url');
    $this->load->library('rest');
    $config = array('server'            => 'http://codeigniter-rest.dev',
                  //'api_key'         => 'Setec_Astronomy'
                  //'api_name'        => 'X-API-KEY'
                  'http_user'       => 'admin',
                  'http_pass'       => '1234',
                  'http_auth'       => 'basic',
                  //'ssl_verify_peer' => TRUE,
                  //'ssl_cainfo'      => '/certs/cert.pem'
                  );

    // Run some setup
    $this->rest->initialize($config);

    // Request
    var_dump($this->rest->get('/api/example/users',[],'json'));

  }
}
