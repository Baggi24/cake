<?= $color; ?><br>
<?= $title . ' ' . $price; ?><br>

<?php foreach ($posts as $post) : ?>

        <h4><?= $posts['title']; ?></h4>

<?php endforeach; ?>