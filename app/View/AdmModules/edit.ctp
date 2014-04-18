<div class="admModules form">
<?php echo $this->Form->create('AdmModule'); ?>
	<fieldset>
		<legend><?php echo __('Edit Adm Module'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('initials');
		echo $this->Form->input('description');
		echo $this->Form->input('lc_state');
		echo $this->Form->input('lc_transaction');
		echo $this->Form->input('creator');
		echo $this->Form->input('date_created');
		echo $this->Form->input('modifier');
		echo $this->Form->input('date_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AdmModule.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AdmModule.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Adm Modules'), array('action' => 'index')); ?></li>
	</ul>
</div>
