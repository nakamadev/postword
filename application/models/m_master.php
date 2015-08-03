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
        $query = "select b.nama from artikel a, featured_image b
                where b.id_feat_im = a.id_feat_im and a.clicked = (select max(clicked) from artikel)";
        return $this->db->query($query)->row();
    }

    function get_fi_header_story($view) {
        $query = "select b.nama from artikel a, featured_image b, category c
                where b.id_feat_im = a.id_feat_im and a.id_cat = c.id_cat and a.clicked = (select max(clicked) from artikel) and a.id_cat = '$view'";
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

    function read($id) {
        $query = $this->db->query("Select a.judul, a.isi, a.tgl_post, b.nm_cat, c.nama from artikel a, category b, featured_image c
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
            'id_feat_im' => '1',
            'isi' => $this->input->post('editor1'),
            'tgl_post' => date('d-m-Y'),
            'id_cat' => $this->input->post('kategori')
        );
        $insert = $this->db->insert('artikel', $ins_story);

        $id_cat = $this->input->post('kategori');

        $this->db->select('jum');
        $this->db->where('id_cat', $id_cat);
        $jum = $this->db->get('category');

        $data = array(
            'jum' => $jum + 1
        );

        $this->db->where('id_cat', $id_cat);
        $update = $this->db->update('category', $data);

        if ($insert && $update) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>