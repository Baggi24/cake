<h3>Users:</h3>
<?= $this->element('sidebar'); ?>
<div class="content">
        <table class="table table-striped">
            <?= $this->Html->tableHeaders([
                'Id','Login','Password','Role'
            ]); ?>
            <?php foreach ($users as $user) : ?>
                <?= $this->Html->tableCells([
                    [
                        $user['id'],
                        h($user['username']),
                        $user['password'],
                        $user['role']
                    ]
                ]); ?>
            <?php endforeach; ?>
        </table>
</div>
