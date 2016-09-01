<div class="actions">
    <ul class="my_actions">
        <li><?= $this->Html->link('Home','/'); ?></li>
        <li><?= $this->Html->link('Add post',['controller' => 'posts', 'action' => 'add']); ?></li>
        <li><?= $this->Html->link('All categories',['controller' => 'categories', 'action' => 'index']); ?></li>
        <li><?= $this->Html->link('New categories','/categories/add'); ?></li>
    </ul>
</div>