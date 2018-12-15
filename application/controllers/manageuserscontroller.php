<?php

class ManageUsersController extends Controller{

	public $userObject;

	protected $access = "1";

   	public function users($uID){
      $this->userObject = new Users();
			$user = $this->userObject->getUser($uID);
	  	$this->set('user',$user);
   	}

	public function index(){
    $this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'Manage Users');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
	}

	public function delete(){
		$data = array('uID'=>$_POST['uID']);
		$this->userObject = new Users();
		$result = $this->userObject->deleteUser($data);

		$this->set('message', $result);
	}

	public function update(){
		$data = array('uID'=>$_POST['uID']);
		$this->userObject = new Users();
		$result = $this->userObject->updateUser($data);

		$this->set('message',$result);
	}

}

?>
