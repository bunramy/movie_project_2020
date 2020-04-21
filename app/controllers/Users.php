<?php
    class Users extends Controller{
        public function __construct() {
            //$this->index();
        }

        public function index(){
            $this->view('users/index', ['title' => 'welcome']);
        }

        public function about() {
            $this->view('users/about');
        }
    }

?>