<?php

$this->breadcrumbs=array(
	'Компании',
);

//$this->menu=array(
//	array('label'=>'Create Company', 'url'=>array('create')),
//	array('label'=>'Manage Company', 'url'=>array('admin')),
//);
?>



<h1>Российские компании</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'ajaxUpdate'=>false
)); ?>
