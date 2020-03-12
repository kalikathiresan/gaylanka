<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lankalove extends CI_Controller {

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
        $start = $_GET["start"];
        $end = $_GET["end"];

        for ($x = $start; $x <= $end; $x++) {
            $url = 'http://www.lankalove.com/gay/info.cgi?id=' . $x;

            $content = file_get_contents($url);
            $first_step = explode('<body bgcolor="#DDDDDD">', $content);
            $second_step = explode("</body>", $first_step[1]);

            $mydata = $second_step[0];
            $mydata = preg_replace('~>\s+<~', '><', $mydata);


            $remove = 'Advice from Admin:';
            $mydata = str_replace($remove, "", $mydata);

            $remove = 'Please Do Not Reply';
            $mydata = str_replace($remove, "", $mydata);

            $remove = ', if this profile contains Phone Numbers, ';
            $mydata = str_replace($remove, "", $mydata);

            $remove = 'Addresses or Vulgar Photos.&nbsp; This could be a fake profile.';
            $mydata = str_replace($remove, "", $mydata);


            $remove = 'Please <a href="http://www.lankalove.com/report.htm">Report to Abuse</a></b></font><font face="Arial, Verdana" Size="2"><font color="#3366FF"><br>';
            $mydata = str_replace($remove, "", $mydata);

            $mydata= preg_replace('#(<[a-z ]*)(src=("|\')(.*?)("|\'))([a-z ]*>)#', '\\1\\6', $mydata);
            
            $data = array("title"=>"Love - $x","name"=>"Love - $x","lanka"=>$x,"message"=>$mydata);
            $this->user_model->savelankapost($data);
        }
    }

}
