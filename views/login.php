<h1>Login</h1>

<?php $form = app\core\form\Form::begin('', 'post') ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($model, 'lastName') ?>
    </div>
    <div class="col">
        <?php echo $form->field($model, 'firstName') ?>
    </div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<!-- <?php echo $form->field($model, 'confirmPassword')->passwordField() ?> -->
<button type="submit" class="btn btn-primary">Register</button>
<?php app\core\form\Form::end() ?>