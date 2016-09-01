<h3>Edit Post number <?= $post['id']; ?></h3>
<?= $this->element('sidebar'); ?>
<div class="content">
    <?= $this->Form->create($post); ?>
    <?= $this->Form->input('category_id', ['label' => 'Choose category']); ?>
    <?= $this->Form->input('title', ['required' => false, 'label' => 'Name']); ?>
    <?= $this->Form->input('body', ['rows' => '3', 'required' => false, 'label' => 'Text']); ?>
    <?= $this->Form->button(__('Update post')); ?>
    <?= $this->Form->end(); ?>
</div>