<h3>User login</h3>
<?= $this->element('sidebar'); ?>
<div class="content">
    <?= $this->Form->create(); ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->input('username', ['required' => false]); ?>
        <?= $this->Form->input('password', ['required' => false]); ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end(); ?>
</div>