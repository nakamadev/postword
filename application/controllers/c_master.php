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

    function login_user() {
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $query = $this->m_master->login_user();
        if ($query) { // if the user's validated...
            $data = array(
                'email' => $this->input->post('email'),
                'user_logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            $data['error'] = '';
            $data['feat_im'] = $this->m_master->get_fi();
            $data['category'] = $this->m_master->get_cat();
            $data['artikel'] = $this->m_master->get_article($view = '');
            $this->load->view('writepost', $data);
        } else { // incorrect username or password
            $this->index();
        }
    }

    function daftar() {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required');
        $this->form_validation->set_rules('repass', 'Re-type Password', 'trim|required|matches[pass]');

        if ($this->form_validation->run() == FALSE) {
            $data['category'] = $this->m_master->get_cat();
            $data['artikel'] = $this->m_master->get_article($view = '');
            $data['error'] = validation_errors();
            $this->load->view('daftar', $data);
        } else {
            if ($this->m_master->cekemail($this->input->post('email'))) {
                if ($this->m_master->daftar()) {
                    $data['category'] = $this->m_master->get_cat();
                    $data['artikel'] = $this->m_master->get_article($view = '');
                    $data['error'] = "Congratulation.!! Now you can <a href='http://localhost/postword/c_master/loginview/userlogin'> sign in</a> and write a story.";
                    $this->load->view('daftar', $data);
                } else {
                    $data['category'] = $this->m_master->get_cat();
                    $data['artikel'] = $this->m_master->get_article($view = '');
                    $data['error'] = "Ooops.!! It seems we have a technical failure here. Please feel free to Register once more.";
                    $this->load->view('daftar', $data);
                }
            } else {
                $data['category'] = $this->m_master->get_cat();
                $data['artikel'] = $this->m_master->get_article($view = '');
                $data['error'] = "Sorry.!! The email you've entered already registered, you can directly <a href='http://localhost/postword/c_master/loginview/userlogin'>sign in</a> to write a story.";
                $this->load->view('daftar', $data);
            }
        }
    }

    function is_logged_in() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != TRUE) {
            echo "<center><h1 style='color:red;'>You have no permission to Access this Page</h1></center>";
            redirect(base_url() . 'c_master/loginview/login', 'refresh');
            die();
        }
    }

    function user_logged_in() {
        $user_logged_in = $this->session->userdata('user_logged_in');
        if (!isset($user_logged_in) || $user_logged_in != TRUE) {
            echo "<center><h1 style='color:red;'>You have no permission to Access this Page</h1></center>";
            redirect(base_url() . 'c_master/loginview/userlogin', 'refresh');
            die();
        }
    }

    function user_out() {
        $this->session->unset_userdata('user_logged_in');
        $this->session->unset_userdata('email');
        $this->index();
    }

    function loginview($param) {
        $this->load->view($param);
    }

    function getuserartikel() {
        $this->user_logged_in();
        $data['category'] = $this->m_master->get_cat();
        $data['userartikel'] = $this->m_master->getuserartikel();
        $this->load->view('userartikel', $data);
    }

    function edit($id, $error) {
        //belum pakai validasi
        $this->user_logged_in();
        if ($error == 'kjahsd810239809') {
            $data['error'] = '';
        } else {
            $data['error'] = $error;
        }
        $data['category'] = $this->m_master->get_cat();
        $data['story'] = $this->m_master->edit($id);
        $this->load->view('edit', $data);
    }

    function upd_article() {
        $this->user_logged_in();

        $this->form_validation->set_rules('judul', 'Story Title', 'trim|required');
        $this->form_validation->set_rules('editor1', 'Story Content', 'trim|required');
        $id = $this->input->post('id_artikel');
        if ($this->form_validation->run() == FALSE) {
            $error = validation_error();
        } else {
            if ($this->m_master->upd_artikel()) {
                $error = 'Congratulation., your story have been updated.';
            } else {
                $error = 'Sorry., please enter the valid data.';
            }
        }
        $this->edit($id, $error);
    }

    function delete($id) {
        $this->user_logged_in();
        $this->m_master->delete($id);
        $this->getuserartikel();
    }

    function read($id) {
        $data['header'] = $this->m_master->get_header($id);
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
            $this->user_logged_in();
            $data['error'] = '';
            $data['category'] = $this->m_master->get_cat();
            $data['feat_im'] = $this->m_master->get_fi();
            $this->load->view($view, $data);
        } elseif ($view == 'daftar') {
            $data['error'] = '';
            $data['category'] = $this->m_master->get_cat();
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
        $this->user_logged_in();
        $this->form_validation->set_rules('judul', 'Story Title', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Category', 'trim|required');
        $this->form_validation->set_rules('editor1', 'Content of Your Story', 'trim|required');
        $this->form_validation->set_rules('fi', 'Featured Image', 'trim|required');

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