<?php

class HomeController extends BaseController
{
    function index() {
       $lastPosts = $this->model->getLastPosts(6);
       $this->posts = $lastPosts;

    }
	
	public function view(int $id)
    {
       $post = $this->model->getPostById($id);
       $this->post = $post;
       if (!$post)
       {
           $this->addErrorMessage("No such post!");
           $this->redirect("");
       }
    }
}
