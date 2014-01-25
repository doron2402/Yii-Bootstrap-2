<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Clients and Projects';
$this->breadcrumbs=array(
	'Clients and Projects',
);
?>
<h1>Clients and Projects</h1>

<table style="text-align:center;">
<tr>
	<td>
	<div class="span3">
    <a href="#" class="thumbnail" rel="tooltip" data-title="Tooltip">
        <img src="http://placehold.it/200x200" alt="">
	</a>
	</div>
	</td>
	<td><div class="span3">
    <a href="#" class="thumbnail" rel="tooltip" data-title="Tooltip">
        <img src="http://placehold.it/200x200" alt="">
    </a>
	</div>
	</td>
		<td><div class="span3">
		<a href="#" class="thumbnail" rel="tooltip" data-title="Tooltip">
			<img src="http://placehold.it/200x200" alt="">
		</a>
	</div>
	</td>
</tr>
<tr>
	<td>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Click me',
    'type'=>'danger',
    'htmlOptions'=>array('data-title'=>'A Title', 'data-content'=>'And here\'s some amazing content. It\'s very engaging. right?', 'rel'=>'popover'),
)); ?>
	</td>
	<td>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Click me',
    'type'=>'danger',
    'htmlOptions'=>array('data-title'=>'A Title', 'data-content'=>'And here\'s some amazing content. It\'s very engaging. right?', 'rel'=>'popover'),
)); ?>
	</td>
	<td>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Click me',
    'type'=>'danger',
    'htmlOptions'=>array('data-title'=>'A Title', 'data-content'=>'And here\'s some amazing content. It\'s very engaging. right?', 'rel'=>'popover'),
)); ?>
	</td>
</tr>
</table>