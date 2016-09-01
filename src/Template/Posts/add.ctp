<h1>Add Post:</h1>
<div class="actions">
    <ul class="my_actions">
        <li><?= $this->Html->link('Home','/'); ?></li>
        <li><?= $this->Html->link('Add post',['action' => 'add']); ?></li>
        <li><?= $this->Html->link('All categories',['controller' => 'categories', 'action' => 'index']); ?></li>
        <li><?= $this->Html->link('New categories','/categories/add'); ?></li>
    </ul>
</div>
<div class="content">
    <?= $this->Form->create($post); ?>
    <?= $this->Form->input('title', ['required' => false]); ?>
    <?= $this->Form->input('body', ['rows' => '3', 'required' => false]); ?>
    <?= $this->Form->button(__('Add post')); ?>
    <?= $this->Form->end(); ?>
</div>