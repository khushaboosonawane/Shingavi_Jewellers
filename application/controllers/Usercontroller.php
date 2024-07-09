<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Usercontroller extends CI_Controller{
    private function nav(){
        $this->load->view("user/nav");
    }
    private function footer(){
        $this->load->view("user/footer");
    }
    public function ov(string $filename="",$data=null){
        $this->nav();
        $this->load->view("user/".$filename,$data);
        $this->footer();
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
        $this->ov("bangales");
    }
    public function silver(){
       $this->ov("silver");
    }
    public function about(){
        $this->ov("about");
    }
    public function store(){
        $this->ov("store");
    }
    public function payal_jodwe_mohotsav(){
        $this->ov("payal_jodwe_mohotsav");
    }
    public function gift(){
        $this->ov("gift");
    }
    public function view_gold_details(){
        $this->ov("view_gold_details");
    }
    public function wishlist(){
        $this->ov("wishlist");
    }
    public function add_cart(){
        $this->ov("add_cart");
    }
    public function fingure_ring(){
        $this->ov("fingure_ring");
    }
    public function my_account(){
        $this->ov("my_account");
    }
    
}
?>