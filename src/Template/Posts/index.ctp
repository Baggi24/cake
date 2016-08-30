<?//= $color; ?><!--<br>-->
<?//= $title . ' ' . $price; ?><!--<br>-->
        <table class="table table-striped">
                <?= $this->Html->tableHeaders([
                    'Id','Title','Body'
                ]); ?>
                <?php foreach ($posts as $post) : ?>
                <?= $this->Html->tableCells([
                    [$post['id'], $this->Html->link($post['title'], ['action' => 'view/', $post['id']]), $post['body']]
                ]); ?>
                <?php endforeach; ?>
        </table>
