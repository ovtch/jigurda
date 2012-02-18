<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'firm-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sn'); ?>
		<?php echo $form->textField($model,'sn',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fn'); ?>
		<?php echo $form->textField($model,'fn',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'fn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'region'); ?>
		<?php echo $form->textField($model,'region'); ?>
		<?php echo $form->error($model,'region'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postal'); ?>
		<?php echo $form->textField($model,'postal',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'postal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inn'); ?>
		<?php echo $form->textField($model,'inn',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'inn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ogrn'); ?>
		<?php echo $form->textField($model,'ogrn',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'ogrn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'okpo'); ?>
		<?php echo $form->textField($model,'okpo',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'okpo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adress'); ?>
		<?php echo $form->textField($model,'adress',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'adress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'okved'); ?>
		<?php echo $form->textArea($model,'okved',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'okved'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oid'); ?>
		<?php echo $form->textField($model,'oid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'oid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits'); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st'); ?>
		<?php echo $form->textField($model,'st'); ?>
		<?php echo $form->error($model,'st'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alias2'); ?>
		<?php echo $form->textField($model,'alias2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alias2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alias3'); ?>
		<?php echo $form->textField($model,'alias3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alias3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->