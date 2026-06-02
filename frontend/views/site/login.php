<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">

    <div class="row justify-content-center">
        <div class="col-lg-5">

            <h1 class="text-center mb-4">
                <?= Html::encode($this->title) ?>
            </h1>

            <div class="alert alert-info">
                Bienvenido al sistema. Inicie sesión para continuar.
            </div>

            <p class="text-muted">
                Por favor, complete los siguientes campos para iniciar sesión:
            </p>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form'
            ]); ?>

                <?= $form->field($model, 'username')->textInput([
                    'autofocus' => true,
                    'placeholder' => 'Ingrese su usuario'
                ]) ?>

                <?= $form->field($model, 'password')->passwordInput([
                    'placeholder' => 'Ingrese su contraseña'
                ]) ?>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="showPassword">
                    <label class="form-check-label" for="showPassword">
                        Mostrar contraseña
                    </label>
                </div>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="my-3" style="color:#999;">
                    ¿Olvidó su contraseña?
                    <?= Html::a('Restablecer contraseña', ['site/request-password-reset']) ?>
                    <br>
                    ¿Necesita un nuevo correo de verificación?
                    <?= Html::a('Reenviar correo', ['site/resend-verification-email']) ?>
                </div>

                <div class="alert alert-secondary">
                    Por seguridad, después de varios intentos fallidos la cuenta podría bloquearse temporalmente.
                </div>

                <div class="form-group">
                    <?= Html::submitButton(
                        'Iniciar Sesión',
                        [
                            'class' => 'btn btn-primary w-100',
                            'name' => 'login-button'
                        ]
                    ) ?>
                </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>

<?php
$this->registerJs("
    $('#showPassword').change(function() {
        let tipo = $(this).is(':checked') ? 'text' : 'password';
        $('#loginform-password').attr('type', tipo);
    });
");
?>