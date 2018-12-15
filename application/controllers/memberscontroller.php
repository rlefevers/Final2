<?php

class MembersController extends Controller{

	public $userObject;

   	public function users($uID){
      $this->userObject = new Users();
			$user = $this->userObject->getUser($uID);
	  	$this->set('user',$user);
   	}

	public function index(){
    $this->userObject = new Users();
			$users = $this->userObject->getAllUsers();
			$this->set('title', 'The Members View');
			$this->set('users',$users);
			$this->set('first_name',$first_name);
			$this->set('last_name',$last_name);
			$this->set('email',$email);
	}

	public function profile(){
		$this->userObject = new Users();
			$users = $this->userObject->getAllUsers();
			$this->set('title', 'The Members View');
			$this->set('users',$users);
			$this->set('first_name',$first_name);
			$this->set('last_name',$last_name);
			$this->set('email',$email);
	}

	public function edit($uID){
		$this->userObject = new Users();
		$post = $this->userObject->getUser($uID);

		$this->set('uID', $post['uID']);
		$this->set('first_name', $post['first_name']);
		$this->set('last_name', $post['last_name']);
		$this->set('email', $post['email']);
		$this->set('password', $post['password']);
		$this->set('task', 'update');
	}

	public function update(){
		$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$_POST['password'],'uID'=>$_POST['uID']);

		$this->userObject = new User();

		$result = $this->userObject->updateUserInfo($data);
		$outcome = $this->userObject->getAllUsers();
		$this->set('users',$outcome);
		$this->set('message', $result);
		$this->set('task', 'update');
	}

}

?>
