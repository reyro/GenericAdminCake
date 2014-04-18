<div class="admModules view">
<h2><?php echo __('Adm Module'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($admModule['AdmModule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($admModule['AdmModule']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Initials'); ?></dt>
		<dd>
			<?php echo h($admModule['AdmModule']['initials']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($admModule['AdmModule']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lc State'); ?></dt>
		<dd>
			<?php echo h($admModule['AdmModule']['lc_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lc Transaction'); ?></dt>
		<dd>
			<?php echo h($admModule['AdmModule']['lc_transaction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo h($admModule['AdmModule']['creator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($admModule['AdmModule']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifier'); ?></dt>
		<dd>
			<?php echo h($admModule['AdmModule']['modifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($admModule['AdmModule']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Adm Module'), array('action' => 'edit', $admModule['AdmModule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Adm Module'), array('action' => 'delete', $admModule['AdmModule']['id']), null, __('Are you sure you want to delete # %s?', $admModule['AdmModule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Adm Modules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adm Module'), array('action' => 'add')); ?> </li>
	</ul>
</div>
