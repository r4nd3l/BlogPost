<?php
  class Pages extends Controller{
    public function __construct(){
    }

    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
        'title' => 'SharePosts',
        'description' => 'Simple social network built on the DevCorner PHP framework'
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }
    // fly
    public function dbready(){
      $data = [
        'title' => 'Database Ready',
        'description' => 'Database setup succesful'
      ];

      $this->view('pages/db_ready', $data);
    }
  }
