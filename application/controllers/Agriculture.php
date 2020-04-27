<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agriculture extends CI_Controller
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('session');
    //     $this->load->helper('url');
    // }

    public function dashboard()
    {
        if ($this->session->userdata('login_status') == true) {
            if ($this->session->userdata('field') == 'Agriculture') {
                $data = array(
                    'id' => $this->session->userdata('id'),
                    'token' => $this->session->userdata('token'),
                    'field' => $this->session->userdata('field'),
                    'name_of_institution' => $this->session->userdata('name_of_institution'),
                );

                $this->load->view('agriculture/header', $data);
                $this->load->view('agriculture/dashboard');
                $this->load->view('agriculture/footer');

            } else {
                redirect(base_url() . 'user', 'refresh');
            }
        } else {
            redirect(base_url() . 'user', 'refresh');
        }

    }

    public function addMembers()
    {
        if ($this->session->userdata('login_status') == true) {
            if ($this->session->userdata('field') == 'Agriculture') {
                $data = array(
                    'id' => $this->session->userdata('id'),
                    'token' => $this->session->userdata('token'),
                    'field' => $this->session->userdata('field'),
                    'name_of_institution' => $this->session->userdata('name_of_institution'),
                );

                $this->load->view('agriculture/header', $data);
                $this->load->view('agriculture/add_members');
                $this->load->view('agriculture/footer');

            } else {
                redirect(base_url() . 'user', 'refresh');
            }
        } else {
            redirect(base_url() . 'user', 'refresh');
        }
       
    }

    public function loadMembers()
    {
        if ($this->session->userdata('login_status') == true) {
            if ($this->session->userdata('field') == 'Agriculture') {
                $data = array(
                    'id' => $this->session->userdata('id'),
                    'token' => $this->session->userdata('token'),
                    'field' => $this->session->userdata('field'),
                    'name_of_institution' => $this->session->userdata('name_of_institution'),
                );

                $this->load->view('agriculture/header',$data);
                $this->load->view('agriculture/members');
                $this->load->view('agriculture/footer');

            } else {
                redirect(base_url() . 'user', 'refresh');
            }
        } else {
            redirect(base_url() . 'user', 'refresh');
        }
       
    }

    public function load_identified_members()
    {
        if ($this->session->userdata('login_status') == true) {
            if ($this->session->userdata('field') == 'Agriculture') {
                $data = array(
                    'id' => $this->session->userdata('id'),
                    'token' => $this->session->userdata('token'),
                    'field' => $this->session->userdata('field'),
                    'name_of_institution' => $this->session->userdata('name_of_institution'),
                );

                $this->load->view('agriculture/header',$data);
                $this->load->view('agriculture/identified_members');
                $this->load->view('agriculture/footer');

            } else {
                redirect(base_url() . 'user', 'refresh');
            }
        } else {
            redirect(base_url() . 'user', 'refresh');
        }
       
    }

    // public function Transactions()
    // {
    //     $this->load->view('agriculture/header');
    //     $this->load->view('agriculture/transactions');
    //     $this->load->view('agriculture/footer');
    // }

}
