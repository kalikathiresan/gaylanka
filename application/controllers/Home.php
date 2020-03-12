<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $where = "";
        $data['trending'] = $this->user_model->get_trending_post();
        $data['all_post'] = $this->user_model->get_all_post($where, 100, 0);
        $data['category'] = $this->user_model->get_all_category_withcount();
        $data['title'] = "Latest Gay profiles in Sri Lanka";
        $data['metatitle'] = "find gay men in sri lanka Home :: gaylanka.xyz";
        $data['posttype'] = "0";
        $data['loadmore'] = 1;

        $data1['trending'] = $this->user_model->get_trending_post();
        $data2['category'] = $data['category'];

        $data['meta_desc'] = "You can see Sri Lankan Gay profile here, Here show all Category. Our main categories are Gay Top male, Gay Bottom male, Gay master,Gay Slave, 50/50 gay and gay vers."
                . "You can see the profile and comment here, and get gay phone number and email here. after you can contact them and meet, get gay friendship.";
        $data['meta_keywords'] = array("Gay Top", "Gay Bottom", "Gay 50/50", "Gay CD - cross dresser", "Gay transgender", "Meet gay in colombo");

        $this->load->view('common/header');
        $this->load->view('common/sidebar-left', $data1);
        $this->load->view('home/index', $data);
        $this->load->view('common/sidebar-right');
        $this->load->view('common/footer', $data2);
    }

    public function join() {
        $data['category'] = $this->user_model->get_all_category();
        $data1['mostpopuler'] = $this->user_model->get_trending_post();
        $data1['trending'] = $this->user_model->get_trending_post();
        $data2['category'] = $this->user_model->get_all_category_withcount();

        $this->load->view('common/header');
        $this->load->view('common/sidebar-left', $data1);
        $this->load->view('home/join', $data);
        $this->load->view('common/sidebar-right', $data2);
        $this->load->view('common/footer');
    }

    public function getmorepost() {
        $postcount = $this->input->post("postcount");
        $posttype = $this->input->post("posttype");
        $data['loadmore'] = 1;

        if ($posttype == "0") {
            $where = "";
        } else {
            $where = "category_user.categoryid = '1'";
        }
        $data['all_post'] = $this->user_model->get_all_post($where, $postcount + 100, $postcount);

        $return['msg'] = $this->load->view('home/post_load', $data, true);
        $return['count'] = sizeOf($data['all_post']);
        echo json_encode($return);
    }

    public function join_user_add() {
//        $email = trim($this->input->post("email"));
//        $name = trim($this->input->post("name"));
//        $age = trim($this->input->post("age"));
//        $from = trim($this->input->post("from"));
//        $type = trim($this->input->post("type"));
//        $looking = trim($this->input->post("looking"));
//        $phoneno = trim($this->input->post("phoneno"));
//        $fb = trim($this->input->post("fb"));
//        $message = trim($this->input->post("message"));

        $data = $this->input->post();

        $categoty = $data['category'];
        unset($data['category']);

        $data = array_map('trim', $data);
        $status = false;
        $msg = "";
        if (trim($this->input->post("name")) == "") {
            $status = false;
            $msg = "Enter a name";
        } elseif (trim($this->input->post("message")) == "") {
            $status = false;
            $msg = "Enter a message";
        } else {

            $data['created_at'] = date('Y-m-d H:i:s', now());
            if ($this->user_model->join_user_add($data, $categoty)) {
                $status = true;
                $msg = "Add successfully";
            } else {
                $status = false;
                $msg = "Add unsuccessfully";
            }
        }
        $data_rt = array('msg' => $msg, 'status' => $status);
        echo json_encode($data_rt);
    }

    public function getsinglepost() {
        $id = $this->uri->segment(2);
        $data['details'] = $this->user_model->getgetsinglepost($id);
        $data['category'] = $this->user_model->get_all_category();
        $data['comment'] = $this->user_model->getgetsinglepostcomment($id);

        $data1['trending'] = $this->user_model->get_trending_post();
        $data2['category'] = $this->user_model->get_all_category_withcount();

        $this->load->view('common/header');
        $this->load->view('common/sidebar-left', $data1);
        $this->load->view('home/single', $data);
        $this->load->view('common/sidebar-right', $data2);
        $this->load->view('common/footer', $data2);
    }

    public function emailsubcribe_add() {
        if (trim($this->input->post("email")) != "") {
            $this->user_model->emailsubcribe_add($this->input->post("email"));
        }
    }

    public function category() {
        $param = $this->uri->segment(2);
        $datah = array();
        if ($param == "top") {
            $where = "category_user.categoryid = '1'";
            $data['title'] = "TOP";
            $datah['metatitle'] = "I Need a Gay Top men in sri lanka :: gaylanka.xyz";
            $data['posttype'] = "1";
            $data['meta_desc'] = "You can see Sri Lankan Gay Top male profile here, If you are bottom or 50/50 you like this profiles. Here view profiels you can see Gay Top Phone number, Gay Top emails, Gay Top area.";
            $data['meta_keywords'] = array("Gay Top", "Gay Top Uncle", "I Need a gay top", "I am a bottom", "Gay Need a master", "Top in srilanka");
        } elseif ($param == "bottom") {
            $where = "category_user.categoryid = '2'";
            $data['title'] = "Bottom";
            $datah['metatitle'] = "I Need a Gay Bottom men in sri lanka :: gaylanka.xyz";
            $data['posttype'] = "2";
        } elseif ($param == "50-50") {
            $where = "category_user.categoryid = '3'";
            $data['title'] = "50/50";
            $datah['metatitle'] = "I am a 50/50 Gay Bottom in sri lanka, I Need a 50/50 gay (verse) :: gaylanka.xyz";
            $data['posttype'] = "3";
        } elseif ($param == "slave-maser") {
            $where = "category_user.categoryid = '4'";
            $data['title'] = "Slave Maser";
            $datah['metatitle'] = "I am a slave in sri lanka, I Need a Master :: gaylanka.xyz";
            $data['posttype'] = "4";
        } elseif ($param == "CD") {
            $where = "category_user.categoryid = '5'";
            $data['title'] = "CD";
            $datah['metatitle'] = "I am a Crossdresser, I Need a partner make me a girl :: gaylanka.xyz";
            $data['posttype'] = "5";
        } else {
            $where = "";
            $data['title'] = "FEATURED POST";
            $data['posttype'] = "0";
        }
        $data['loadmore'] = 1;


        $limit = " 100";
        $data['trending'] = $this->user_model->get_trending_post();
        $data['all_post'] = $this->user_model->get_all_post($where, $limit, 0);
        $data['category'] = $this->user_model->get_all_category_withcount();


        $data1['trending'] = $this->user_model->get_trending_post();
        $data2['category'] = $data['category'];

        $this->load->view('common/header', $datah);
        $this->load->view('common/sidebar-left', $data1);
        $this->load->view('home/index', $data);
        $this->load->view('common/sidebar-right');
        $this->load->view('common/footer', $data2);
    }

    function saveComment() {
        $id = $this->input->post("id");
        $comment = $this->input->post("comment");
        if (trim($id) != "" && trim($comment) != "") {
            $this->user_model->saveComment(array('postid' => $id, 'comment' => $comment, 'created_at' => date('Y-m-d H:i:s', now())));
        }
        $data_rt = array('msg' => "Done", 'status' => 1);
        echo json_encode($data_rt);
    }

    function searchplace() {
        $where = $this->uri->segment(2);
        $datah = array();

        $data['title'] = "Gay in near " . $where;
        $data['posttype'] = "0";
        $data['loadmore'] = 0;

        $limit = " 100";
        $data['trending'] = $this->user_model->get_trending_post();
        $data['all_post'] = $this->user_model->getsearchplace($where, $limit, 0);
        $data['category'] = $this->user_model->get_all_category_withcount();


        $data1['trending'] = $this->user_model->get_trending_post();
        $data2['category'] = $data['category'];

        $this->load->view('common/header', $datah);
        $this->load->view('common/sidebar-left', $data1);
        $this->load->view('home/index', $data);
        $this->load->view('common/sidebar-right');
        $this->load->view('common/footer', $data2);
    }

    function chat() {
        return false;
        $datah = array();
        $data['title'] = "Gay chat in srilanka";
        $data['posttype'] = "0";
        $data['loadmore'] = 0;

        $data['trending'] = $this->user_model->get_trending_post();
        $data['category'] = $this->user_model->get_all_category_withcount();


        $data1['trending'] = $this->user_model->get_trending_post();
        $data2['category'] = $data['category'];

        $this->load->view('common/header', $datah);
        $this->load->view('common/sidebar-left', $data1);
        $this->load->view('home/chat', $data);
        $this->load->view('common/sidebar-right');
        $this->load->view('common/footer', $data2);
    }

    function notfound() {
        $where = "";
        $data['trending'] = $this->user_model->get_trending_post();
        $data['all_post'] = $this->user_model->get_all_post($where, 100, 0);
        $data['category'] = $this->user_model->get_all_category_withcount();
        $data['title'] = "Latest Gay profiles in Sri Lanka";
        $data['metatitle'] = "find gay men in sri lanka Home :: gaylanka.xyz";
        $data['posttype'] = "0";
        $data['loadmore'] = 1;

        $data1['trending'] = $this->user_model->get_trending_post();
        $data2['category'] = $data['category'];

        $data['meta_desc'] = "You can see Sri Lankan Gay profile here, Here show all Category. Our main categories are Gay Top male, Gay Bottom male, Gay master,Gay Slave, 50/50 gay and gay vers."
                . "You can see the profile and comment here, and get gay phone number and email here. after you can contact them and meet, get gay friendship.";
        $data['meta_keywords'] = array("Gay Top", "Gay Bottom", "Gay 50/50", "Gay CD - cross dresser", "Gay transgender", "Meet gay in colombo");
        $data['error'] = 404; 
                
        $this->load->view('common/header');
        $this->load->view('common/sidebar-left', $data1);
        $this->load->view('home/index', $data);
        $this->load->view('common/sidebar-right');
        $this->load->view('common/footer', $data2);
    }

}
