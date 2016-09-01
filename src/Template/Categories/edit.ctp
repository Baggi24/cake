<h3>Edit Category number <?= $category['id']; ?></h3>
<?= $this->element('sidebar'); ?>
<div class="content">
    <?= $this->Form->create($category); ?>
    <?= $this->Form->input('title', ['required' => false, 'label' => 'Name']); ?>
    <?= $this->Form->button(__('Update category')); ?>
    <?= $this->Form->end(); ?>
</div>