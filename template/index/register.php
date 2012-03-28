<?php 
/* @var $form CActiveForm */
$form = $this->beginWidget('CActiveForm', array('action' => Yii::app()->createUrl('/index/doRegister'), 'method' => 'post'));
?>
<?php echo $form->errorSummary($model, '注册的错误！！！')?>
<div class="main_wrap">
		<div class="main">
			<div class="login">
				<dl>
					<dt><?php echo $form->labelEx($model, 'username');?></dt>
					<dd><?php echo $form->textField($model, 'username', array('class' => 'input'))?></dd>
				</dl>
				<dl>
					<dt><?php echo $form->labelEx($model, 'password');?></dt>
					<dd><?php echo $form->passwordField($model, 'password', array('class' => 'input'))?></dd>
				</dl>
				<dl>
					<dd><?php echo CHtml::submitButton('注册')?></dd>
					
				</dl>
			</div>
		</div>
	</div>
<?php $this->endWidget();?>