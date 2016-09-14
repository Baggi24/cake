<div class="actions">
    <?php if($loggedUser): ?>
        <p>Hello, <?= $loggedUser['username']; ?></p>
        <p><?= $this->Html->link('Logout', '/users/logout'); ?></p>
    <?php else:?>
        <p><?= $this->Html->link('Login', '/users/login'); ?></p>
    <?php endif;?>
    <ul class="my_actions">
        <li><?= $this->Html->link('Home','/'); ?></li>
        <li><?= $this->Html->link('Add post',['controller' => 'posts', 'action' => 'add']); ?></li>
        <li><?= $this->Html->link('All categories',['controller' => 'categories', 'action' => 'index']); ?></li>
        <li><?= $this->Html->link('New categories','/categories/add'); ?></li>
        <li><?= $this->Html->link('All users',['controller' => 'users', 'action' => 'index']); ?></li>
        <li><?= $this->Html->link('New users','/users/add'); ?></li>
    </ul>
</div>