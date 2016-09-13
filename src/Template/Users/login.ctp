<h3>User login</h3>
<?= $this->element('sidebar'); ?>
<div class="content">
    <?= $this->Form->create(); ?>
    <?= $this->Form->input('username', ['required' => false]); ?>
    <?= $this->Form->input('password', ['required' => false]); ?>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end(); ?>
</div>