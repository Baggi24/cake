<h3>Add Category:</h3>
<?= $this->element('sidebar'); ?>
<div class="content">
    <?= $this->Form->create($category); ?>
    <?= $this->Form->input('title', ['required' => false, 'label' => 'Name']); ?>
    <?= $this->Form->button(__('Add category')); ?>
    <?= $this->Form->end(); ?>
</div>