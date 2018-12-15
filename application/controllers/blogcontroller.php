<?php

class BlogController extends Controller{

	public $postObject;
	public $commentObject;
	public $categoryObject;


   	public function post($pID){
        $this->postObject = new Post();
				$post = $this->postObject->getPost($pID);
	  		$this->set('post',$post);


   	}

		public function category($cID){
			$this->postObject = new Post();
			$posts = $this->postObject->getAllPosts($cID);
			$this->set('title', 'Category');
			$this->set('posts',$posts);
		}

		public function comment($commentID){
			$this->postObject = new Comment();
			$comment = $this->postObject->getComment($commentID);
			$this->set('comment',$comment);
		}


	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}

	//public function addComment($commentID){
	//	$this->postObject = new Post();
	//	$this->getComment();
	//	$this->set('task', 'save');
//	}

//COMMENT STUFF




}

?>
