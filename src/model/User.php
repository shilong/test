<?php
class User extends CActiveRecord {
	
	public function tableName() {
		return 'user';
	}
	
	public static function model() {
		return parent::model(__CLASS__);
	}
}

?>