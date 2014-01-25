<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<!-- Jquery -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<div id="mainmenu">
	<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Home','url'=>array('/site/index')),
        array('label'=>'About Us', 'url'=>array('/site/page', 'view'=>'about')),
        array('label'=>'Articales', 'url'=>array('/site/clients')),
        array('label'=>'Contact Us', 'url'=>array('/site/contact')),
        array('label'=>'Site Map', 'url'=>array('/site/Map')),
    ),
)); ?>
	</div><!-- mainmenu -->
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<div id="MainSeachBox">
		<div class="btn-toolbar-main">
			<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
				'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
				'buttons'=>array(
					array('label'=>'Search By Work', 'url'=>'#'),
					array('items'=>array(
						array('label'=>'Additions & Remodels', 'url'=>'#'),
						array('label'=>'Energy Efficiency', 'url'=>'#'),
						array('label'=>'Kitchen Remodeling', 'url'=>'#'),
						'---',
						array('label'=>'Other Service', 'url'=>'#'),
					)),
				),
			)); ?>
		</div>	
		<input class="typeahead span3" style="" type="text" placeholder="Or Search Free..." />
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=>'button',
    'type'=>'primary',
    'label'=>'Search',
    'loadingText'=>'loading...',
    'htmlOptions'=>array('id'=>'SearchbuttonStateful'),
)); ?>
		</div>
	</div><!-- header -->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by SafeWayHomeImprovment.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
