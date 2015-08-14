<?php

class m_master extends CI_Model {

    function login() {
        $this->db->where('username', $this->input->post('user'));
        $this->db->where('password', $this->input->post('password'));
        $query = $this->db->get('admin');
        if ($query->num_rows() == 1) {
            return TRUE;
        }
    }

    function login_user() {
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('pass', md5($this->input->post('password')));
        $query = $this->db->get('user');
        if ($query->num_rows() == 1) {
            return TRUE;
        }
    }

    function get_cat() {
        $cat = $this->db->get('category');
        if ($cat->num_rows() > 0) {
            foreach ($cat->result() as $data_cat) {
                $category[] = $data_cat;
            }
            return $category;
        }
    }

    function get_fi() {
        $this->db->where('status', 'not used');
        $fi = $this->db->get('featured_image');
        if ($fi->num_rows() > 0) {
            foreach ($fi->result() as $data_fi) {
                $feat_im[] = $data_fi;
            }
            return $feat_im;
        }
    }

    function get_fi_header() {
        $query = "select a.id_artikel, b.nama, a.judul, a.isi from artikel a, featured_image b
                where b.id_feat_im = a.id_feat_im and a.id_artikel = (select max(id_artikel) from artikel)";
        return $this->db->query($query)->row();
    }

    function get_fi_header_story($view) {
        $query = "select b.nama from artikel a, featured_image b, category c
                where b.id_feat_im = a.id_feat_im and a.id_cat = c.id_cat and a.clicked = (select max(clicked) from artikel where id_cat = $view) and a.id_cat = '$view'";
        $exec = $this->db->query($query);
        if ($exec->num_rows() == 1) {
            return $exec->row();
        } else {
            $query1 = "select MAX(b.nama) as nama from artikel a, featured_image b, category c
                where b.id_feat_im = a.id_feat_im and a.id_cat = c.id_cat and a.id_cat = '$view'";
            return $this->db->query($query1)->row();
        }
    }

    function get_article($view) {
        if ($view != '') {
            $this->db->select('*');
            $this->db->from('artikel a');
            $this->db->join('category b', 'b.id_cat = a.id_cat', 'left');
            $this->db->join('featured_image c', 'c.id_feat_im = a.id_feat_im', 'left');
            $this->db->where('a.id_cat', $view);
            $this->db->order_by('a.id_artikel', 'desc');

            $query = $this->db->get();
            if ($query->num_rows() != 0) {
                return $query->result();
            } else {
                return false;
            }
        } else {
            $this->db->select('*');
            $this->db->from('artikel a');
            $this->db->join('category b', 'b.id_cat = a.id_cat', 'left');
            $this->db->join('featured_image c', 'c.id_feat_im = a.id_feat_im', 'left');
            $this->db->order_by('a.id_artikel', 'desc');

            $query = $this->db->get();
            if ($query->num_rows() != 0) {
                return $query->result();
            } else {
                return false;
            }
        }
    }

    function get_art_lain($view) {
        if ($view != '') {
            $this->db->select('*');
            $this->db->from('artikel a');
            $this->db->join('category b', 'b.id_cat = a.id_cat', 'left');
            $this->db->join('featured_image c', 'c.id_feat_im = a.id_feat_im', 'left');
            $this->db->where('a.id_cat !=', $view);
            $this->db->order_by('a.id_artikel', 'desc');

            $query = $this->db->get();
            if ($query->num_rows() != 0) {
                return $query->result();
            } else {
                return false;
            }
        } else {
            $this->db->select('*');
            $this->db->from('artikel a');
            $this->db->join('category b', 'b.id_cat = a.id_cat', 'left');
            $this->db->join('featured_image c', 'c.id_feat_im = a.id_feat_im', 'left');
            $this->db->order_by('a.id_artikel', 'desc');

            $query = $this->db->get();
            if ($query->num_rows() != 0) {
                return $query->result();
            } else {
                return false;
            }
        }
    }

    function getuserartikel() {
        $this->db->select('a.id_artikel,a.judul,a.tgl_post,a.isi,b.nm_cat');
        $this->db->from('artikel a', 'category b');
        $this->db->join('category b', 'b.id_cat = a.id_cat', 'left');
        $this->db->join('user c', 'c.email = a.email', 'left');
        $this->db->where('a.email', $this->session->userdata('email'));
        $this->db->order_by('a.tgl_post', 'desc');

        $query = $this->db->get();

        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    function edit($id) {
        $this->db->select('a.id_artikel,a.judul,a.isi,b.id_cat,b.nm_cat');
        $this->db->from('artikel a');
        $this->db->join('category b', 'b.id_cat = a.id_cat', 'left');
        $this->db->where('id_artikel', $id);
        return $this->db->get()->row();
    }

    function upd_artikel() {
        $upd_art = array(
            'judul' => $this->input->post('judul'),
            'id_cat' => $this->input->post('kategori'),
            'isi' => $this->input->post('editor1'),
        );

        $id_artikel = $this->input->post('id_artikel');
        $this->db->select('id_cat');
        $this->db->where('id_artikel', $id_artikel);
        $get_id_catart = $this->db->get('artikel')->row();

        $id_catart = $get_id_catart->id_cat;
        $this->db->select('jum');
        $this->db->where('id_cat', $id_catart);
        $get_jumart = $this->db->get('category')->row();

        $id_catcat = $this->input->post('kategori');
        $this->db->select('jum');
        $this->db->where('id_cat', $id_catcat);
        $get_jumcat = $this->db->get('category')->row();
        
        if ($id_catart != $id_catcat) {

            $jumart = $get_jumart->jum - 1;
            $upd_jumart = array(
                'jum' => $jumart
            );
            $this->db->where('id_cat', $id_catart);
            $this->db->update('category', $upd_jumart);

            $jumcat = $get_jumcat->jum + 1;
            $upd_jumcat = array(
                'jum' => $jumcat
            );
            $this->db->where('id_cat', $id_catcat);
            $this->db->update('category', $upd_jumcat);
        }

        if ($this->db->update('artikel', $upd_art)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function delete($id) {
        $this->db->where('id_artikel', $id);
        $art = $this->db->get('artikel')->row();
        $upd_fi = array(
            'status' => 'not used'
        );
        $this->db->where('id_feat_im', $art->id_feat_im);
        $this->db->update('featured_image', $upd_fi);

        $this->db->where('id_cat', $art->id_cat);
        $cat = $this->db->get_where('category')->row();
        $upd_cat = array(
            'jum' => $cat->jum - 1
        );
        $this->db->where('id_cat', $art->id_cat);
        $this->db->update('category', $upd_cat);

        $this->db->delete('artikel', array('id_artikel' => $id));
    }

    function read($id) {
        $this->db->select('clicked');
        $this->db->where('id_artikel', $id);
        $jumclick = $this->db->get('artikel')->row();

        $dataupdate = array(
            'clicked' => $jumclick->clicked + 1
        );
        $this->db->where('id_artikel', $id);
        $this->db->update('artikel', $dataupdate);

        $query = $this->db->query("Select a.judul, a.isi, a.tgl_post, b.nm_cat, b.header, c.nama from artikel a, category b, featured_image c
            where a.id_cat = b.id_cat and a.id_feat_im = c.id_feat_im and a.id_artikel = '$id'");
        return $query->row();
    }

    function get_header($view) {
        $query = $this->db->get_where('category', array('id_cat' => $view));
        return $query->row();
    }

    function add_article() {
        $ins_story = array(
            'judul' => $this->input->post('judul'),
            'id_feat_im' => $this->input->post('fi'),
            'isi' => $this->input->post('editor1'),
            'tgl_post' => date('d-m-Y'),
            'email' => $this->session->userdata('email'),
            'id_cat' => $this->input->post('kategori')
        );
        $insert = $this->db->insert('artikel', $ins_story);

        $id_cat = $this->input->post('kategori');
        $fi = $this->input->post('fi');

        $this->db->select('jum');
        $this->db->where('id_cat', $id_cat);
        $jum = $this->db->get('category')->row();

        $jml = $jum->jum + 1;

        $sql = "Update category set jum = $jml where id_cat = $id_cat";
        $update = $this->db->query($sql);

        $sql2 = "Update featured_image set status = 'used' where id_feat_im = $fi";
        $update2 = $this->db->query($sql2);

        if ($insert && $update && $update2) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function cekemail($email) {
        $this->db->select('email');
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        if ($query->num_rows() != 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function daftar() {
        $ins_user = array(
            'email' => $this->input->post('email'),
            'nama' => $this->input->post('nama'),
            'pass' => md5($this->input->post('pass'))
        );
        $insert = $this->db->insert('user', $ins_user);

        if ($insert) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>