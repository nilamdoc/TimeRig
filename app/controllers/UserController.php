<?php
namespace app\controllers;
use app\models\Users;


class UserController extends \lithium\action\Controller {

	public function signup() {	
		$user = Users::create();
		if(($this->request->data) && $user->save($this->request->data)) {	
		$this->redirect('User::index');	
	}
	return compact(array('user'));
	}

	public function index() {
		$users = Users::all();
		return compact('users');
	}
}
?>