<h3>User registration</h3>
<?= $this->element('sidebar'); ?>
<div class="content">
    <?= $this->Form->create($user); ?>
    <?= $this->Form->input('username', ['required' => false]); ?>
    <?= $this->Form->input('password', ['required' => false]); ?>
    <?= $this->Form->select('role',[
        'options' => ['user' => 'User', 'admin' => 'Admin']]); ?>
    <?= $this->Form->button(__('Register')); ?>
    <?= $this->Form->end(); ?>
</div>