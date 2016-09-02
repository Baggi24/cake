<?php // echo $this->assign('title', 'This is my title') ?>
<h3>Add Post:</h3>
<?= $this->element('sidebar'); ?>
<div class="content">
    <?= $this->Form->create($post); ?>
    <?= $this->Form->input('category_id', ['label' => 'Choose category']); ?>
    <?= $this->Form->input('title', ['required' => false, 'label' => 'Name']); ?>
    <?= $this->Form->input('body', ['rows' => '3', 'required' => false, 'label' => 'Text']); ?>
    <?= $this->Form->button(__('Add post')); ?>
    <?= $this->Form->end(); ?>
</div>