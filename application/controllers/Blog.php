<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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

    public function getsinglepost() {
        $id = $this->uri->segment(2);
        $data['details'] = $this->user_model->getsingleblog($id);
        $data['category'] = $this->user_model->get_all_category();
        $data['comment'] = $this->user_model->getgetsingleblogcomment($id);

        $data1['trending'] = $this->user_model->get_trending_post();
        $data2['category'] = $this->user_model->get_all_category_withcount();

        $this->load->view('common/header');
        $this->load->view('common/sidebar-left', $data1);
        $this->load->view('home/single', $data);
        $this->load->view('common/sidebar-right', $data2);
        $this->load->view('common/footer', $data2);
    }

}
