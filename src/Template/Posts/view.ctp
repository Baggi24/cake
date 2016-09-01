<h3>View for post number <?= $post['id']; ?> </h3>
<?= $this->element('sidebar'); ?>
<div class="content">
    <h1><?= $post['title']; ?></h1><br>
    <p><?= $post['body']; ?></p>
</div>