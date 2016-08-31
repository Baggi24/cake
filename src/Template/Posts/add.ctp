<h1>Add Post:</h1>
<div class="panel">
<?= $this->Form->create($post); ?>
<?= $this->Form->input('title', ['required' => false]); ?>
<?= $this->Form->input('body', ['rows' => '3', 'required' => false]); ?>
<?= $this->Form->button(__('Add post')); ?>
<?= $this->Form->end(); ?>
</div>