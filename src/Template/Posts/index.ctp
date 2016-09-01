<?//= $color; ?><!--<br>-->
<?//= $title . ' ' . $price; ?><!--<br>-->
<h3>Posts:</h3>
<?= $this->element('sidebar'); ?>
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
                    $this->Form->postLink('Delete', ['action' => 'delete/', $post['id']], ['confirm' => 'Do you really want to delete post #' . $post['id'] . '?' ])
                ]
            ]); ?>
        <?php endforeach; ?>
    </table>
</div>
