<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php //echo CHtml::encode(Yii::app()->name); ?>


<p>Slider</p>
<script type="text/javascript">

function MainSlider()
{
	$('#HeadLineSlider').fadeIn('slow');
	$('#HeadLineSlider').html('<h1>asdf</h1>');
	$('#HeadLineSlider').fadeIn('slow');
	$('#HeadLineSlider').html('<img src="images/Slider/1.png/>');
}
</script>
<div id="SliderMain">
	<div id="HeadLineSlider"></div>
	<div id="GallerySlider"></div>
</div>
<?php
/*
$GoogleMapKey = 'AIzaSyB9kTbo2Af6S_rXr8zdlCmisT0HKQuYYdE';
$this->widget('application.extensions.gmap.GMap', array(
    'id' => 'gmap',//id of the <div> container created
    'key' => $GoogleMapKey, //goole API key, should be obtained for each site,it's free
    'label' => 'some company', //text written in the text bubble
    'address' => array(
        'address' => '1600 Amphitheatre Pky',//address of the place
        'city' => 'Mountain View', //city
        'state' => 'CA'//state
        //'country' => 'USA' - country
        //'zip' => 'XXXXX' - zip or postal code
        )
));

?>
<h2>Map</h2>
<div id="gmap"></div>
<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=<?php echo $GoogleMapKey;?>" type="text/javascript"></script>
<script src="/assets/f71433f3/gmap.js" type="text/javascript"></script>
<script language="javascript">
var GMAP_DEF_LAT = 54.863963;
var GMAP_DEF_LNG = 1.73584;
var GMAP_DEF_ZOOM = 7;
var m = new GMap("gmap", "1600+Amphitheatre+Pky,+Mountain+View,+CA", "some company");
m.show();
</script>
<?php

*/

?>
<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

