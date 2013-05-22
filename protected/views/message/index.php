<?php
/* @var $this MessageController */

$this->breadcrumbs=array(
	'Message',
);
?>
<h1>Welcome to the new site</h1>

<p><b>Controller name:</b><?php echo $this->id;?></p>
<p><b>action name:</b><?php echo $this->action->id;?></p> 

<h3><a href="http://test.bane.com/index.php?r=message/exit">Go to the exit page</a></h3>

<h3><?php echo CHtml::link('Click Here', array('message/exit'));?></h3>

