<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
       $this->load->view('_frontend/index');
    }

    public function profil()
    {
        $this->load->view('_frontend/profil');
    }

    public function kegiatan()
    {
        $this->load->view('_frontend/kegiatan');
    }

    public function programkerja()
    {
        $this->load->view('_frontend/programkerja');
    }

    public function hubungikami()
    {
        $this->load->view('_frontend/hubungikami');
    }

  }
