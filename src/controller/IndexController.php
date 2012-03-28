<?php
class IndexController extends CController {
	public $layout = 'layout';
	
	public function actionIndex() {
		$loginForm = new UserForm('login');
		$this->render('run', array('model' => $loginForm));
	}
	
	public function actionDoLogin() {
		$loginForm = new UserForm('login');
		$loginForm->attributes = $_POST['UserForm'];
		$result = $loginForm->validate();
		if ($result === false || !$user = User::model()->findByAttributes(array('username' => $loginForm->username))) 
			$this->render('run', array('model' => $loginForm));
		else {
			$this->render('run', array('user' => $user));
		}
	}
	
	public function actionRegister() {
		$registerForm = new UserForm('register');
		$this->render('register', array('model' => $registerForm));
	}
	
	public function actionDoRegister() {
		$this->onRegister = array($this, 'hello');
		$registerForm = new UserForm('register');
		$registerForm->attributes = $_POST['UserForm'];
		$result = $registerForm->validate();
		if ($result === false || $user = User::model()->findByAttributes(array('username' => $registerForm->username))) 
			$this->render('register', array('model' => $registerForm));
		else {
			$this->onRegister(new CEvent($this));
			$model = new User();
			$model->username = $registerForm->username;
			$model->password = $registerForm->password;
			$model->save();
			$this->render('run', array('user' => $model));
		}
	}
	
	public function onRegister($event) {
		$this->raiseEvent('onRegister', $event);
	}
	
	public function actionView($id) {
		$user = User::model()->findByPk($id);
		$this->render('view', array('model' => $user));
	}
	
	public function hello($event) {
		echo '注册时候的事情 ';
	}
	
	public function filters() {
		return array(
			'global + index,register'
		);
	}
	
	public function filterGlobal($filterChain) {
		echo 'this is a global filter';
		$filterChain->run();
	}
}

?>