<h3>Categories:</h3>
<?= $this->element('sidebar'); ?>
<div class="content">
    <table class="table table-striped">
        <?= $this->Html->tableHeaders([
            'Id','Title','Created','Modified','Action'
        ]); ?>
        <?php foreach ($categories as $category) : ?>
            <?= $this->Html->tableCells([
                [
                    $category['id'],
                    $this->Html->link($category['title'], ['action' => 'view/', $category['id']]),
                    $category['created'],
                    $category['modified'],
                    $this->Html->link('Edit', ['action' => 'edit/', $category['id']])  . ' | ' .
                    $this->Form->postLink('Delete', ['action' => 'delete/', $category['id']], ['confirm' => 'Do you really want to delete category #' . $category['id'] . '?' ])
                ]
            ]); ?>
        <?php endforeach; ?>
    </table>
</div>
