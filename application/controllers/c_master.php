<?php

class c_master extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function login() {
        $this->form_validation->set_rules('user', 'User Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $query = $this->m_master->login();
        if ($query) { // if the user's validated...
            $data = array(
                'username' => $this->input->post('user'),
                'is_logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            $data['artikel'] = $this->m_master->get_article($view = '');
            $this->load->view('admin', $data);
        } else { // incorrect username or password
            $this->index();
        }
    }

    function is_logged_in() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != TRUE) {
            echo "<center><h1 style='color:red;'>You have no permission to Access this Page</h1></center>";
            redirect(base_url() . 'c_master/loginview', 'refresh');
            die();
        }
    }

    function loginview() {
        $this->load->view('login');
    }

    function read($id) {
        $data['artikel'] = $this->m_master->get_article($view = '');
        $data['category'] = $this->m_master->get_cat();
        $data['story'] = $this->m_master->read($id);
        $this->load->view('read', $data);
    }

    function index() {
        $data['fi'] = $this->m_master->get_fi_header();
        $data['artikel'] = $this->m_master->get_article($view = '');
        $data['category'] = $this->m_master->get_cat();
        $this->load->view('index', $data);
    }

    function change($view) {
        if ($view == 'writepost') {
            $data['error'] = '';
            $data['category'] = $this->m_master->get_cat();
            $data['feat_im'] = $this->m_master->get_fi();
            $this->load->view($view, $data);
        } else {
            $data['fi'] = $this->m_master->get_fi_header_story($view);
            $data['category'] = $this->m_master->get_cat();
            $data['header'] = $this->m_master->get_header($view);
            $data['artikel'] = $this->m_master->get_article($view);
            $data['art_lain'] = $this->m_master->get_art_lain($view);
            $this->load->view('story', $data);
        }
    }

    function admin398021() {
        $this->is_logged_in();
        $data['artikel'] = $this->m_master->get_article($view = '');
        $this->load->view('admin', $data);
    }

    function log_out() {
        $this->session->sess_destroy();
        $this->loginview();
    }

    function add_article() {
        $this->form_validation->set_rules('judul', 'Your Story Title', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Category', 'trim|required');
        $this->form_validation->set_rules('editor1', 'Your Story', 'trim|required');
        $this->form_validation->set_rules('fi', 'Featured Image', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $data['category'] = $this->m_master->get_cat();
            $data['feat_im'] = $this->m_master->get_fi();
            $data['error'] = validation_errors();
            $this->load->view('writepost', $data);
        } else {
            if ($this->m_master->add_article()) {
                $data['category'] = $this->m_master->get_cat();
                $data['feat_im'] = $this->m_master->get_fi();
                $data['error'] = 'Congratulation, Your Data Has Been Published';
                $this->load->view('writepost', $data);
            } else {
                $data['category'] = $this->m_master->get_cat();
                $data['feat_im'] = $this->m_master->get_fi();
                $data['error'] = 'Failed';
                $this->load->view('writepost', $data);
            }
        }
    }

}

?>