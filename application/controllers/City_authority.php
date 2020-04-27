<?php
defined('BASEPATH') or exit('No direct script access allowed');

class City_authority extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    // public function index()
    // {
    //     $this->load->view('login');
    // }

    public function dashboard()
    {
        if ($this->session->userdata('login_status') == true) {
            if ($this->session->userdata('field') == 'City Authority') {
               $data = array (
                   'id' => $this->session->userdata('id'),
                  'token' => $this->session->userdata('token'),
                  'field' => $this->session->userdata('field'),
                  'name_of_institution' => $this->session->userdata('name_of_institutions')
               );

               $this->load->view('city_authority/header', $data);
               $this->load->view('city_authority/dashboard');
               $this->load->view('city_authority/footer');

            } else {
                redirect(base_url() . 'user', 'refresh');
            }
        } else {
            redirect(base_url() . 'user', 'refresh');
        }
       
    }

    public function addMembers()
    {
        $this->load->view('city_authority/header');
        $this->load->view('city_authority/add_members');
        $this->load->view('city_authority/footer');
    }

    public function loadMembers()
    {
        $this->load->view('city_authority/header');
        $this->load->view('city_authority/members');
        $this->load->view('city_authority/footer');
    }

    public function load_identified_members()
    {
        $this->load->view('city_authority/header');
        $this->load->view('city_authority/identified_members');
        $this->load->view('city_authority/footer');
    }
}
