<?php

class User_model extends CI_Model {

    function join_user_add($data, $categoty) {
        unset($data['category']);
        $retrun = $this->db->insert('user', $data);
        $id = $this->db->insert_id();

        $name = $data['title'];
        if ($name == "") {
            return true;
        }
        $name = str_replace("-", "", $name);
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));

        $status = true;
        $x = 0;
        $slug_temp = $slug;
        while ($status) {
            $x++;
            $this->db->select('slug');
            $this->db->from('user');
            $this->db->where(array("slug" => $slug));
            $q1 = $this->db->get();
            if ($q1->num_rows() > 0) {
                $slug = $slug_temp . $x;
            } else {
                $this->db->where("id='" . $id . "'");
                $this->db->update('user', array("slug" => $slug));
                $status = false;
            }
        }
        $catinsert = array();
        foreach ($categoty as $row) {
            $catinsert[] = array("userid" => $id, "categoryid" => $row);
        }
        $this->db->insert_batch('category_user', $catinsert);

        return $retrun;
    }

    function get_trending_post() {
        $this->db->select('user.*,postmeta.views,category_user.categoryid');
        $this->db->from('user');
        $this->db->join('postmeta', "user.id=postmeta.post_id", "left");
        $this->db->join('category_user', "user.id=category_user.userid", "left");
        $this->db->order_by("views", "desc");
        $this->db->limit("10");
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_post($where, $start, $end) {
        $this->db->select('user.*,postmeta.views,category_user.categoryid');
        $this->db->from('user');
        $this->db->join('postmeta', "user.id=postmeta.post_id", "left");
        $this->db->join('category_user', "user.id=category_user.userid", "left");
        if ($where != "") {
            $this->db->where($where);
        }
        $this->db->order_by("id", "desc");
        if ($end == "0") {
            $this->db->limit($start);
        } else {
            $this->db->limit($start, $end);
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_category() {
        $this->db->select('category.*');
        $this->db->from('category');
        $this->db->order_by("name");
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_category_withcount() {
        $this->db->select('name,url,COUNT(categoryid) as total');
        $this->db->from('category');
        $this->db->join('category_user', "category_user.categoryid=category.id", "left");
        $this->db->group_by('name,url');
        $this->db->order_by("name,url");
        $query = $this->db->get();
        return $query->result_array();
    }

    function getgetsinglepost($id) {

        $this->db->select('user.*,postmeta.views,category.name as cat');
        $this->db->from('user');
        $this->db->join('postmeta', "user.id=postmeta.post_id", "left");
        $this->db->join('category_user', "category_user.userid=user.id", "left");
        $this->db->join('category', "category_user.categoryid=category.id", "left");
        $this->db->where('user.slug', $id);
        $query = $this->db->get();
        $data = $query->result_array();
        $return = array();
        foreach ($data as $row) {
            $return['name'] = $row['name'];
            $return['email'] = $row['email'];
            $return['age'] = $row['age'];
            $return['from_address'] = $row['from_address'];
            $return['looking'] = $row['looking'];
            $return['type'] = $row['type'];
            $return['phoneno'] = $row['phoneno'];
            $return['fb'] = $row['fb'];
            $return['message'] = $row['message'];
            $return['created_at'] = $row['created_at'];
            $return['name'] = $row['name'];
            $return['views'] = $row['views'];
            $return['title'] = $row['title'];
            $return['lanka'] = $row['lanka'];
            $return['slug'] = $row['slug'];
            $return['cat'][] = $row['cat'];
            $return['id'] = $row['id'];
        }
        if ($return['views'] == "") {
            $this->db->insert('postmeta', array('post_id' => $return['id'], "views" => "1"));
            $return['views'] = "1";
        } else {
            $this->db->set('views', 'views+1', FALSE);
            $this->db->where('post_id', $return['id']);
            $this->db->update('postmeta');
        }

        return $return;
    }

    function emailsubcribe_add($email) {
        $data = array("email" => $email);
        if ($this->db->insert('emailsubcribe', $data)) {
            return true;
        } else {
            return false;
        }
    }

    function savelankapost($data) {
        $this->db->select('id');
        $this->db->from('user');
        $this->db->where(array("lanka" => $data['lanka']));
        $q1 = $this->db->get();
        $id = 0;
        if ($q1->num_rows() <= 0) {
            $this->db->insert('user', $data);
            $id = $this->db->insert_id();
        }

        $name = $data['title'];
        if ($id == 0 || $name == "") {
            return true;
        }
        $name = str_replace("-", "", $name);
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));

        $status = true;
        $x = 0;
        $slug_temp = $slug;
        while ($status) {
            $x++;
            $this->db->select('slug');
            $this->db->from('user');
            $this->db->where(array("slug" => $slug));
            $q1 = $this->db->get();
            if ($q1->num_rows() > 0) {
                $slug = $slug_temp . $x;
            } else {
                $this->db->where("id='" . $id . "'");
                $this->db->update('user', array("slug" => $slug));
                $status = false;
            }
        }

        return true;
    }

    function saveComment($data) {
        if ($this->db->insert('postcomment', $data)) {
            return true;
        } else {
            return false;
        }
    }

    function getgetsinglepostcomment($id) {
        $this->db->select('postcomment.*');
        $this->db->from('postcomment');
        $this->db->join('user', "user.id = postcomment.postid", "left");
        $this->db->where('user.slug', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function getsearchplace($where, $start, $end) {
        $this->db->select('user.*,postmeta.views,category_user.categoryid');
        $this->db->from('user');
        $this->db->join('postmeta', "user.id=postmeta.post_id", "left");
        $this->db->join('category_user', "user.id=category_user.userid", "left");
        if ($where != "") {
            $this->db->like('user.from_address', $where);
            $this->db->or_like('user.name', $where);
            $this->db->or_like('user.message', $where);
        }
        $this->db->order_by("id", "desc");
        if ($end == "0") {
            $this->db->limit($start);
        } else {
            $this->db->limit($start, $end);
        }
        $query = $this->db->get();
        return $query->result_array();
    }

}

?>
