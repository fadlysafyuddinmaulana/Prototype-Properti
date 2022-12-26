<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Starter_Page extends CI_Controller
{
    public function Index()
    {
        $data['title']          = 'Agaz Properti';
        $data['content_title'] = '<b>Agaz</b>Properti';

        $this->load->view('Template_login/Header_login', $data);
        $this->load->view('Starter-Page/Login', $data);
        $this->load->view('Template_login/Footer_login');
    }

    public function Register()
    {
        $data['title']          = 'Agaz Properti';
        $data['content_title']  = '<b>Agaz</b>Properti';

        $this->load->view('Template_login/Header_login', $data);
        $this->load->view('Starter-Page/Register', $data);
        $this->load->view('Template_login/Footer_login');
    }
}
