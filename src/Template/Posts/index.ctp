<?//= $color; ?><!--<br>-->
<?//= $title . ' ' . $price; ?><!--<br>-->
<h3>Posts:</h3>
<div class="actions">
    <ul class="my_actions">
        <li><?= $this->Html->link('Home','/'); ?></li>
        <li><?= $this->Html->link('Add post',['action' => 'add']); ?></li>
        <li><?= $this->Html->link('All categories',['controller' => 'categories', 'action' => 'index']); ?></li>
        <li><?= $this->Html->link('New categories','/categories/add'); ?></li>
    </ul>
</div>
<div class="content">
    <table class="table table-striped">
        <?= $this->Html->tableHeaders([
            'Id','Title','Body','Action'
        ]); ?>
        <?php foreach ($posts as $post) : ?>
            <?= $this->Html->tableCells([
                [
                    $post['id'],
                    $this->Html->link($post['title'], ['action' => 'view/', $post['id']]),
                    $post['body'],
                    $this->Html->link('Edit', ['action' => 'edit/', $post['id']])  . ' | ' .
                    $this->Form->postLink('Delete', ['action' => 'delete/', $post['id']], ['confirm' => 'Do you really want to delete?'])
                ]
            ]); ?>
        <?php endforeach; ?>
    </table>
</div>
