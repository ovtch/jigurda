<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('okr')); ?>:</b>
	<?php echo CHtml::encode($data->okr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obl')); ?>:</b>
	<?php echo CHtml::encode($data->obl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg')); ?>:</b>
	<?php echo CHtml::encode($data->reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city1')); ?>:</b>
	<?php echo CHtml::encode($data->city1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city2')); ?>:</b>
	<?php echo CHtml::encode($data->city2); ?>
	<br />


</div>