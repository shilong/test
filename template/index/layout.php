<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>html5</title>
<link href="<?php echo Yii::app()->request->baseUrl?>/template/images/style.css" rel="stylesheet" />
</head>
<body>
	<div class="head_wrap">
		<div class="head">
			<img src="<?php echo Yii::app()->request->baseUrl?>/template/images/logo.png">
		</div>
	</div>
	<?php echo $content;?>
</body>
</html>