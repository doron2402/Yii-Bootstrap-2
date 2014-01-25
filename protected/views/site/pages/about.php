<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>
<hr>
<?php 
$Myself = '
	<div class="well">
	<h3>Little bit about myself...</h3>
	<p>
    Lorem ipsum dolor sit <a href="#" rel="tooltip" title="First tooltip">amet</a>,
    consectetur adipiscing elit.
    Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
    Pellentesque at tellus urna.
    Ut congue, <a href="#" rel="tooltip" title="Another tooltip">nibh eu</a> interdum commodo,
    ligula urna consequat tortor, at vehicula tellus est a orci.
    Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
    Sed odio dui, pretium eu pellentesque ac,
    <a href="#" rel="tooltip" title="Yet another tooltip">tempor</a> sed sem.</p>
	</div>';
$Point = '<div class="well">
	<p>Lorem ipsum dolor sit <a href="#" rel="tooltip" title="First tooltip">amet</a>,
    consectetur adipiscing elit.
    Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
    Pellentesque at tellus urna.
    Ut congue, <a href="#" rel="tooltip" title="Another tooltip">nibh eu</a> interdum commodo,
    ligula urna consequat tortor, at vehicula tellus est a orci.
    Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
    Sed odio dui, pretium eu pellentesque ac,
    <a href="#" rel="tooltip" title="Yet another tooltip">tempor</a> sed sem.
</p></div>';
$Experience = '<div class="well">
				<h3>Experience</h3>
				</div>';
$this->widget('bootstrap.widgets.TbTabs', array(
    'type'=>'tabs',
    'placement'=>'below', // 'above', 'right', 'below' or 'left'
    'tabs'=>array(
        array('label'=>'Myself', 'content'=>$Myself, 'active'=>true),
        array('label'=>'Point of View', 'content'=>$Point),
        array('label'=>'Experience&Education', 'content'=>$Experience),
    ),
)); ?>
