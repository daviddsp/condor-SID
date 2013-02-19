<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h3>Bienvenidos a <i><?php echo CHtml::encode(Yii::app()->name); ?></i> tu Web tutorial de PostgreSQL</h3>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<nav>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>
</nav>
<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
