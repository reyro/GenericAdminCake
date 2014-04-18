<div class="admModules index">
	<h2><?php echo __('Adm Modules'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('initials'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('lc_state'); ?></th>
			<th><?php echo $this->Paginator->sort('lc_transaction'); ?></th>
			<th><?php echo $this->Paginator->sort('creator'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('modifier'); ?></th>
			<th><?php echo $this->Paginator->sort('date_modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($admModules as $admModule): ?>
	<tr>
		<td><?php echo h($admModule['AdmModule']['id']); ?>&nbsp;</td>
		<td><?php echo h($admModule['AdmModule']['name']); ?>&nbsp;</td>
		<td><?php echo h($admModule['AdmModule']['initials']); ?>&nbsp;</td>
		<td><?php echo h($admModule['AdmModule']['description']); ?>&nbsp;</td>
		<td><?php echo h($admModule['AdmModule']['lc_state']); ?>&nbsp;</td>
		<td><?php echo h($admModule['AdmModule']['lc_transaction']); ?>&nbsp;</td>
		<td><?php echo h($admModule['AdmModule']['creator']); ?>&nbsp;</td>
		<td><?php echo h($admModule['AdmModule']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($admModule['AdmModule']['modifier']); ?>&nbsp;</td>
		<td><?php echo h($admModule['AdmModule']['date_modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $admModule['AdmModule']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $admModule['AdmModule']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $admModule['AdmModule']['id']), null, __('Are you sure you want to delete # %s?', $admModule['AdmModule']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Adm Module'), array('action' => 'add')); ?></li>
	</ul>
</div>
