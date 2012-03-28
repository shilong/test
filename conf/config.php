<?php
/**
 * @author Shi Long <long.shi@alibaba-inc.com> 2010-11-2
 * @link http://www.phpwind.com
 * @copyright Copyright &copy; 2003-2010 phpwind.com
 * @license
 */
return array(
	'basePath' => 'src', /* 即application命名空间 */
	'controllerPath' => 'src/controller', /*controller目录，后缀不可配置*/
	'viewPath' => 'template', /*模板目录，目录下每个controller一个文件夹*/
	'layoutPath' => 'template/index', /*布局文件目录，默认为viewPath/layouts*/
	'defaultController' => 'index', /*CWebApplication的属性*/
	
	'import' => array('application.model.*'), /*通过CModule魔术方法设置，autoload src/model下的类*/
	
	'components' => array( /*通过CModule魔术方法设置*/
		'db' => array(     /*与CApplication::registerCoreComponents中的配置合并*/
			'connectionString' => 'mysql:host=localhost;dbname=test', /*CDbConnection中public属性*/
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '123',
			'charset' => 'utf8',
		),
		'urlManager' => array(
			'urlFormat' => 'path', /*魔术方法设置，get为_GET,path为///*/
			'rules' => array(      /*get时候通过url中r参数获取的串来解析，path则是解析url*/
				'index/<id:\d+>' => 'index/view',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			)
		)
	),
	/*系统级别的变量，通过Yii::app()->params['paramName']*/
	'params' => array(
		'title' => '登录实例'
	)
);