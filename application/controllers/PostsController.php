<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostsController extends CI_Controller {


	// public function __construct(){
    //     parent:: __construct();
          
    // }
	public function index(){

        $data['posts'] = $this->post_model->get_posts();
        // print_r( $data['posts']);
        $this->load->view('incidents/posts', $data);

    }
    public function view($slug = NULL){

        $data['post'] = $this->post_model->get_posts($slug);

        if(empty($data['post'])){
            show_404();
        }

        $data['title'] = $data['post']['title'];
        $this->load->view('incidents/incPosts', $data);

    }
    public function create(){

        $this->post_model->create_post();
        redirect('PostsController');

    }
    public function delete($id){

        $this->post_model->delete_post($id);
        redirect('PostsController');

    }
    public function edit($slug){

        
        $data['post'] = $this->post_model->get_posts($slug);

        if(empty($data['post'])){
            show_404();
        }

        // $data['title'] = $data['post']['title'];
        $this->load->view('incidents/editPosts', $data);


    }
    public function update(){

        $this->post_model->update_post();
        redirect('PostsController');
    }

}
 