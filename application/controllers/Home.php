<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Home extends CI_Controller{

    public function __construct() {
        parent::__construct();

        //SE NÃO TIVER LOGADO, REDIRECIONA PARA TELA DE LOGIN
        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua sessão expirou');
            redirect('login');
        }

    }
        public function index() {

            $this->load->view('layout/header');
            $this->load->view('home/index');
            $this->load->view('layout/footer');
        }
        
    }