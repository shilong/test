<?php

class UserForm extends CFormModel {
	public $username;
	public $password;
	
	public function rules() {
		return array(
			array(
				'username, password', 
				'required',
				'on' => array('login', 'register')),
			array(
				'password', 
				'isPasswordSafe',
				'on' => array('register'))
		);
	}
	
	public function isPasswordSafe() {
		if (!preg_match('/[a-z]+/i', $this->password)) {
			$this->addError('password', '必须包含小写字母');
		}
		return true;
	}
	
	public function attributeLabels() {
		return array(
			'username' => '用户名',
			'password' => '密码'
		);
	}
}

?>