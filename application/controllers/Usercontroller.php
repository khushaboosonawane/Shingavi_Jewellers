<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Usercontroller extends CI_Controller{
    private function nav(){
        $this->load->view("user/nav");
    }
    private function footer(){
        $this->load->view("user/footer");
    }
    public function index(){
        $this->nav();
        $this->load->view("user/index");
        $this->footer();
    }
    public function gold(){
        $this->nav();
        $this->load->view("user/gold");
        $this->footer();
    }
    public function bangales(){
        $this->nav();
        $this->load->view("user/bangales");
        $this->footer();
    }
    public function silver(){
        $this->nav();
        $this->load->view("user/silver");
        $this->footer();
    }
    public function about(){
        $this->nav();
        $this->load->view("user/about");
        $this->footer();
    }
}
?>