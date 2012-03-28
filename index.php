<?php
/**
 * @author Shi Long <long.shi@alibaba-inc.com> 2010-11-2
 * @link http://www.phpwind.com
 * @copyright Copyright &copy; 2003-2010 phpwind.com
 * @license
 */
define('YII_DEBUG', true);
require_once '../../framework/yii.php';

Yii::createWebApplication('conf/config.php')->run();