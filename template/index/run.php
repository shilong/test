<?php if (!isset($user) || empty($user)) {?>
<?php 
/* @var $form CActiveForm */
$form = $this->beginWidget('CActiveForm', array('action' => Yii::app()->createUrl('/index/doLogin'), 'method' => 'post'));
?>
<?php echo $form->errorSummary($model, '登录有错误！！！');?>
<div class="main_wrap">
		<div class="main">
			<div class="login">
				<dl>
					<dt><?php echo $form->labelEx($model, 'username');?></dt>
					<dd><?php echo $form->textField($model, 'username', array('class' => 'input'))?></dd>
				</dl>
				<dl>
					<dt><?php echo $form->labelEx($model, 'password');?></dt>
					<dd><?php echo $form->passwordField($model, 'password', array('class' => 'input'));?></dd>
				</dl>
				<dl>
					<dd><?php echo CHtml::submitButton('登陆');?></dd>
					<dd><?php echo CHtml::link('注册', Yii::app()->createUrl('index/register'));?></dd>
				</dl>
			</div>
		</div>
	</div>
<?php $this->endWidget();?>
<?php } else {?>
hello, 
<?php echo CHtml::link($user->username, Yii::app()->createUrl('index/'.$user->userid));}?>