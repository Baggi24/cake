<h1>Add Post:</h1>
<div class="panel">
<?= $this->Form->create(); ?>
<?= $this->Form->input('title'); ?>
<?= $this->Form->input('body', ['rows' => '3']); ?>
<?= $this->Form->button(__('Add post')); ?>
<?= $this->Form->end(); ?>
</div>