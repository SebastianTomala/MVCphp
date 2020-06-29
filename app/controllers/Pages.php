<?php

class Pages extends Controller {

    public function __construct() {
        
    }

    public function index() {
        if(isLoggedIn()) {
            redirect('posts');
        }
        $data = [
            'title' => 'Welcome',
            'description' => 'Simple network'
        ];
        $this->view('pages/index', $data);
    }
    public function about() {
        $data = [
            'title' => 'About',
            'description' => 'Simple network'
        ];
        $this->view('pages/about', $data);
    }
    public function contact() {
        $data = [
            'title' => 'Contact',
            'description' => 'Contact form'
        ];
        $this->view('pages/contact', $data);
    }
}